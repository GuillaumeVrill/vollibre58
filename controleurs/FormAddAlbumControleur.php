<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";
$rights[2] = "3";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    if(isset($_REQUEST['albumSend'])){
        if(isset($_POST['titreAlbum']) && !empty($_POST['titreAlbum']) && 
            isset($_POST['urlAlbum']) && !empty($_POST['urlAlbum'])){

            //récupération et sécurisation des variables:
            $titre = $_POST['titreAlbum'];
            $url = $_POST['urlAlbum'];

            $a = new Album(0, $titre, $url);
            creerAlbum($a);

            //affichage de la barre de réussite:

        }
        else{
            //Afficher la barre d'erreur:

        }
    }

    $page['vue'] = 'vue/form_add_album.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_album.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}