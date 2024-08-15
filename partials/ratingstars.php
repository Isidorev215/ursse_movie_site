<div>
  <?php
  $over_five = round((($average / 10) * 5), 1);
  $total_vote;

  // Calculate full stars, half stars, and empty stars
  $full_stars = floor($over_five);
  $half_star = ($over_five - $full_stars >= 0.5) ? 1 : 0;
  $empty_stars = 5 - $full_stars - $half_star;
  ?>

  <ul class="flex my-1">
    <?php
    // Full stars
    for ($i = 0; $i < $full_stars; $i++) {
      echo '<li class="me-2 text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                  <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z"></path>
                </svg>
              </li>';
    }

    // Half star
    if ($half_star) {
      echo '<li class="me-2 text-yellow-400">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                  <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z"></path>
                </svg>
              </li>';
    }

    // Empty stars
    for ($i = 0; $i < $empty_stars; $i++) {
      echo '<li class="me-2 text-gray-300">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 512 512">
                  <path class="rating-svg" d="M394,480a16,16,0,0,1-9.39-3L256,383.76,127.39,477a16,16,0,0,1-24.55-18.08L153,310.35,23,221.2A16,16,0,0,1,32,192H192.38l48.4-148.95a16,16,0,0,1,30.44,0l48.4,149H480a16,16,0,0,1,9.05,29.2L359,310.35l50.13,148.53A16,16,0,0,1,394,480Z"></path>
                </svg>
              </li>';
    }
    ?>

    <li class="me-2">
      <?php
      echo '' . $over_five . '(' . $total_vote . ')';
      ?>
    </li>
  </ul>
</div>
