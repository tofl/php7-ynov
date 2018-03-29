<?php

$db = new PDO('mysql:host=localhost;dbname=php', 'root', 'root');

$statmnt = $db->prepare('SELECT * FROM WHERE username = ?');
$statmnt->execute($_POST['username']);
$user = $statmnt->fetch();

if (sha1($_POST['password']) == $user['password']) {

}