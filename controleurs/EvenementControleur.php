<?php
$page['vue'] = 'vue/corps_evenements.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_evenements.css" />';

if(isset($_REQUEST['dateEvent']) && isset($_REQUEST['titreEvent']) && isset($_REQUEST['eventSend'])){
    $titre = $_REQUEST['titreEvent'];
    $dateEvent = $_REQUEST['dateEvent'];
    $eventSend = $_REQUEST['eventSend'];
    
}