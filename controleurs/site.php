<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0//EN">
<?php
    //création ou récupération de la session:
    session_start(); //a desactiver chez free
    
    //appel du controleur correspondant a la page demandée:
    if(isset($_REQUEST['page']) && !empty($_REQUEST['page'])){
        switch($_REQUEST['page']){
                case 'clubetsites':	require_once('controleurs/ClubetsitesControleur.php');      break;
                case 'blog': 		require_once('controleurs/BlogControleur.php');             break;
                case 'evenements': 	require_once('controleurs/EvenementControleur.php');        break;
                case 'contact': 	require_once('controleurs/ContactControleur.php');          break;
                case 'mentions':        require_once('controleurs/MentionsControleur.php');         break;
                case 'connexion':       require_once('controleurs/ConnexionControleur.php');        break;
                case 'f_add_alerte':    require_once('controleurs/FormAddAlerteControleur.php');    break;
                case 'f_add_event':     require_once('controleurs/FormAddEventControleur.php');     break;
                case 'f_add_user':      require_once('controleurs/FormAddUserControleur.php');      break;
                case 'f_add_article':   require_once('controleurs/FormAddArticleControleur.php');   break;
                case 'f_add_album':     require_once('controleurs/FormAddAlbumControleur.php');     break;
                case 'f_edit_user':     require_once('controleurs/FormEditUserControleur.php');     break;
                case 'f_edit_article':  require_once('controleurs/FormEditArticleControleur.php');  break;
                case 'list_user':       require_once('controleurs/ListUserControleur.php');         break;
                case 'list_article':    require_once('controleurs/ListArticleControleur.php');      break;
                case 'list_album':      require_once('controleurs/ListAlbumsControleur.php');       break;
                case 'list_msg_contact':require_once('controleurs/ListMessageControleur.php');      break;
                case 'logout':          require_once('controleurs/logout.php');                     break;
        }
    }
    else{ require_once('controleurs/AccueilControleur.php'); }
?>

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
		
		<?php print $page['css']; ?>
	</head>
        
	<body>
		<?php
                        if(!isset($_REQUEST['page']) || (isset($_REQUEST['page']) && $_REQUEST['page'] != 'connexion')) {
                            //chargement du HEADER:
                            require_once('vue/header.php');
                            //chargement du CONTENU:
                            require_once($page['vue']);
                            //chargement du FOOTER:
                            require_once('vue/footer.php');
                        }
                        else {
                            // Si on est sur la page de connexion, on charge uniquement la page qui sera alors très spécifique: 
                            require_once($page['vue']);
                        }
		?>
		<script src="static/jquery/jquery-1.11.2.min.js" type="text/javascript"></script>
                <script src="static/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="static/bootstrap/js/carousel.js" type="text/javascript"></script>
                <script src="static/jquery/carousel-perso.js" type="text/javascript"></script>
		<script src="static/jquery/background.js" type="text/javascript"></script>
	</body>
</html>
