<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      $title = "Users";
      include "./partials/head.php";
      include "./includes/authentication.php";
      
      $media_id = $_GET['id'];
      $media_type = $_GET['type'];

      include "./includes/getSubscribedIds.php";
      include "./includes/getMediaDetails.php";

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

            <!-- one content row -->
            <div class="content-row flex flex-row flex-wrap">
              <div class="shrink max-w-full w-full px-4">

                <div class="mt-6 space-y-1">
                  <h2 class="text-2xl font-semibold tracking-tight">Details</h2>
                </div>
                <div role="none" class="shrink-0 bg-border w-full my-4 h-[1px]"></div>

              </div>
            </div>
          </div>
        </main>


        <?php
        include "./partials/footer.php"
        ?>


      </div>


    </div>

    <div class="toast-container fixed bottom-5 left-5 w-full"></div>


    <?php
      include "./partials/navigationJavascriptTags.php";
    ?>
  </body>

</html>