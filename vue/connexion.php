<?php
    //création de la session:
    //session_start();
    //si une tentative de connexion est réalisée:
    if(isset($_REQUEST['con']) && $_REQUEST['con'] == "active"){
        //vérification que les données ont été saisies:
        if(isset($_REQUEST['pseudo']) && !empty($_REQUEST['pseudo']) && 
            isset($_REQUEST['passwd']) && !empty($_REQUEST['passwd'])){
            $pseudo = $_REQUEST['pseudo'];
            $mdp = $_REQUEST['passwd'];
            //Controle de l'utilisateur:
            /*
             * SQL ICI (exemple: $req = SELECT * from Users WHERE pseudonyme = $pseudo AND password = $mdp;
             */
            //Remplacer la condition suivante par le resultat du select précédent:
            if($pseudo == "admin" && $mdp == "admin"){
                $_SESSION['user_id'] = "1";
                $_SESSION['user_name'] = $pseudo;
                $_SESSION['user_right'] = "administrateur";
            }
        }
        if(isset($_SESSION['user_id'])){
            header("Location: ".URL_PATH);
        }
        else {
            header("Location: ".URL_PATH);
        }
    }
?>

<section id="connexion" class="row">
    <div class="col-xs-12 connexionPage">
        <img class="conBackground" src="static/images/carousel/accueil01.jpg" />
    </div>
    <div class="connexionWindow">
        <form method="post" action="<?php print URL_PATH ?>?page=connexion&con=active">
            <h1>Connexion</h1>
            <div class="login">
                <label for="pseudo">Nom d'utilisateur: </label>
                <input type="text" id="pseudo" name="pseudo" placeholder="Pseudonyme" />
            </div>
            <div class="password">
                <label for="passwd">Password: </label>
                <input type="password" id="passwd" name="passwd" placeholder="Mot de passe" />
            </div>
            <input type="submit" name="connexionBtn" id="connexionBtn" value="Connexion" />
            <div class="footer">
                <ul>
                    <li class="col-lg-4 col-md-4 col-sm-12">
                        <a href="<?php print URL_PATH ?>" title="Page d'accueil du site">
                            Retour &agrave; l'accueil
                        </a>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-12">
                        <span class="copyright">
                            Copyright &copy; 2015 by 
                            <a href="<?php print URL_PATH ?>" title="Page d'accueil du site">
                                vol libre 58
                            </a>
                        </span>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-12">
                        <a href="<?php print URL_PATH ?>?page=mentions" title="Mentions legales">
                            Mentions l&eacute;gales
                        </a>
                    </li>
                </ul>
            </div>
        </form>
  
    </div>
</section>
