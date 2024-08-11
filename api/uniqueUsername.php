<?php
  require "../config/function.php";
  header('Content-Type: application/json');
  
  global $conn;
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  $username = strtolower(validate($data['username']));
  
  if(isset($username) && $username == ''){
    echo json_encode(['OK' => true, 'message' => '']);
    http_response_code(200);
    exit(0);
  }
  
  $query = "SELECT username FROM users";
  $result = mysqli_query($conn, $query);

  if(!$result){
    echo json_encode(['OK' => false, 'message' => 'Something is wrong']);
    http_response_code(500);
    exit(1);
  }

  if($result->num_rows > 0){
    $usernames_from_db = [];
    while($row = $result->fetch_assoc()){
      $usernames_from_db[] = $row['username'];
    }

    if(in_array($username, $usernames_from_db)){
      echo json_encode(['OK' => false, 'message' => ''.$username. ' is not available']);
      http_response_code(200);
      exit(0);
    } else {
      echo json_encode(['OK' => true, 'message' => ''.$username. ' is available']);
      http_response_code(200);
      exit(0);
    }

  }else{
    echo json_encode(['OK' => true, 'message' => ''.$username. ' is available']);
    http_response_code(200);
    exit(0);
  }
  
  exit(0);
?>