<?php
  require "../config/function.php";
  
  if (isset($_POST["loginbutton"])){
    $usernameInput = strtolower(validate($_POST["username"]));
    $passwordInput = validate($_POST["password"]);

    $username = filter_var($usernameInput, FILTER_SANITIZE_STRING);
    $password = filter_var($passwordInput, FILTER_SANITIZE_STRING);

    if($username == '' || $password == ''){
      redirect('/login.php', 'All fields are mandatory', 'yellow');
    }

    $query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result){
      if(mysqli_num_rows($result) == 1){
        $user_row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if($user_row['email_verified'] == 0){
          redirect('/login.php', 'Email not verified. Check your email', 'yellow');
        }

        if(password_verify($password, $user_row['password'])){
          $_SESSION['auth'] = true;
          $_SESSION['loggedInUserId'] = $user_row['id'];
          redirect('/dashboard.php', 'Login Successfully', 'green');
        } else {
          redirect('/login.php', 'Invalid Credentials', 'yellow');
        }

      } else {
        redirect('/login.php', 'Something is wrong. Ooops', 'yellow');
      }
    } else {
      redirect('/login.php', 'Something is wrong. Ooops', 'yellow');
    }
  }
?>