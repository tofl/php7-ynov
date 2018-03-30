<?php

session_start();

if (empty($_SESSION['session_id'])) {
    header('Location: ../index.php');
}

unset($_SESSION['session_id']);

session_destroy();

header('Location: ../index.php');
