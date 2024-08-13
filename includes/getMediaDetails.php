<?php
  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    if(!isset($_GET['id']) || !isset($_GET['type'])){
      redirect('/mysubscriptions.php', 'query needs to be set', 'red');
    }
    if($media_type === 'movie' || $media_type === 'tv'){

      // use the media_id and media_type to get he details.
      
    } else {
      redirect('/mysubscriptions.php', 'invalid type', 'red');
    }

  } else {
    logOut();
  }

?>