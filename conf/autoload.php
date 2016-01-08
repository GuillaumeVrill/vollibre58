<?php

//RACINE
$root = $_SERVER['DOCUMENT_ROOT']."/";

//PATH:
define('URL_PATH', 'http://vollibre58/');         // Path de l'application (locale)
//define('URL_PATH', 'http://vollibre58.free.fr/');    // Path de l'application (production)
define('STATIC_PATH', URL_PATH.'static/');	// Path des médias, feuilles de style, et feuilles de script dynamique (js, ajax, etc.)

//inclus l'ensemble des classes métiers ~/modeles
require_once($root."modele/News.php");
require_once($root."modele/Image.php");
require_once($root."modele/Personne.php");
require_once($root."modele/Evenement.php");
require_once($root."modele/Alerte.php");
require_once($root."modele/Grade.php");
require_once($root."modele/Message.php");
require_once($root."modele/Disposition.php");
require_once($root."modele/Album.php");
require_once($root."modele/Video.php");
require_once($root."modele/Dal.php");

//inclus l'ensemble des fabriques des classes métiers ~/modele
require_once($root."modele/GradeFactory.php");
require_once($root."modele/AlertesFactory.php");
require_once($root."modele/NewsFactory.php");
require_once($root."modele/PersonneFactory.php");
require_once($root."modele/EvenementsFactory.php");
require_once($root."modele/ImageFactory.php");
require_once($root."modele/MessageFactory.php");
require_once($root."modele/DispositionFactory.php");
require_once($root."modele/AlbumFactory.php");
require_once($root."modele/VideoFactory.php");

//inclus la classe de securité permettant d'utiliser des fonctions contre les injections SQL etc.
//require_once($root.'modele/securite.php');

?>

