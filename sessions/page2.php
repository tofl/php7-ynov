<?php
session_start();

if (isset($_GET['email']) AND !empty($_GET['email'])) {
    $_SESSION['email'] = $_GET['email'];
}

if (!empty($_SESSION['email'])) {
    echo 'Vous êtes connecté avec l\'adresse : ' . $_SESSION['email'];
} else {
    echo 'Vous n\'êtes pas connecté';
}
?>
<br />
<a href="page1.php">Aller à la page 1</a>
<br />
<a href="destroy_session.php">Détruire la session</a>

