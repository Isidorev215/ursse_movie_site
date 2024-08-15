

<div class="content-row flex flex-row flex-wrap w-full">
  <div class="shrink max-w-full px-4 w-full mb-6">
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg px-8 py-6 relative overflow-hidden">
      <div class="relative">
        <header class="text-center mx-auto mb-6">
          <h1 class="text-4xl leading-normal mb-2 font-bold text-gray-800 dark:text-gray-300"><span class="font-light">Not Found</span></h1>
          <hr class="block w-12 h-0.5 mx-auto my-5 bg-indigo-500 border-indigo-500">
          <p class="text-gray-500 leading-relaxed font-light text-xl mx-auto pb-2">
            <?php
              echo $message;
            ?>
          </p>
        </header>
        <div class="relative text-center">
          <img src="/img/svg/404.svg" class="max-w-full h-auto mx-auto mb-6" alt="Not found">
          <?php
            echo '<a href="/'.$return_page.'" class="py-2 px-4 inline-block text-center rounded leading-5 text-gray-100 bg-indigo-500 border border-indigo-500 hover:text-white hover:bg-indigo-600 hover:ring-0 hover:border-indigo-600 focus:bg-indigo-600 focus:border-indigo-600 focus:outline-none focus:ring-0">';
            echo 'Back';
            echo '</a>';
          ?>
        </div>
      </div>
    </div>
  </div>
</div>