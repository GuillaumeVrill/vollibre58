<?php
//si une tentative de connexion est réalisée:
    if(isset($_REQUEST['con']) && $_REQUEST['con'] == "active"){
        //vérification que les données ont été saisies:
        if(isset($_REQUEST['pseudo']) && !empty($_REQUEST['pseudo']) && 
            isset($_REQUEST['passwd']) && !empty($_REQUEST['passwd'])){
            $pseudo = $_REQUEST['pseudo'];
            $mdp = $_REQUEST['passwd'];
            //Controle de l'utilisateur:
            $personne = connexionMembre($pseudo, $mdp);
            if($personne != null){
                $_SESSION['user_id'] = $personne[0]->getId();
                $_SESSION['user_name'] = $personne[0]->getPseudo();
                $_SESSION['user_right'] = $personne[0]->getIdGrade();
                header("Location: ".URL_PATH);
            }
            else{
                header("Location: ".URL_PATH."?page=connexion");
            }
        }
    }

$page['vue'] = 'vue/connexion.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_connexion.css" />';
