<?php
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: https://nwaiwui.urse.org');
  header('Access-Control-Allow-Methods: POST, GET');
  header('Access-Control-Allow-Headers: Content-Type');
  // Get the Referer header
  $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
  $allowed_domain = 'https://nwaiwui.ursse.org';

  // Check if the Referer header matches the allowed domain
  if (strpos($referer, $allowed_domain) === false) {
      echo json_encode(['OK' => false, 'message' => 'Access denied']);
      http_response_code(403);
      exit(0);
  }

  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  if(!isset($data['page'])){
    echo json_encode(['OK' => false, 'message' => 'Pagination is required']);
    http_response_code(400);
    exit(0);
  }
  
  $page = $data['page'];
  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=" . $page . "&sort_by=popularity.desc",
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
  $err = curl_error($curl);

  curl_close($curl);

  if ($err) {
    echo json_encode(['OK' => false, 'message' => 'Server Error']);
    http_response_code(500);
    exit(0);
  } else {
    echo json_encode(['OK' => true, 'data' => $response]);
    http_response_code(200);
    exit(0);
  }

?>