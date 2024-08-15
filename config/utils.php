<?php
function timeAgo($datetime) {
    $now = new DateTime();
    $past = new DateTime($datetime);
    $interval = $now->diff($past);

    // Ensure that the interval is positive
    if ($past > $now) {
        $interval = $past->diff($now);
        return 'in the future'; // Adjust this message as needed
    }

    if ($interval->y > 0) {
        return $interval->y . ' year' . ($interval->y > 1 ? 's' : '') . ' ago';
    } elseif ($interval->m > 0) {
        return $interval->m . ' month' . ($interval->m > 1 ? 's' : '') . ' ago';
    } elseif ($interval->d > 0) {
        if ($interval->d == 1) {
            return '1 day ago';
        } elseif ($interval->d < 7) {
            return $interval->d . ' days ago';
        } else {
            return floor($interval->d / 7) . ' week' . (floor($interval->d / 7) > 1 ? 's' : '') . ' ago';
        }
    } elseif ($interval->h > 0) {
        return $interval->h . ' hour' . ($interval->h > 1 ? 's' : '') . ' ago';
    } elseif ($interval->i > 0) {
        return $interval->i . ' minute' . ($interval->i > 1 ? 's' : '') . ' ago';
    } else {
        return $interval->s . ' second' . ($interval->s > 1 ? 's' : '') . ' ago';
    }
}

function generateNewPassword($length = 6) {
    // Characters that can be used in the token
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    
    // Generate a random string of the specified length
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, $charactersLength - 1);
        $randomString .= $characters[$randomIndex];
    }
    
    return $randomString;
}

function add_detail_button($id, $type){
	if(isset($_SESSION['auth']) && isset($_SESSION['loggedInUserId'])){
		echo '<a href="/mediadetails.php?id='.$id.'&type='.$type.'" class="absolute w-full flex justify-start items-center bottom-2 left-2 z-10">';
		echo '<span class="px-4 py-2 text-gray-200 bg-gray-700 transparent rounded-md">';
		echo 'Details';
		echo '</span>';
		echo '</a>';
	}
}

function renderMovieCards($movies, $subed=""){
	if(!empty($movies['results'])){
		$subed_array = explode(',', $subed);

		foreach($movies['results'] as $movie){

			if (isset($movie['success']) && $movie['success'] === false) {
				echo '<div class="movie relative space-y-3 w-[250px]">';
					echo '<button type="button" title="Add movie" disabled class="absolute top-6 right-4 z-10">';
					echo '<img class="hidden" src="/img/svg/heart.svg" alt="">';
					echo '</button>';
				echo '<div>';
				echo '<div class="overflow-hidden rounded-md">';
				echo '<img src="/img/image_not_found.jpeg" alt="" class="border h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';
				echo '</div>';
				echo '</div>';
				echo '<div class="space-y-1 text-sm">';
				echo '<h3 class="font-medium leading-none truncate">Movie not found</h3>';
				echo '<p class="text-xs text-muted_foreground">Failed</p>';
				echo '</div>';
				echo '</div>';
				
			} else {
				
				echo '<div class="movie relative space-y-3 w-[250px]">';
				if(count($subed_array) > 0 && in_array($movie['id'], $subed_array)){
					echo '<button id="'.$movie['id'].'" type="button" disabled title="Already Subscribed" class="movie_sub absolute top-6 right-4 z-10">';
					echo '<img src="/img/svg/heart_fill.svg" alt="">';
					echo '</button>';
				} else {
					echo '<button id="'.$movie['id'].'" type="button" title="Add movie" class="movie_sub absolute top-6 right-4 z-10">';
					echo '<img src="/img/svg/heart.svg" alt="">';
					echo '</button>';
				}
				
				echo '<div>';
				echo '<div class="relative overflow-hidden rounded-md">';
				echo '<img src="https://image.tmdb.org/t/p/w500'.htmlspecialchars($movie['poster_path']).'" alt="" class="h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';

				add_detail_button($movie['id'], 'movie');

				echo '</div>';
				echo '</div>';
				echo '<div class="space-y-1 text-sm">';
				echo '<h3 class="font-medium leading-none truncate">' . htmlspecialchars($movie['title']) . '</h3>';
				echo '<p class="text-xs text-muted_foreground">Released: '.htmlspecialchars($movie['release_date']).'</p>';
				echo '</div>';
				echo '</div>'; 
			}

		}

	} else {
		echo "<p>No movies found.</p>";
	}
}

function renderTVCards($series, $subed=""){
	if(!empty($series['results'])){
		$subed_array = explode(',', $subed);

		foreach($series['results'] as $show){
			if(isset($show['success']) && $show['success'] === false) {
				echo '<div class="show relative space-y-3 w-[250px]">';
				echo '<button type="button" title="Add show" disabled class="absolute top-6 right-4 z-10">';
				echo '<img class="hidden" src="/img/svg/heart.svg" alt="">';
				echo '</button>';
				echo '<div>';
				echo '<div class="overflow-hidden rounded-md">';
				echo '<img src="/img/image_not_found.jpeg" alt="" class="border h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';
				echo '</div>';
				echo '</div>';
				echo '<div class="space-y-1 text-sm">';
				echo '<h3 class="font-medium leading-none truncate">TVshow not found</h3>';
				echo '<p class="text-xs text-muted_foreground">Failed</p>';
				echo '</div>';
				echo '</div>';
			} else {
				echo '<div class="tvshow relative space-y-3 w-[150px]">';
				if(count($subed_array) > 0 && in_array($show['id'], $subed_array)){
					echo '<button id="'.$show['id'].'" type="button" disabled title="Already Subscribed" class="tv_sub absolute top-6 right-4 z-10">';
					echo '<img src="/img/svg/heart_fill.svg" alt="">';
					echo '</button>';
				} else {
					echo '<button id="'.$show['id'].'" type="button" title="Add movie" class="tv_sub absolute top-6 right-4 z-10">';
					echo '<img src="/img/svg/heart.svg" alt="">';
					echo '</button>';
				}
				echo '<div>';
				echo '<div class="relative overflow-hidden rounded-md">';
				echo '<img src="https://image.tmdb.org/t/p/w500'.htmlspecialchars($show['poster_path']).'" alt="" class="h-auto w-auto object-cover transition-all hover:scale-105 aspect-[3/4]">';

				add_detail_button($show['id'], 'tv');

				echo '</div>';
				echo '</div>';
				echo '<div class="space-y-1 text-sm">';
				echo '<h3 class="font-medium leading-none truncate">' . htmlspecialchars($show['name']) . '</h3>';
				echo '<p class="text-xs text-muted_foreground">Released: '.htmlspecialchars($show['first_air_date']).'</p>';
				echo '</div>';
				echo '</div>'; 
			}
		}

	} else {
		echo "<p>No shows found.</p>";
	}
}

function getVideoTypeFromTMDB($videos_array, $website, $type) {
	$matching_videos = [];

	if (count($videos_array) > 0) {
			foreach ($videos_array as $video) {
					if ($video['site'] == $website && $video['type'] == $type) {
							$matching_videos[] = $video;
					}
			}

			if (count($matching_videos) > 0) {
					$random_video = $matching_videos[rand(0, count($matching_videos) - 1)];
					return ['status' => true, 'key' => $random_video['key']];
			} else {
					$random_video = $videos_array[rand(0, count($videos_array) - 1)];
					return ['status' => true, 'key' => $random_video['key']];
			}
	} else {
			return ['status' => false, 'message' => 'No Trailer video found'];
	}
}



?>