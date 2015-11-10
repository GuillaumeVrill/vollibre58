<?php
$rights = array();
$rights[0] = "1";
$rights[1] = "2";
//variable d'erreur:
$error = false;

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    if(isset($_REQUEST['userEdit']) && isset($_REQUEST['actUser']) && !empty($_REQUEST['actUser'])){
        if(isset($_POST['pseudoUser']) && !empty($_POST['pseudoUser']) && 
            isset($_POST['motdepasseUser']) && !empty($_POST['motdepasseUser']) && 
            isset($_POST['mailUser']) && !empty($_POST['mailUser']) && 
            isset($_POST['gradeUser']) && !empty($_POST['gradeUser'])){
            
            //récupération et sécurisation des variables:
            $actualUserId = $_REQUEST['actUser'];
            $user = $actualUserId;  //On attribue cette valeur pour eviter les erreurs au chargelent de la vue
            $pseudo = $_POST['pseudoUser'];
            $mdp = $_POST['motdepasseUser'];
            $mail = $_POST['mailUser'];
            $grade = $_POST['gradeUser'];

            $p = new Personne(0, $pseudo, $mdp, $mail, $grade);
            editerMembre($actualUserId, $p);
            $personne = recupererPersonneParId($actualUserId);
            $user = $personne[0];

            //affichage de la barre de réussite:

        }
        else{
            //Afficher la barre d'erreur:

        }
    }
    
    if(isset($_REQUEST['actualUser']) && !empty($_REQUEST['actualUser'])){
        $userId = $_REQUEST['actualUser'];
        $personne = recupererPersonneParId($userId);
        $user = $personne[0];
    }
    
    if(!isset($user)){
        $user = new Personne(0, "ERROR", "ERROR", "ERROR", "0");
        $error = true;
    }
    
    $page['vue'] = 'vue/form_edit_user.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_edit_user.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}