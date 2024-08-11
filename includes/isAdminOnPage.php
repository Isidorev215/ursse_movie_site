<?php
  $role = $user_row['role'];
  if($role == 'user' && $role != 'admin'){
    redirect('/index.php', 'Not an Admin account', 'red');
  }
?>