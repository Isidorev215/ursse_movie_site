<nav id="navbar" class="z-50 fixed flex flex-row flex-nowrap items-center justify-between mt-0 py-2 px-6 bg-white dark:bg-gray-800 shadow-sm transition-all duration-500 ease-in-out start-0 end-0 md:start-64">
  
  <button id="navbar-toggle" type="button" class="inline-flex items-center ustify-center text-gray-800 hover:text-gray-600 dark:text-gray-300 dark:hover:text-gray-200 focus:outline-none focus:ring-0">
    <span class="sr-only">Mobile menu</span>
    <svg id="half-burger-menu" class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
      <path class="md:hidden" fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"></path>
      <path class="hidden md:block" d="M2 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
    </svg>
  </button>

  <ul class="left-side-nav flex ms-auto mt-2">
    <!-- Each li can be a link or hold an icon -->
    <li class="relative hidden md:block">
      <a href="/" class="flex py-3 px-4 text-sm rounded-full focus:outline-none">
        <span>Home</span>
      </a>
    </li>
    <li class="relative hidden md:block">
      <a href="/employees.php" class="flex py-3 px-4 text-sm rounded-full focus:outline-none">
        <span>Team</span>
      </a>
    </li>

    <?php 
      if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId']) && $user_row['role'] == 'admin'){
        echo '<li class="relativ flex justify-center items-center">
                <div class="flex py-1 px-2 text-sm rounded-md focus:outline-none text-white bg-green-400">
                  <span>Admin</span>
                </div>
              </li>';
      }
    ?>
    
    <li class="relative">
      <button id="darkmode_toggle" type="button" class="flex py-3 px-4 text-sm rounded-full focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="hidden dark:block bi bi-sun" viewBox="0 0 16 16">
          <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8M8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0m0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13m8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5M3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8m10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0m-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0m9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707M4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708"></path>
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="dark:hidden bi bi-moon" viewBox="0 0 16 16">
          <path d="M6 .278a.77.77 0 0 1 .08.858 7.2 7.2 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277q.792-.001 1.533-.16a.79.79 0 0 1 .81.316.73.73 0 0 1-.031.893A8.35 8.35 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.75.75 0 0 1 6 .278"></path>
          <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.73 1.73 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.73 1.73 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.73 1.73 0 0 0 1.097-1.097zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
        </svg>
      </button>
    </li>

    <?php
      if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
        $name = $user_row['firstname']. " " .$user_row['lastname'];
        $email = $user_row['email'];
        include './partials/userMenuNavPill.php';
      }else{
        include './partials/authbuttons.php';
      }
    ?>
    
    
  </ul>

</nav>