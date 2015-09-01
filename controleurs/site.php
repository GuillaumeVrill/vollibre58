<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<html lang="fr">
	<head>
		<title>Vol Libre 58</title>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
                <meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<link href="./static/bootstrap/css/bootstrap.css" rel="stylesheet" />
		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		
		<!-- icone dans le navigateur -->
		<link rel="icon" type="image/png" href="static/images/iconeVL58.png" />
		<!-- Feuille de style CSS générale (header et footer) -->
		<link rel="stylesheet" type="text/css" href="static/css/css_generale.css" />
		
		<?php
			//Feuille de style CSS spécifique au contenu chargé:
			if(isset($_REQUEST['page']) && !empty($_REQUEST['page'])){
				switch($_REQUEST['page']){
					case 'clubetsites':	echo '<link rel="stylesheet" type="text/css" href="static/css/css_clubetsites.css" />'; break;
					case 'blog': 		echo '<link rel="stylesheet" type="text/css" href="static/css/css_blog.css" />';	break;
					case 'evenements': 	echo '<link rel="stylesheet" type="text/css" href="static/css/css_evenements.css" />';	break;
					case 'contact': 	echo '<link rel="stylesheet" type="text/css" href="static/css/css_contact.css" />';	break;
                                        case 'mentions':        echo '<link rel="stylesheet" type="text/css" href="static/css/css_mentions.css" />';    break;
                                        case 'connexion':       echo '<link rel="stylesheet" type="text/css" href="static/css/css_connexion.css" />';   break;
                                        case 'f_alerte':        echo '<link rel="stylesheet" type="text/css" href="static/css/css_f_alerte.css" />';    break;
				}
			}
			else{ echo '<link rel="stylesheet" type="text/css" href="static/css/css_accueil.css" />'; }
		?>
	</head>
        
	<body>
		<?php
                        if(!isset($_REQUEST['page']) || (isset($_REQUEST['page']) && $_REQUEST['page'] != 'connexion')) {
                            //chargement du HEADER:
                            require_once('vue/header.php');
                            //chargement du CONTENU:
                            if(isset($_REQUEST['page']) && !empty($_REQUEST['page'])){
                                    switch($_REQUEST['page']){
                                            case 'clubetsites':     require_once('vue/corps_clubetsites.php');      break;
                                            case 'blog':            require_once('vue/corps_blog.php');             break;
                                            case 'evenements':      require_once('vue/corps_evenements.php');       break;
                                            case 'contact':         require_once('vue/corps_contact.php');          break;
                                            case 'mentions':        require_once('vue/corps_mentions.php');         break;
                                            case 'f_alerte':        require_once('vue/form_alerte.php');            break;
                                    }
                            }
                            else{ require_once('vue/corps_accueil.php'); }
                            //chargement du FOOTER:
                            require_once('vue/footer.php');
                        }
                        else {
                            require_once('vue/connexion.php');
                        }
		?>
		<script src="static/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
                <script src="static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="static/bootstrap/js/carousel.js" type="text/javascript"></script>
                <script src="static/jquery/carousel-perso.js" type="text/javascript"></script>
		<script src="static/jquery/background.js" type="text/javascript"></script>
                <script src="static/jquery/background.js" type="text/javascript"></script>
	</body>
</html>
