<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $msgs = recupererMessages();
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($msgs); $i++){
        if(isset($_POST['message'.$msgs[$i]->getId()])){
            supprimerMessageParId($msgs[$i]->getId());
            $msgs = recupererMessages();
        }
    }
    $page['vue'] = 'vue/list_msg_contact.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_list_msg_contact.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}