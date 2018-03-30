<?php
session_start();

if (empty($_SESSION['session_id'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Lebowski</title>
    </head>

    <body>
        <h2>Ajouter un joueur</h2>
        <form action="scripts/db_add_player.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image">
        </form>
    </body>
</html>
