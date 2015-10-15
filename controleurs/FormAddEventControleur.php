<?php
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    if(isset($_REQUEST['eventSend'])){
        if(isset($_REQUEST['dateEvent']) && !empty($_REQUEST['dateEvent']) && 
            isset($_REQUEST['titreEvent']) && !empty($_REQUEST['titreEvent']) &&
            isset($_REQUEST['descrEvent']) && !empty($_REQUEST['descrEvent'])){
            
            $date = $_REQUEST['dateEvent'];
            $titre = $_REQUEST['titreEvent'];
            $desc = $_REQUEST['descrEvent'];
            $id_user = $_SESSION['user_id'];
            
            $event = new Evenement(0, $titre, $desc, $date, $id_user);
            creerEvenement($event);
            
            //afficher un message de succès:
            
        }
        else{
            //afficher le message d'erreur:
            
        }
    }
    
    $page['vue'] = 'vue/form_add_event.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_event.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}
