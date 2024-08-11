<?php
  require "../config/function.php";
  header('Content-Type: application/json');
  header('Access-Control-Allow-Origin: https://nwaiwui.urse.org');
  header('Access-Control-Allow-Methods: POST, GET');
  header('Access-Control-Allow-Headers: Content-Type');
  
  global $conn;
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  $email = validate($data['email']);
  
  if(isset($email) && $email == ''){
    echo json_encode(['OK' => true, 'message' => '']);
    http_response_code(200);
    exit(0);
  }
  
  $query = "SELECT email FROM users";
  $result = mysqli_query($conn, $query);

  if(!$result){
    echo json_encode(['OK' => false, 'message' => 'Something is wrong']);
    http_response_code(500);
    exit(1);
  }

  if($result->num_rows > 0){
    $emails_from_db = [];
    while($row = $result->fetch_assoc()){
      $emails_from_db[] = $row['email'];
    }

    if(in_array($email, $emails_from_db)){
      echo json_encode(['OK' => false, 'message' => ''.$email. ' is not available']);
      http_response_code(200);
      exit(0);
    } else {
      echo json_encode(['OK' => true, 'message' => ''.$email. ' is available']);
      http_response_code(200);
      exit(0);
    }

  }else{
    echo json_encode(['OK' => true, 'message' => ''.$email. ' is available']);
    http_response_code(200);
    exit(0);
  }
  
  exit(0);
?>