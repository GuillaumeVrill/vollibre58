<?php
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    if(isset($_REQUEST['alerteSend'])){
        if(isset($_REQUEST['dateExp']) && !empty($_REQUEST['dateExp']) && 
            isset($_REQUEST['titreAlerte']) && !empty($_REQUEST['titreAlerte']) && 
            isset($_REQUEST['descrAlerte']) && !empty($_REQUEST['descrAlerte'])){
            
            $dateDebut = date("Y-m-d");
            $dateExp = $_REQUEST['dateExp'];
            $titre = $_REQUEST['titreAlerte'];
            $desc = $_REQUEST['descrAlerte'];
            $id_user = $_SESSION['user_id'];
            
            $alerte = new Alerte(0, $titre, $desc, $dateDebut, $dateExp, $id_user);
            creerAlerte($alerte);
            
            //afficher message de succès:
            
        }
        else{
            //afficher message d'erreur

        }
    }

    $page['vue'] = 'vue/form_add_alerte.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_alerte.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}
