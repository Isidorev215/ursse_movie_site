<?php

  function fetch_multiple_from_internal_api($page, $api_url){
    
    $curl = curl_init();
    curl_setopt_array($curl, [
        CURLOPT_URL => $api_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => json_encode(['page' => $page]),
        CURLOPT_HTTPHEADER => [
					"Content-Type: application/json"
        ],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);
    curl_close($curl);

    if ($err) {
        return ['OK' => false, 'message' => 'Server Error'];
    } else {
        $data = json_decode($response, true);
        if ($data['OK']) {
            return ['OK' => true, 'data' => json_decode($data['data'], true)];
        } else {
            return ['OK' => false, 'message' => $data['message']];
        }
    }
  }
?>