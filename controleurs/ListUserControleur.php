<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $users = recupererPersonnes();
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($users); $i++){
        if(isset($_POST['user'.$users[$i]->getId()])){
            supprimerMembreParId($users[$i]->getId());
            $users = recupererPersonnes();
        }
    }
    $page['vue'] = 'vue/list_user.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_list_user.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}