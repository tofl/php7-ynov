<?php
session_start();

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

if (!isset($_POST['name']) OR !isset($_POST['password'])) {
    header('Location: ../create_team.php');
}

$name = $_POST['name'];
$phrase = $_POST['phrase'];
$password = sha1($_POST['password']);

$extension = end(explode(".", strtolower($_FILES['image']['name'])));

$id = uniqid();
$newImageName = $id . '.' . $extension;


$statement = $db->prepare('INSERT INTO teams(name, phrase, password, image, score_total) VALUES(:name, :phrase, :password, :image, 0)');
$statement->bindValue(':name', $name);
$statement->bindValue(':phrase', $phrase);
$statement->bindValue(':password', $password);
$statement->bindValue(':image', $newImageName);

$statement->execute();

move_uploaded_file($_FILES['image']['tmp_name'], '../images/teams/' . $newImageName);

$_SESSION['session_id'] = $db->lastInsertId();

header('Location: ../index.php');
