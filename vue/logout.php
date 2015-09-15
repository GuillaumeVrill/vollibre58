<?php
//déconnexion de l'utilisateur (suppression des cookies et de la session en cours), redirection sur l'accueil:
$_SESSION['user_id'] = null;
$_SESSION['user_name'] = null;
$_SESSION['user_right'] = null;
header('Location: '.URL_PATH);