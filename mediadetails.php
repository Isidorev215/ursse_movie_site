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

            <!-- one content row -->
            <div class="content-row flex flex-row flex-wrap">

              <div class="flex-wrap max-w-full px-4 w-full">
                <p class="text-xl font-bold mt-3 mb-5">
                  <?php
                    echo ''.ucfirst($media_type).' Details';
                  ?>
                </p>
              </div>

              <div class="flex-shrink max-w-full px-4 w-full mb-6">
                <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
                  <div class="flex-wrap flex flex-row -mx-4">

                    <div class="flx-shrink max-w-full px-4 w-full text-center md:w-1/3">
                      <div class="p-4">
                        <div class="max-w-full w-full h-auto">
                          <?php
                            echo '<img src="https://image.tmdb.org/t/p/original'.htmlspecialchars($media_details['poster_path']).'" alt="" class="h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';
                          ?>
                        </div>
                      </div>
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full text-left md:w-2/3">
                      <h1 class="text-2xl text-semibold mb-4">Nike Women's Race Running Shoe</h1>
                      <p class="mb-4 text-sm">Sales: 836x</p>
                      <h3 class="font-bold text-3xl text-green-600 mb-4"><span class="line-through me-2 font-normal text-gray-500">97$</span>79$</h3>
                      <div class="text-sm">
                        <p class="mb-2">Brand: <a href="#" class="hover:text-indigo-500">Iphone</a></p>
                        <p class="mb-2">Category: <a href="#" class="hover:text-indigo-500">Smartphone</a></p>
                        <p class="mb-2">Stock: 178</p>
                      </div>
                      <div class="mb-4">
                        <button type="button" id="button-cart" class="py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">
                          Unsubscribe
                        </button>
                      </div>
                    </div>

                    <div class="flex-shrink max-w-full px-4 w-full">
                      <div>
                        <ul class="flex border-b dark:border-gray-700">
                          <li class="me-1 -mb-px">
                            <span class="bg-white dark:bg-gray-800 inline-block py-2 px-4 hover:text-indigo-500 font-semibold dark:border-gray-700 -mb-px border-l border-t border-r rounded-t text-indigo-500">Trailer</span>
                          </li>
                        </ul>
                        <div class="w-full pt-4">
                          <div>
                            <iframe class="w-full" width="560" height="400" src="https://www.youtube.com/embed/AV4kDEGlqFE" frameborder="0" allowfullscreen></iframe>
                          </div>
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


    </div>

    <div class="toast-container fixed bottom-5 left-5 w-full"></div>


    <?php
      include "./partials/navigationJavascriptTags.php";
    ?>
  </body>

</html>