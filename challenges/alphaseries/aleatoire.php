<?php

require_once('src/shows.php');

$random = array_rand($shows);

header('Location: serie.php?serie=' . $shows[$random]['slug']);