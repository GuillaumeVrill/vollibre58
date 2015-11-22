<?php
//recherche des alertes et des événements:
$alertes = recupererAlertes();
$evenements = recupererEvenements();
$video = recupererVideo();
$lastNews = recupererNews();
$lastNewsPictures = array();
for($i=0; $i<sizeof($lastNews); $i++){
    if(isset($lastNews) && !empty($lastNews[$i]->getId())){
        $lastNewsPictures[$i] = recupererImagesArticle($lastNews[$i]);
    }
}

if(isset($_REQUEST['videoSubmit']) && !empty($_REQUEST['videoSubmit']) && isset($_REQUEST['videoURL']) && !empty($_REQUEST['videoURL'])){
    $v = new Video(0, $_REQUEST['videoURL']);
    if(isset($video) && !empty($video[0]->getId())){
        editerVideo($video[0]->getId(), $v);
    }
}

$video = recupererVideo();

$page['vue'] = 'vue/corps_accueil.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_accueil.css" />';
