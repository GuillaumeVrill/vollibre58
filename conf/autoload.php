<?php

//RACINE
$root = $_SERVER['DOCUMENT_ROOT']."/";

//PATH:
define('URL_PATH', 'http://vollibre58/');	// Path de l'application : à modifier
define('STATIC_PATH', URL_PATH.'static/');	// Path des médias, feuilles de style, et feuilles de script dynamique (js, ajax, etc.)

//inclus l'ensemble des classes métiers ~/modeles
require_once($root."modele/News.php");
require_once($root."modele/Image.php");
require_once($root."modele/Personne.php");
require_once($root."modele/Evenement.php");
require_once($root."modele/Alerte.php");
require_once($root."modele/Grade.php");
require_once($root."modele/Dal.php");	

//inclus l'ensemble des fabriques des classes métiers ~/modele
require_once($root."modele/GradeFactory.php");
require_once($root."modele/AlertesFactory.php");
require_once($root."modele/NewsFactory.php");
require_once($root."modele/PersonneFactory.php");
require_once($root."modele/EvenementsFactory.php");
require_once($root."modele/ImageFactory.php");

?>

