<aside id="sidebar-menu" class="fixed transition-all duration-500 ease-in-out h-screen bg-white dark:bg-gray-800 shadow-sm w-64 -ms-64 md:ms-0">
  <div class="h-full overflow-y-auto scrollbars">
    <!-- logo -->
    <div class="text-center py-5">
      <a href="/" class="relative">
        <h2 class="text-2xl font-semibold text-gray-200 px-4 max-h-9 overflow-hidden hidden-compact">
          <img class="inline-block w-14 h-auto me-2 -mt-1" src="/img/brand/small_logo-removebg-preview.png">
          <span class="text-gray-700 dark:text-gray-200">Moovs</span>
        </h2>
      </a>
    </div>

    <ul id="side-menu" class="w-full flex flex-col float-none font-medium ps-1 5">
      <?php
        if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
          echo '
            <li>
              <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-indigo-400" href="/dashboard.php">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block size-4 me-2" viewBox="0 0 16 16">
                  <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"></path>
                  <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"></path>
                </svg>
                <span>Dashboard</span>
              </a>
            </li>
          ';
        }
      ?>
      
      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-indigo-400" href="/">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block size-4 me-2" viewBox="0 0 16 16">
            <path d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z"></path>
          </svg>
          <span>Home</span>
        </a>
      </li>
      <li>
        <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-indigo-400" href="/employees.php">
          <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block size-4 me-2 bi bi-briefcase" viewBox="0 0 16 16">
            <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"></path>
          </svg>
          <span>Team</span>
        </a>
      </li>

      <?php
        if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId']) && $user_row['role'] == 'admin'){
          echo '
            <li>
              <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-indigo-400" href="/usersadmin.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="inline-block size-4 me-2" viewBox="0 0 16 16">
                  <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                  <path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"></path>
                  <path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"></path>
                </svg>
                <span>Users</span>
              </a>
            </li>
          ';
        }
      ?>

      <?php
        if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId']) && $user_row['role'] == 'admin'){
          echo '
            <li>
              <a class="block py-2.5 px-6 hover:text-indigo-500 dark:hover:text-indigo-400" href="/mysubscriptions.php">
                <img src="./img/svg/subscribe.svg" class="inline-block size-4 me-2" />
                <span>Subscriptions</span>
              </a>
            </li>
          ';
        }
      ?>

    </ul>
  </div>
</aside>