<?php
$rights = array();
$rights[0] = "administrateur";
$rights[1] = "moderateur";

if(isset($_SESSION['user_id']) && !empty($_SESSIOn['user_id']) && in_array($_SESSIOn['user_right'], $rights, true)){
    $page['vue'] = 'vue/form_add_user.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_user.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}

// Actions et evenements:
