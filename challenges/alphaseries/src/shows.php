<?php

$shows = json_decode(file_get_contents(__DIR__ . '/../data/shows.json'), true);
$random = array_rand($shows);

function rankingPopularity($showsList) {
    usort($showsList, function ($a, $b) { return $b['statistics']['popularity'] <=> $a['statistics']['popularity']; });

    return $showsList;
}

function rankingRating($showsList) {
    usort($showsList, function ($a, $b) { return $b['statistics']['rating'] <=> $a['statistics']['rating']; });

    return $showsList;
}

function stars($rating) {
    for ($i = 1; $i <= floor($rating); $i++) {
        echo '<i class="fa fa-star"></i>';
        if ($i == floor($rating) and $rating > floor($rating)) {
            $decimal = $rating - floor($rating);
            if ($decimal > 0.25 AND $decimal < 0.75) {
                echo '<i class="fa fa-star-half"></i>';
            } elseif ($decimal >= 0.75) {
                echo '<i class="fa fa-star"></i>';
            }
        }
    }
}