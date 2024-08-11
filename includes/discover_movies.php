<?php

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.themoviedb.org/3/discover/movie?include_adult=false&include_video=false&language=en-US&page=1",
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

  $discovered_movies = json_decode(curl_exec($curl), true);
  $discovery_err = curl_error($curl);

  curl_close($curl);

?>