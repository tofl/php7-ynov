<?php

$shows = json_decode(file_get_contents(__DIR__ . '/../data/shows.json'), true);

function rankingPopularity($shows_list) {
    usort($shows_list, function ($a, $b) { return $b['statistics']['popularity'] <=> $a['statistics']['popularity']; });
}

function rankingRating($shows_list) {
    usort($shows_list, function ($a, $b) { return $b['statistics']['rating'] <=> $a['statistics']['rating']; });
}