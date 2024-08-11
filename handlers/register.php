<?php
  require "../config/function.php";
  require "../config/sendingemail.php";
  
  if (isset($_POST["registerbutton"])){
    $username = strtolower(validate($_POST["username"]));
    $firstname = validate($_POST["firstname"]);
    $lastname = validate($_POST["lastname"]);
    $email = validate($_POST["email"]);
    $password = validate($_POST["password"]);
    $password_confirmation = validate($_POST["password_confirmation"]);
    $favorite = validate($_POST["favorite"]);
    
    if($username == '' || $firstname == '' || $lastname == '' || $email == '' || $password == '' || $favorite == ''){
      redirect('/register.php', 'Please fill in all fields', 'yellow');
      return;
    }
    if($password != $password_confirmation){
      redirect('/register.php', 'Passwords do not match', 'yellow');
      return;
    }

    $token = generateToken();
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, firstname, lastname, email, password, favorite, token) VALUES ('$username', '$firstname', '$lastname', '$email', '$hashed_password', '$favorite', '$token')";

    $mailsent = sendEmailVerification($email, $token);
    if($mailsent){
      $result = mysqli_query($conn, $query);
      if($result){
        redirect('/login.php', "Registration Successful. Verification email sent.", "green");
      } else {
        redirect('/register.php', "Something went wrong. Ooops", "yellow");
      }
      
    } else {
      redirect('/register.php', "Something went wrong (e). Ooops", "yellow");
    }
  }
?>