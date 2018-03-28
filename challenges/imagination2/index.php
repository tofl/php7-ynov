<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
        <title>Welcome on my site !</title>
    </head>

    <body>
        <div class="main_wrapper">
            <h1>Bienvenue sur mon site !</h1>
            <?php
                if (empty($_SESSION['session_id'])) {
                    echo '<p>Vous n\'êtes pas connecté -> <a href="">Se connecter</a></p>';
                } else {
                    echo '<p>Bienvenue</p>';
                }
            ?>
        </div>
    </body>
</html>