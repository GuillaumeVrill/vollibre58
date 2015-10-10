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
