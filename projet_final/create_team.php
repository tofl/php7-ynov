<?php
session_start();

if (!empty($_SESSION['session_id'])) {
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
        <h1>Créer une équipe</h1>
        <form action="db_add_team.php" method="post" enctype="multipart/form-data">
            <label for="name">Nom de l'équipe : </label><input type="text" name="name" required /><br />
            <label for="phrase">Citation : </label><input type="text" name="phrase" /><br />
            <label for="image">Image de l'équipe : </label><input type="file" name="image" /><br />
            <label for="password">Mot de passe : </label><input type="password" name="password" required /><br />
            <input type="submit" value="Envoyer" />
        </form>
    </body>
</html>
