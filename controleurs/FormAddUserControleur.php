<?php
if(isset($_REQUEST['userSend'])){
    if(isset($_POST['pseudoUser']) && !empty($_POST['pseudoUser']) && 
        isset($_POST['motdepasseUser']) && !empty($_POST['motdepasseUser']) && 
        isset($_POST['mailUser']) && !empty($_POST['mailUser']) && 
        isset($_POST['gradeUser']) && !empty($_POST['gradeUser'])){

        //récupération et sécurisation des variables:
        $pseudo = $_POST['pseudoUser'];
        $mdp = $_POST['motdepasseUser'];
        $mail = $_POST['mailUser'];
        $grade = $_POST['gradeUser'];

        $p = new Personne(0, $pseudo, $mdp, $mail, $grade);
        creerMembre($p);
        
        //affichage de la barre de réussite:
        
    }
    else{
        //Afficher la barre d'erreur:
        
    }
}

$rights = array();
$rights[0] = "1";
$rights[1] = "2";

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    $page['vue'] = 'vue/form_add_user.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_user.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}