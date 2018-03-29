<?php
session_start();
$isLoggedIn = false;

if (!empty($_SESSION['session_id'])) {
    $isLoggedIn = true;
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
        <ul>
            <?php
                if ($isLoggedIn) {
            ?>
                <li><a href="add_player.php">Ajouter un joueur</a></li>
                <li><a href="team_ranking.php">Classement des équipes</a></li>
                <li><a href="players_ranking.php">Classement des joueurs</a></li>
                <li><a href="new_game.php">Nouvelle partie</a></li>
            <?php
                }
                else {
            ?>
                <li><a href="create_team.php">Créer une équipe</a></li>
                <li><a href="login.php">Rejoindre une équipe</a></li>
                <li><a href="team_ranking.php">Classement des équipes</a></li>
                <li><a href="players_ranking.php">Classement des joueurs</a></li>
            <?php
                }
            ?>
        </ul>
    </body>
</html>
