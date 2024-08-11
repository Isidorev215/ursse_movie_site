<?php
  require "../config/function.php";
  header('Content-Type: application/json');

  global $conn;
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  $media_id = $data['id'];
  $type = $data['type'];

  if(!isset($_SESSION['auth']) && !isset($_SESSION['loggedInUserId'])){
    echo json_encode(['OK' => false, 'message' => 'Login is required']);
    http_response_code(400);
    exit(0);
  }

  if(!isset($media_id) || !isset($type)){
    echo json_encode(['OK' => false, 'message' => 'Request not properly formatted']);
    http_response_code(401);
    exit(0);
  }

  if($type == 'movie' || $type == 'tv'){
    
    $userId = $_SESSION['loggedInUserId'];
    $column = ($type == 'movie') ? 'subscribed_movies' : 'subscribed_tv_series';
    $currentMediaQuery = "SELECT $column FROM users WHERE id='$userId' LIMIT 1";
    
    $currentMediaResult = mysqli_query($conn, $currentMediaQuery);
    if($currentMediaResult && mysqli_num_rows($currentMediaResult) == 1){

      $media_row = mysqli_fetch_array($currentMediaResult, MYSQLI_ASSOC);
      $subscribedIds = $media_row[$column];
      $subscribedIdArray = ($subscribedIds) ? explode(',', $subscribedIds) : [];

      if(!in_array($media_id, $subscribedIdArray)){
        $subscribedIdArray[] = $media_id;
        $updatedIds = implode(',', $subscribedIdArray);

        $updateQuery = "UPDATE users SET $column='$updatedIds' WHERE id='$userId'";
        $updateResult = mysqli_query($conn, $updateQuery);

        if($updateResult){
          echo json_encode(['OK' => true, 'message' => 'Subscription successful']);
          http_response_code(200);
          exit(0);
        } else {
          echo json_encode(['OK' => false, 'message' => 'Something went wrong']);
          http_response_code(400);
          exit(0);
        }

      } else {
        echo json_encode(['OK' => false, 'message' => 'Already Subscribed']);
        http_response_code(401);
        exit(0);
      }

    } else {
      echo json_encode(['OK' => false, 'message' => 'Something went wrong']);
      http_response_code(401);
      exit(0);
    }
    
    
  } else {
    echo json_encode(['OK' => false, 'message' => 'Request not properly formatted (2)']);
    http_response_code(401);
    exit(0);
  }


?>