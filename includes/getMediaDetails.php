<?php
  $media_details = [];
  $media_videos = [];

  if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
    

    if(!isset($_GET['id']) || !isset($_GET['type'])){
      redirect('/mysubscriptions.php', 'query needs to be set', 'red');
    }
    if($media_type === 'movie' || $media_type === 'tv'){

      // use the media_id and media_type to get he details.
      $media_url = $media_type === 'movie' ? 'https://api.themoviedb.org/3/movie/' . $media_id . '?language=en-US' : 'https://api.themoviedb.org/3/tv/' . $media_id . '?language=en-US';
      $media_videos_url = $media_type === 'movie' ? 'https://api.themoviedb.org/3/movie/' . $media_id . '/videos?language=en-US' : 'https://api.themoviedb.org/3/tv/' . $media_id . '/videos?language=en-US'; 
      $media_details = make_api_call($media_url);
      $media_videos =  make_api_call($media_videos_url);  
    } else {
      redirect('/mysubscriptions.php', 'invalid type', 'red');
    }

  } else {
    logOut();
  }

?>