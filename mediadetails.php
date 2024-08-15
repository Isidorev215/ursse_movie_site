<!DOCTYPE html>
<html lang="en">

  <head>
    <?php
      $title = "Media Details";
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

          <?php
            alertMessage();
          ?>

            <!-- one content row -->
            <div class="content-row flex flex-row flex-wrap">

              <div class="flex-wrap max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">
                  <?php
                    echo ''.ucfirst($media_type).' Details';
                  ?>
                </p>
              </div>

              <?php
                if(isset($media_details['success']) && $media_details['success'] === false){
                  $message = 'The media could not be found. Check id: '.$media_id.'';
                  $return_page = 'mysubscriptions.php';
                  include "./partials/inner404.php";
                } else {
                  include './partials/mediacard.php';
                }
              ?>

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