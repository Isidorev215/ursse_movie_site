<?php
  session_start();
  require 'dbcon.php';

  function validate($inputData){
    global $conn;
    return mysqli_real_escape_string($conn, $inputData);
  }

  function redirect($url, $message, $alert_color){
    $_SESSION['status'] = $message;
    $_SESSION['alert_color'] = $alert_color;
    header('Location: '.$url);
    exit(0);
  }

  function alertMessage(){
    if(isset($_SESSION['status'])){
      echo '<div class="alert-bar col-span-6">
        <div class="mt-1 py-2 px-2 w-full rounded-md bg-'.$_SESSION['alert_color'].'-200 text-sm text-center text-gray-700 shadow-sm">'
          .$_SESSION['status'].
        '</div>
      </div>';
      unset($_SESSION['status']);
      unset($_SESSION['alert_color']);

    }
  }

  function logOut(){
    unset($_SESSION['auth']);
    unset($_SESSION['loggedInUserId']);
    session_destroy();
    redirect('/login.php', 'You are logged out', 'green');
  }

  function generateToken($length=32){
    return bin2hex(random_bytes($length));
  }
  
?>