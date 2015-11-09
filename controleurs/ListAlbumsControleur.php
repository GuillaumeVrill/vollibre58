<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";
$rights[2] = "3";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $albums = recupererAlbums();
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($albums); $i++){
        if(isset($_POST['album'.$albums[$i]->getId()])){
            supprimerAlbumParId($albums[$i]->getId());
            $albums = recupererAlbums();
        }
    }
    $page['vue'] = 'vue/list_album.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_list_album.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}