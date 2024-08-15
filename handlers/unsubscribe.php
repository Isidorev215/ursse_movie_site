<?php
  require "../config/function.php";

  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){

    if(isset($_POST['unsubscribe'])){
      $media_id = validate($_POST['id']);
      $type = validate($_POST['type']);
      
      if(isset($_POST['id']) && isset($_POST['type'])){
  
        $loggedInUserId = $_SESSION['loggedInUserId'];
        $column = $type === 'movie' ? 'subscribed_movies' : 'subscribed_tv_series';
        $query = "SELECT $column FROM users WHERE id='$loggedInUserId' LIMIT 1";
        $result = mysqli_query($conn, $query);

        if($result && mysqli_num_rows($result) == 1){
          $content_row = mysqli_fetch_array($result, MYSQLI_ASSOC);
          $subscription_array = explode(',', $content_row[$column]);
          if(count($subscription_array) > 0){
            if (in_array($media_id, $subscription_array)) {
              $subscription_array = array_filter($subscription_array, function($item) use ($media_id) {
                return $item != $media_id;
              });

              $new_subscription_list = implode(',', $subscription_array);

              $update_query = "UPDATE users SET $column='$new_subscription_list' WHERE id='$loggedInUserId'";
              $update_result = mysqli_query($conn, $update_query);

              if ($update_result) {
                redirect('/mysubscriptions.php', 'Subscription removed successfully', 'green');
              } else {
                redirect('/mediadetails.php?id='.$media_id.'&type='.$type.'', 'Failed to unsubscribe from media', 'red');
              }
          } else {
              redirect('/mediadetails.php?id='.$media_id.'&type='.$type.'', 'You are not subscribed to this media', 'red');
            }
          } else {
            redirect('/mysubscriptions.php', 'No movie/tv subscription list', 'yellow');
          }


        } else {
          redirect('/mysubscriptions.php', 'Something went wrong', 'red');
        }

      } else {
        redirect('/mediadetails.php?id='.$media_id.'&type='.$type.'', 'Invalid parameters', 'yellow');
      }
    } else {
      redirect('/mysubscriptions.php', 'Action Not Allowed', 'yellow');
    }

  } else {
    logOut();
    redirect('/login.php', 'Login to continue ...', 'yellow');
  }
  

?>