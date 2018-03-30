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
        <h1>Se connecter à une équipe</h1>
        <form action="scripts/db_login.php" method="post">
            <label for="name">Nom de l'équipe : </label> <input type="text" name="name" required /><br />
            <label for="password">Mot de passe : </label> <input type="password" name="password" required /><br />
            <input type="submit" value="Valider" />
        </form>
    </body>
</html>
