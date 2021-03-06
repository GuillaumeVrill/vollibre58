<?php
//récupération des événements et des alertes:
$evenements = recupererEvenements();
$alertes = recupererAlertes();
$rights = array();
$rights[0] = "1";
$rights[1] = "2";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($evenements); $i++){
        if(isset($_POST['event'.$evenements[$i]->getId()])){
            supprimerEvenementParId($evenements[$i]->getId());
            $evenements = recupererEvenements();
        }
    }
    for($i=0; $i<sizeof($alertes); $i++){
        if(isset($_POST['alerte'.$alertes[$i]->getId()])){
            supprimerAlerteParId($alertes[$i]->getId());
            $alertes = recupererAlertes();
        }
    }
}

$page['vue'] = 'vue/corps_evenements.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_evenements.css" />';