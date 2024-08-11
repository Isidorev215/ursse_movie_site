<li class="relative" id="user-menu-nav-pill">
  <button type="button" id="user-menu-button" class="px-3 flex text-sm rounded-full focus:outline-none">
    <div class="relative">
      <img class="h-10 w-10 rounded-full border border-gray-700 bg-gray-700" src="/img/brand/small_logo-removebg-preview.png" alt="avatar">
      <span title="online" class="flex justify-center absolute -bottom-0.5 end-1 text-center bg-green-500 border border-white w-3 h-3 rounded-full"></span>
    </div>
    <span class="hidden md:block ms-1 self-center">
      <?php
        echo $name;
      ?>
    </span>
  </button>

  <ul id="profile_drop_down" class="hidden origin-top-right absolute end-0 rounded top-full z-50 py-0.5 text-start min-w-[12rem] bg-white dark:bg-gray-800 border dark:border-gray-700 shadow-md">
    <li class="relative">
      <div class="flex flex-row flex-wrap justify-center items-center -mx-4 px-3 py-4">
        <!-- <div class="shrink max-w-full w-1/3">
          <img src="/img/brand/small_logo-removebg-preview.png" alt="" class="h-8 w-8 rounded-full">
        </div> -->
        <div class="shrink max-w-full px-4 w-2/3 ps-1">
          <div class="font-bold">
            <div class="text-xs text-gray-800 dark:text-gray-300 hover:text-indigo-500">
              <?php
                echo $name;
              ?>
            </div>
          </div>
          <div class="text-gray text-xs truncate">
            <?php
              echo $email;
            ?>
          </div>
        </div>
      </div>
    </li>
    <li class="relative">
      <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
    </li>
    <li class="relative">
      <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="/dashboard.php">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4" viewBox="0 0 16 16">
          <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"></path>
          <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"></path>
        </svg>
        Dashboard
      </a>
    </li>
    <li class="relative">
      <a class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4" viewBox="0 0 16 16">
          <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"></path>
        </svg>
        Profile
      </a>
    </li>

    <li class="relative">
      <hr class="border-t border-gray-200 dark:border-gray-700 my-0">
    </li>

    <li class="relative">
      <form action="./handlers/logout.php" method="POST">
        <button type="submit" class="block w-full py-2 px-6 clear-both whitespace-nowrap hover:text-indigo-500" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline me-2 size-4 bi bi-box-arrow-in-right" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z"></path>
            <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"></path>
          </svg>
          Sign out
        </button>
      </form>
    </li>
  </ul>
</li>