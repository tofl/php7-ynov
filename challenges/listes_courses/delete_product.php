<?php

$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'root');

if (empty($_GET['id'])) {
    header('Location: courses.php');
}

$query = $db->exec('DELETE FROM shopping_list WHERE id = ' . $_GET['id']);

header('Location: courses.php');