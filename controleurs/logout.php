<?php
//déconnexion de l'utilisateur (suppression des cookies et de la session en cours), redirection sur l'accueil:
$_SESSION = array();
session_destroy();
unset($_SESSION);
header('Location: '.URL_PATH);