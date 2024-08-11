<?php
  require "../config/function.php";
  require "../config/utils.php";
  require "../config/sendingemail.php";

  header('Content-Type: application/json');

  global $conn;
  $json = file_get_contents('php://input');
  $data = json_decode($json, true);

  // TODO: Admin check - Refactor into own module
  if(!isset($_SESSION['auth']) && !isset($_SESSION['loggedInUserId'])){
    echo json_encode(['OK' => false, 'message' => 'Not Allowed']);
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
  $userIdToReset = $data['user_id'];
  $user_result = mysqli_query($conn, "SELECT id, email, password, email_verified FROM users WHERE id='$userIdToReset' LIMIT 1");

  if(mysqli_num_rows($user_result) != 1){
    echo json_encode(['OK' => false, 'message' => 'User not found']);
    http_response_code(404);
    exit(0);
  }

  $userInfo = mysqli_fetch_array($user_result, MYSQLI_ASSOC);
  if($userInfo['email_verified'] == 0){
    echo json_encode(['OK' => false, 'message' => 'Users email not verified']);
    http_response_code(401);
    exit(0);
  }


  $old_hashed_password = $userInfo['password'];
  $new_password = generateNewPassword();
  $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

  $password_reset_query = "UPDATE users SET password = '$hashed_password', last_password_reset = NOW() WHERE id='$userIdToReset' LIMIT 1";
  $password_reset_result = mysqli_query($conn, $password_reset_query);
  if($password_reset_result){
    $mailsent = sendNewPasswordEmail($userInfo['email'], $new_password);
    if($mailsent){
      echo json_encode(['OK' => true, 'message' => 'Password reset: Email Sent']);
      http_response_code(200);
      exit(0);
    } else {
      mysqli_query($conn, "UPDATE users SET password = '$old_hashed_password' WHERE id='$userIdToReset' LIMIT 1");
      echo json_encode(['OK' => false, 'message' => 'Email not sent']);
      http_response_code(500);
      exit(0);
    }

  } else {
    echo json_encode(['OK' => false, 'message' => 'Password not able to be reset']);
    http_response_code(500);
    exit(0);
  }


?>