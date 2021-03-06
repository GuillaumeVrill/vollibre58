<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand menu-title" href="<?php print URL_PATH ?>">Vol Libre 58</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li><a href="<?php print URL_PATH ?>" title="Page d'accueil du site">Accueil</a></li>
                <li><a href="<?php print URL_PATH ?>?page=clubetsites" title="Sites de vol, activit&eacute;s du club, ...">Club et sites</a></li>
                <li><a href="<?php print URL_PATH ?>?page=blog" title="Historique de nos plus beaux vols!">Le blog</a></li>
                <li><a href="<?php print URL_PATH ?>?page=evenements" title="Travaux, Projets, Sorties club, ...">Infos et alertes</a></li>
                <li><a href="<?php print URL_PATH ?>?page=contact" title="Besoin d'infos? Qui contacter?">Contact</a></li>
            </ul>
            <p class="navbar-text navbar-right">
                <?php
                    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){ ?>
                        <a class="navbar-link" href="<?php print URL_PATH ?>?page=logout">Deconnexion</a>
                <?php }
                    else { ?>
                        <a class="navbar-link" href="<?php print URL_PATH ?>?page=connexion">Connexion</a>
                <?php } ?>
            </p>
        </div>
    </div>
</nav>

<?php
    //BARRE D'ADMINISTRATION:
    //controle de la connexion de l'utilisateur et distribution des actions selon les droits:
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) { ?>
        <div class="admin-bar">
            <span class="user">Bonjour <?php print($_SESSION['user_name']); ?> : </span>
            <?php if($_SESSION['user_right'] == '1' || 
                    $_SESSION['user_right'] == '2' || 
                    $_SESSION['user_right'] == '3') : ?>
                <a href="<?php print URL_PATH; ?>?page=list_article">G&eacute;rer les articles</a>
                <a href="<?php print URL_PATH; ?>?page=list_album">G&eacute;rer les albums</a>
            <?php endif; ?>
            <a href="<?php print URL_PATH; ?>?page=evenements">G&eacute;rer alertes et informations</a>
            <?php if($_SESSION['user_right'] == '1' || $_SESSION['user_right'] == '2'): ?>
                <a href="<?php print URL_PATH; ?>?page=list_user">G&eacute;rer les utilisateurs</a>
                <a href="<?php print URL_PATH; ?>?page=list_msg_contact">Messages</a>
            <?php endif; ?>
        </div>
<?php } ?>

<header>
    <div id="Carousel_fullscreen" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
        <!-- Wrapper for slides: -->
        <div class="carousel-inner" role="listbox">
            <div class="<?php if(!isset($_REQUEST['page']) || empty($_REQUEST['page']) || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='connexion') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='mentions') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_add_alerte') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_add_event') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_add_user') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_add_article') ||
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_add_album') ||
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_edit_user') ||
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='f_edit_article') ||
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='list_user') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='list_article') || 
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='list_album') ||
                    (isset($_REQUEST['page']) && $_REQUEST['page']=='list_msg_contact')){ print "active"; } ?> item">
                <a href="<?php print URL_PATH ?>" title="Page d'accueil du site">
                    <img class="img_thumbnail" src="static/images/carousel/accueil01.jpg" alt="Accueil" />
                    <div class="carousel-caption">
                        <h2>Accueil</h2>
                        <p>Page d'accueil du site Vol libre 58!</p>
                    </div>
                </a>
            </div>
            <div class="<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=='clubetsites'){ print "active"; } ?> item">
                <a href="<?php print URL_PATH ?>?page=clubetsites" title="Sites de vol, activit&eacute;s du club, ...">
                    <img class="img_thumbnail" src="static/images/carousel/clubetsites03.png" alt="Club et sites" />
                    <div class="carousel-caption">
                        <h2>Club et Sites</h2>
                        <p>Présentation du club, des sites de vol et de leurs particularités!</p>
                    </div>
                </a>
            </div>
            <div class="<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=='blog'){ print "active"; } ?> item">
                <a href="<?php print URL_PATH ?>?page=blog" title="Historique de nos plus beaux vols!">
                    <img class="img_thumbnail" src="static/images/carousel/blog02.png" alt="Blog" />
                    <div class="carousel-caption">
                        <h2>Blog</h2>
                        <p>Nos plus belles aventures sont racontées ici!</p>
                    </div>
                </a>
            </div>
            <div class="<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=='evenements'){ print "active"; } ?> item">
                <a href="<?php print URL_PATH ?>?page=evenements" title="Travaux, Projets, Sorties club, ...">
                    <img class="img_thumbnail" src="static/images/carousel/evenement01.png" alt="Evenements" />
                    <div class="carousel-caption">
                        <h2>Infos et alertes</h2>
                        <p>Une sortie de prévue? Un objet laiss&eacute; au d&eacute;co? C'est par ici!</p>
                    </div>
                </a>
            </div>
            <div class="<?php if(isset($_REQUEST['page']) && $_REQUEST['page']=='contact'){ print "active"; } ?> item">
                <a href="<?php print URL_PATH ?>?page=contact" title="Besoin d'infos? Qui contacter?">
                    <img class="img_thumbnail" src="static/images/carousel/contact01.png" alt="Contact" />
                    <div class="carousel-caption">
                        <h2>Contact</h2>
                        <p>Si vous souhaitez nous contacter, c'est par là!</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Left and right controls: -->
        <a class="left carousel-control" href="#Carousel_fullscreen" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#Carousel_fullscreen" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</header>

<!-- Début de page : BALISE DE FERMETURE DANS LE FOOTER -->
<div class="container specialContent">