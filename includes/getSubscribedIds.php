<?php
  $subed_movies_ids = '';
  $subed_tv_ids = '';
  
  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    $loggedInUserId = $_SESSION['loggedInUserId'];

    $query = "SELECT subscribed_movies, subscribed_tv_series FROM users WHERE id='$loggedInUserId' LIMIT 1";
    $result = mysqli_query($conn, $query);

    if($result && mysqli_num_rows($result) == 1){
      $content_row = mysqli_fetch_array($result, MYSQLI_ASSOC);
      $subed_movies_ids = $content_row['subscribed_movies'];
      $subed_tv_ids = $content_row['subscribed_tv_series'];
    }

  }

?>