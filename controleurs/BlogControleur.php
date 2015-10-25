<?php
//récupération des articles et de leurs images:
$news = recupererNews();

$articles = array();
for($i=0; $i<sizeof($news); $i++){
    $articles[$i]['article'] = $news[$i];
    $articles[$i]['pics'] = recupererImagesArticle($news[$i]);
}

$page['vue'] = 'vue/corps_blog.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_blog.css" />';
