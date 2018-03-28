<?php
if (!empty($_SESSION['session_id'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title>Log in</title>
    </head>

    <body>
        <div class="main_wrapper">
            <h1>Log in</h1>

            <form action="connection.php" method="POST">
                <label for="username">Username : </label><input type="text" name="username" /><br />
                <label for="password">Password : </label><input type="text" name="password" /><br />
                <input type="submit" value="Log in">
            </form>
        </div>
    </body>
</html>