<?php

$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'root');

$product = $_POST['product'];
$category = $_POST['category'];

$statement = $db->prepare('INSERT INTO shopping_list(product, category) VALUES(?, ?)');
$statement->execute(array($product, $category));

header('Location: courses.php');