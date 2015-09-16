<?php
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    $page['vue'] = 'vue/form_add_event.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_event.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}
// Actions et evenements:
