<?php
  // should be run after getSubscribedIds for that ids are available
  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    $loggedInUserId = $_SESSION['loggedInUserId'];
    $tv_ids_array = !empty($subed_tv_ids) ? explode(',', $subed_tv_ids) : [];

    $limit = 10;
    $page = 1;
    $offset = ($page - 1) * $limit;

    $paginated_tv_ids_array = array_slice($tv_ids_array, $offset, $limit);

    $tvseries = [];

    function apiTvReq($url) {
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

    foreach ($paginated_tv_ids_array as $tvId){
      $tvUrl = 'https://api.themoviedb.org/3/tv/' . $tvId . '?language=en-US';
      $single_tv_call = apiTvReq($tvUrl);
      if (!isset($single_tv_call['error'])) {
        $tvseries[] = $single_tv_call;
      } else {
        $tvseries[] = ['error' => true, 'message' => $single_tv_call['message']];
      }
    }

    $subscribed_tv = [
      'page' => $page,
      'results' => $tvseries,
      'per_page' => $limit,
      'total_results' => count($tv_ids_array)
    ];


  }

?>