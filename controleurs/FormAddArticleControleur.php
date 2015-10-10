<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";
$rights[2] = "3";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $page['vue'] = 'vue/form_add_article.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_article.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}

// Actions et evenements:
