<?php
  require "../config/function.php";
  header('Content-Type: application/json');

  global $conn;
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  // TODO: Admin check - Refactor into own module
  if(!isset($_SESSION['auth']) && !isset($_SESSION['loggedInUserId'])){
    echo json_decode(['OK' => false, 'message' => 'Not Allowed']);
    http_response_code(401);
    exit(0);
  }

  $loggedInUserId = $_SESSION['loggedInUserId'];
  $role_result = mysqli_query($conn, "SELECT role FROM users WHERE id='$loggedInUserId' LIMIT 1");
  if(!$role_result || mysqli_num_rows($role_result) != 1){
    echo json_encode(['OK' => false, 'message' => 'Action not allowed']);
    http_response_code(401);
    exit(0);
  }

  $loggedInUser = mysqli_fetch_array($role_result, MYSQLI_ASSOC);
  if(!$loggedInUser || $loggedInUser['role'] != 'admin'){
    echo json_encode(['OK' => false, 'message' => 'Action not allowed.']);
    http_response_code(401);
    exit(0);
  }


  // Checking the intended user exits
  if (!isset($data['user_id'])) {
    echo json_encode(['OK' => false, 'message' => 'User ID not provided']);
    http_response_code(400);
    exit(0);
  }
  $userIdToDelete = $data['user_id'];
  $check_user_result = mysqli_query($conn, "SELECT id FROM users WHERE id='$userIdToDelete' LIMIT 1");

  if(mysqli_num_rows($check_user_result) == 0){
    echo json_encode(['OK' => false, 'message' => 'User not found']);
    http_response_code(404);
    exit(0);
  }

  // Admin cannot delete self
  if($loggedInUserId == $userIdToDelete){
    echo json_encode(['OK' => false, 'message' => 'Admin: You cannot delete yourself']);
    http_response_code(403);
    exit(0);
  }

  
  // Deletion here
  $delete_result = mysqli_query($conn, "DELETE FROM users WHERE id='$userIdToDelete'");
  if($delete_result){
    echo json_encode(['OK' => true, 'message' => 'User Deleted']);
    http_response_code(200);
    exit(0);
  } else {
    echo json_encode(['OK' => false, 'message' => 'User could not be deleted']);
    http_response_code(500);
    exit(0);
  }



  

  exit(0);
?>