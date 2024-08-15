
<div class="flex-shrink max-w-full px-4 w-full mb-6">
  <div class="p-6 bg-white dark:bg-gray-800 rounded-lg shadow-lg h-full">
    <div class="flex-wrap flex flex-row -mx-4">

      <div class="flx-shrink max-w-full px-4 w-full text-center md:w-1/3">
        <div class="p-4">
          <div class="max-w-full w-full h-auto">
            <?php
              echo '<img src="https://image.tmdb.org/t/p/original' . htmlspecialchars($media_details['poster_path']) . '" alt="" class="h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';
            ?>
          </div>
          
          <div class="my-4 w-full">
            <button type="button" id="button-cart" class="w-full py-2 px-5 inline-block text-center rounded leading-5 text-gray-100 bg-red-500 border border-red-500 hover:text-white hover:bg-red-700 hover:ring-0 hover:border-red-600 focus:bg-indigo-600 focus:border-red-600 focus:outline-none focus:ring-0">
              Unsubscribe
            </button>
          </div>

        </div>
      </div>

      <div class="flex-shrink max-w-full px-4 w-full text-left md:w-2/3">
        <h1 class="text-2xl text-semibold">
          <?php
            echo $media_type === 'movie' ? $media_details['title'] : $media_details['name'];
          ?>
        </h1>
        <p class="mb-4">
          <?php
            echo $media_details['tagline'];
          ?>
        </p>
        <?php
          $average = $media_details['vote_average'];
          $total_vote = $media_details['vote_count'];
          include "./partials/ratingstars.php";
        ?>
        <p class="mb-2 text-sm">
          <?php
            echo 'Released: ';
            echo $media_type === "movie" ? $media_details["release_date"] : $media_details["first_air_date"];
          ?>
        </p>
        <?php
          if($media_type === 'movie'){
            $formatter = new NumberFormatter('en_GB',  NumberFormatter::CURRENCY);

            if($media_details['revenue'] >= $media_details['budget']){
              echo '<h3 class="text-base mb-2 text-green-500">Box office: ';
              echo ''.$formatter->formatCurrency($media_details['revenue'], 'USD').' ('.$formatter->formatCurrency($media_details['budget'], 'USD').')</h3>';
              echo '</h3>';
            } else {
              echo '<h3 class="text-base mb-2 text-red-500">Box office:';
              echo ''.$formatter->formatCurrency($media_details['revenue'], 'USD').' ('.$formatter->formatCurrency($media_details['budget'], 'USD').')</h3>';
              echo '</h3>';
            }
          } else {
            echo '';
          }
        ?>
        
        <div class="text-sm w-full flex justify-start items-center space-x-2 flex-wrap flex-row mb-2">
          <?php
            foreach ($media_details['genres'] as $genre){
              echo '<span class="p-2 bg-gray-300 text-gray-700 rounded-md border shadow-sm">';
              echo ''.$genre["name"].'';
              echo '</span>';
            }
          ?>
        </div>

        <div class="text-sm w-full max-w-96 text-justify py-2 mb-2">
          <?php
            echo $media_details['overview'];
          ?>
        </div>

        <div class="w-full flex justify-start items-center mb-2">
          <span class="px-2 py-1 text-sm bg-gray-400 text-white border rounded-md">
            <?php
              if($media_type === 'movie'){
                echo 'Runtime: '.$media_details['runtime'].' mins';
              } else {
                echo ''.$media_details['number_of_seasons'].'  Seasons | '.$media_details['number_of_episodes'].'  Episodes';
              }
            ?>
          </span>
        </div>

        <div class="w-full flex justify-start items-center space-x-3 flex-wrap flex-row mb-2">
          <?php
            if($media_type === 'tv'){
              echo '<span class="text-sm">Available on: </span>';
              foreach($media_details['networks'] as $network){
                echo '<span class="">';
                echo '<img src="https://image.tmdb.org/t/p/w45'.htmlspecialchars($network['logo_path']).'" alt="'.$network['name'].'" />';
                echo '</span>';
              }
            }
          ?>
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
              <?php
                $trailer = getVideoTypeFromTMDB($media_videos['results'], 'YouTube', 'Teaser');
                if($trailer['status'] === false){
                  echo 'No Trailer Available';
                } else {
                  echo '<iframe class="w-full" width="560" height="400" src="https://www.youtube.com/embed/'.$trailer['key'].'" frameborder="0" allowfullscreen></iframe>';
                }
              ?>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>