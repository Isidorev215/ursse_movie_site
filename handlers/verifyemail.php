<?php
  require "../config/function.php";

  if(isset($_GET['token'])){
    $token = validate($_GET["token"]);

    $query = "SELECT email_verified, token FROM users WHERE email_verified=0 AND token='$token' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) == 1){
      $update = mysqli_query($conn, "UPDATE users SET email_verified = 1 WHERE token='$token' LIMIT 1");
      if($update){
        redirect('/login.php', 'Email verified', 'green');
      } else {
        redirect('/login.php', 'Something went wrong', 'yellow');
      }
    } else {
      redirect('/login.php', 'Invalid account or already verified', 'yellow');
    }


  } else {
    die ("Something went wrong");
  }
  

?>