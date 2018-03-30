<?php

session_start();

if (!empty($_SESSION['session_id'])) {
    header('Location: ../index.php');
}

$db = new PDO('mysql:host=localhost;dbname=lebowski', 'root', 'root');

$name = $_POST['name'];
$statement = $db->prepare('SELECT id, password FROM teams WHERE name = ?');
$statement->execute(array($name));
$user = $statement->fetch();

if ($user['password'] == sha1($_POST['password'])) {
    $_SESSION['session_id'] = $user['id'];
}

header('Location: ../index.php');
