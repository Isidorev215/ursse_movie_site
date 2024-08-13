<?php
  // should be run after getSubscribedIds for that ids are available
  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    $loggedInUserId = $_SESSION['loggedInUserId'];
    $movie_ids_array = !empty($subed_movies_ids) ? explode(',', $subed_movies_ids) : [];

    $limit = 10;
    $page = 1;
    $offset = ($page - 1) * $limit;

    $paginated_movie_ids_array = array_slice($movie_ids_array, $offset, $limit);

    $movies = [];

    function apiMovieReq($url) {
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
          "Authorization: Bearer " . getenv('TMDB_API_TOKEN'),
          "accept: application/json"
        ],
      ]);


      $response = curl_exec($curl);

      // Check for cURL errors
      if (curl_errno($curl)) {
        $error_msg = curl_error($curl);
        curl_close($curl);
        return ['error' => true, 'message' => $error_msg];
      }

      curl_close($curl);
      $data = json_decode($response, true);

      return $data;
    }

    foreach ($paginated_movie_ids_array as $movieId){
      $movieUrl = 'https://api.themoviedb.org/3/movie/' . $movieId . '?language=en-US';
      $single_movie_call = apiMovieReq($movieUrl);
      if (!isset($single_movie_call['error'])) {
        $movies[] = $single_movie_call;
      } else {
        $movies[] = ['error' => true, 'message' => $single_movie_call['message']];
      }
    }

    $subscribed_movies = [
      'page' => $page,
      'results' => $movies,
      'per_page' => $limit,
      'total_results' => count($movie_ids_array)
    ];


  }

?>