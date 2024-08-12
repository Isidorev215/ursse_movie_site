<!DOCTYPE html>
<html lang="en">
  <head>
    <?php

      $title = "Movie Home";
      include "./partials/head.php";
      if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
        include "./includes/authentication.php";
      }
      // runs immediateky after auth so that the status of subbed movies and tv is known
      include "./includes/getSubscribedContent.php";

      // for finding media content
      include "./includes/discover_movies.php";
      include "./includes/discover_tv.php";

      // for rendering the cards
      require "./config/utils.php";
    ?>
  </head>
	<body class="font-sans text-base font-normal text-gray-600 dark:text-gray-400 bg-gray-100 dark:bg-gray-900">
    
    <div class="overall wrapper overflow-x-hidden">
    
      <?php
        include "./partials/sidebar.php"
      ?>

      
      <div id="content-wrapper" class="flex flex-col min-h-screen transition-all duration-500 ease-in-out ms-0 me-0 md:ms-64">

        <?php
          include "./partials/navbar.php"
        ?>

        <main class="pt-20 -mt-2">
          <div class="mx-auto py-2 sm:px-2">

            <!-- <div class="w-full bg-gray-300 border text-sm text-gray-800 p-3">
              <?php
                // echo $subed_movies_ids;
              ?>
            </div> -->

            <!-- one content row -->
            <div class="content-row flex flex-row flex-wrap">
              <div class="shrink max-w-full w-full px-4">

                <div class="mt-6 space-y-1">
                  <h2 class="text-2xl font-semibold tracking-tight">Movies</h2>
                </div>
                <div role="none" class="shrink-0 bg-border w-full my-4 h-[1px]"></div>

                <!-- Movies -->
                <div class="relative">
                  <div class="relative overflow-hidden" style="--radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">
                    <div class="overflow-scroll border-[inherit] w-full h-full">
                      <div style="min-width: 100%; display: table;">
                        <div id="movie_discovery" class="flex space-x-4 pb-4">
                          <?php
                            if($discovery_err){
                              echo "<p>Something went wrong</p>";
                            } else {
                              renderMovieCards($discovered_movies, $subed_movies_ids);
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt-6 space-y-1">
                  <h2 class="text-2xl font-semibold tracking-tight">TV Series</h2>
                </div>
                <div role="none" class="shrink-0 bg-border w-full my-4 h-[1px]"></div>

                
                <!-- Series -->
                <div class="relative">
                  <div class="relative overflow-hidden" style="position: relative; --radix-scroll-area-corner-width: 0px; --radix-scroll-area-corner-height: 0px;">
                    <div class="h-full w-full rounded-[inherit]" style="overflow: scroll;">
                      <div style="min-width: 100%; display: table;">
                        <div id="tv_discovery" class="flex space-x-4 pb-4">
                          <?php
                            if($tv_err){
                              echo "<p>Something went wrong</p>";
                            } else {
                              renderTVCards($discovered_tv, $subed_tv_ids);
                            }
                          ?>
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
          include "./partials/footer.php";
        ?>


      </div>


    </div>

    <div class="toast-container fixed bottom-5 left-5 w-full"></div>
    
    <?php
      include "./partials/navigationJavascriptTags.php";
    ?>
    <script src="./js/userSubscriptions.js" defer type="module"></script>
  </body>
</html>
