<?php
  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    $id = validate($_SESSION['loggedInUserId']);

    $query = "SELECT * FROM users WHERE id='$id' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
      if(mysqli_num_rows($result) == 0){
        logOut();
        redirect('/login.php', 'Trying to be smart?', 'red');
      } else {
        $user_row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if($user_row['email_verified'] == 0){
          logOut();
          redirect('/login.php', 'Email not verified', 'red');
        }
        $user_row['password'] = '';
      }
    } else {
      logOut();
      redirect('/login.php', 'Something went wrong. Ooops', 'yellow');
    }
  } else {
    logOut();
    redirect('/login.php', 'Login to continue ...', 'yellow');
  }
?>