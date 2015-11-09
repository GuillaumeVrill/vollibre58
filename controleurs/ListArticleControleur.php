<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";
$rights[2] = "3";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $articles = recupererNews();
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($articles); $i++){
        if(isset($_POST['article'.$articles[$i]->getId()])){
            supprimerNewsParId($articles[$i]->getId());
            $articles = recupererNews();
        }
    }
    $page['vue'] = 'vue/list_article.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_list_article.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}