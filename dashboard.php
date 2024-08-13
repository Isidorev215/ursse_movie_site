<!DOCTYPE html>
<html lang="en">

<head>
  <?php
    $title = "Dashboard";
    include "./partials/head.php";
    include "./includes/authentication.php";
    include "./includes/getSubscribedContent.php";
  ?>
</head>

<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-900">

  <div class="overall wrapper overflow-x-hidden">

    <?php
      include "./partials/sidebar.php";
    ?>


    <div id="content-wrapper" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ms-0 me-0 md:ms-64">

      <?php
        include "./partials/navbar.php";
      ?>

      <main class="pt-20 -mt-2">
        <div class="mx-auto py-2 sm:px-2">
          <!-- A row . -->
          <div class="flex flex-row flex-wrap">
            <div class="shrink max-w-full px-4 w-full">
              <p class="text-xl font-bold mt-3 mb-5">Dashboard</p>
            </div>

            <div class="shrink max-w-full px-4 w-full lg:w-1/2 mb-6">
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg px-8 py-6 relative overflow-hidden">
                <div class="absolute -end-8 -bottom-8 text-indigo-500">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="opacity-10 w-36 h-auto bi bi-hdd-stack" viewBox="0 0 16 16">
                    <path d="M14 10a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-1a1 1 0 0 1 1-1h12zM2 9a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-1a2 2 0 0 0-2-2H2z"></path>
                    <path d="M5 11.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zM14 3a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h12zM2 2a2 2 0 0 0-2 2v1a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2z"></path>
                    <path d="M5 4.5a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0zm-2 0a.5.5 0 1 1-1 0 .5.5 0 0 1 1 0z"></path>
                  </svg>
                </div>
                <div class="relative">
                  <h4 class="font-bold text-gray-800 dark:text-gray-200 text-2xl mb-3">This is your Dashboard<br> For Movies ....!</h4>
                  <p class="text-gray-500 mb-6">
                    Apparently your best entertainment stuff is: 
                    <br /> 
                    <span class="font-semibold">
                      <?php
                        echo $user_row['favorite'];
                      ?>
                    </span> 
                    😒.
                  </p>
                  <span class="py-2 px-4 inline-block text-center mb-3 rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                    <?php
                      echo '<span>'.$user_row['firstname'].' '.$user_row['lastname'].'</span>'
                    ?>
                  </span>
                </div>
              </div>
            </div>

            <div class="shrink max-w-full px-4 w-full lg:w-1/2">
              <div class="flex flex-row flex-wrap -mx-3 lg:-mx-4">

                <div class="shrink max-w-full px-3 lg:px-4 w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex flex-row">
                      <div class="self-center w-16 h-16 rounded-full bg-gray-100 text-center flex justify-center items-center">
                        <img src="/img/svg/movie.svg" alt="" srcset="">
                      </div>
                      <div class="ms-3">
                        <h2 class="self-center mb-1">Movies</h2>
                        <p class="text-xl font-semibold">
                          <?php
                            echo ''.count(explode(',', $subed_movies_ids)).'';
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                
                <div class="shrink max-w-full px-3 lg:px-4 w-1/2 mb-6">
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6">
                    <div class="flex flex-row">
                      <div class="self-center w-16 h-16 rounded-full bg-gray-100 text-center flex justify-center items-center">
                        <img src="/img/svg/netflix.svg" alt="" srcset="">
                      </div>
                      <div class="ms-3">
                        <h2 class="self-center mb-1">Series</h2>
                        <p class="text-xl font-semibold">
                          <?php
                            echo ''.count(explode(',', $subed_tv_ids)).'';
                          ?>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>

          </div>

        </div>
      </main>


      <?php
      include "./partials/footer.php"
      ?>


    </div>

    <div class="toast-container fixed bottom-5 left-5 w-full"></div>


  </div>
  <?php
    include "./partials/navigationJavascriptTags.php";
  ?>
  <script src="./js/userSubscriptions.js" defer type="module"></script>
</body>

</html>