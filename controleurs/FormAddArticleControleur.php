<?php
$rights = array();
$rights[0] = "administrateur";
$rights[1] = "moderateur";
$rights[2] = "redacteur";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $page['vue'] = 'vue/form_add_article.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_article.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}

// Actions et evenements:
