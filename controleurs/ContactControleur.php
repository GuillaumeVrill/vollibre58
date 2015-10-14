<?php
if(isset($_REQUEST['mailSend'])){
    if(isset($_REQUEST['mail']) && !empty($_REQUEST['mail']) && 
        isset($_REQUEST['objet']) && !empty($_REQUEST['objet']) &&
        isset($_REQUEST['message']) && !empty($_REQUEST['message'])) {

        $mail = $_REQUEST['mail'];
        $objet = $_REQUEST['objet'];
        $message = $_REQUEST['message'];
        
        $m = new Message(0, $mail, $objet, $message);
        creerMessage($m);
        
        //Message de reussite:
        
    }
    else {
        //Ecrire un message d'erreur:
        
    }
}

$page['vue'] = 'vue/corps_contact.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_contact.css" />';
