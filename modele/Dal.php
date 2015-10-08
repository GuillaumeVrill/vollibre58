<?php 
	/**
	 * Nom: recupererAdministrateurs
	 * Description: récupère l'ensemble des administrateurs dans la base de données
	 * Variables:
	 * requete: la requête sql
	 * tabResult: le tableau d'objets Administrateur
	 * */
	function recupererPersonnes()
	{
		$requete = 'SELECT * FROM tmembre';
		
		new PersonneFactory($requete, $tabmembres, null);
		
		return $tabmembres;
	}

	/**
	 * Nom:recupererAlertes
	 * Description: récupère l'ensemble des alertes dans la base de données
	 * Variables:
	 * requete: la requête sql
	 * tabResult: le tableau d'objets alerte
	 * */
	function recupererAlertes(){
		$requete = 'SELECT * FROM talert';	
		new AlertesFactory($requete, $tabResult, null);
		return $tabResult;
	}
	
	/**
	 * Nom:recupererEvenements
	 * Description: récupère l'ensemble des Evenements dans la base de données
	 * Variables:
	 * requete: la requête sql
	 * tabResult: le tableau d'objets Evenement
	 * */
	function recupererEvenements(){
		$requete = 'SELECT * FROM tevenements';	
		new EvenementsFactory($requete, $tabResult, null);
		return $tabResult;
	}
	
	/**
	 * Nom:recupererNews
	 * Description: récupère l'ensemble des News dans la base de données
	 * Variables:
	 * requete: la requête sql
	 * tabResult: le tableau d'objets News
	 * */
	function recupererNews(){
		$requete = 'SELECT * FROM tnews';	
		new NewsFactory($requete, $tabResult, null);
		return $tabResult;
	}
	
	/**
	 * Nom:recupererNbDerniereNews
	 * Description: récupère les X dernières news 
	 * Paramètre: 
	 * nb_news: le nombre de news à récupérer
	 * Variables:
	 * requete: la requête sql
	 * argument : les paramètres de la requête
	 * tabResult: le tableau d'objets News
	 * */
	function recupererNbDerniereNews($nb_news){
		$requete = 'SELECT * FROM tnews ORDER BY id LIMIT ?';
		
		$argument= array();
		array_push($argument, $nb_news);
			
		new NewsFactory($requete, $tabResult, $argument);
		
		return $tabResult;
	}
        
        /**
	 * Nom:recupererNewsParId
	 * Description: récupère les X dernières news 
	 * Paramètre: 
	 * id: l'idée de l'article à récupérer
	 * Variables:
	 * requete: la requête sql
	 * argument : les paramètres de la requête
	 * tabResult: le tableau d'objets News
	 * */
        function recupererNewsParId($id){
            $requete = 'SELECT * FROM tnews WHERE id = ?';
            $argument = array();
            array_push($argument, $id);
            new NewsFactory($requete, $tabResult, $argument);
            return $tabResult;
        }
	
	/*
	 * Nom:recupererImage
	 * Description:récupère l'ensemble des Images dans la base de données
	 * Variables:
	 * requete: la requete sql
	 * tabResult: le tableau d'objets Image
	 * */
	function recupererImages(){
            $requete = 'SELECT * FROM timages';
            new ImageFactory($requete, $tabResult, null);
            return $tabResult;
	}

        /*
	 * Nom:recupererImageArticle
	 * Description:récupère les Images drelatives à un article
	 * Variables:
	 * requete: la requete sql
	 * tabResult: le tableau d'objets Image
	 * */
        function recupererImagesArticle($article){
            if(isset($article)){
                $article_id = $article->getId();
                $requete = 'SELECT * FROM timages WHERE id_new = ? ORDER BY id ASC';
                $parametres = array();
                array_push($parametres, $article_id);
                
                new ImageFactory($requete, $tabResult, $parametres);
                return $tabResult;
            }
        }

	/*
	 * Nom: recupererGrades
	 * Description :recupère le/les grades associés à un membre dont l'id est fournis à la requete
	 * Paramètre:
	 * membre: le membre à ajouter
	 * Variables:
	 * $id: l'id du membre concerné par le grade
	 * requete: la requete sql
	 * tabGrade: le tableau d'objets de type Grade
	 * */
	function recupererGrades($membre){
            if(isset($membre)){
                $id = $membre->getId();
                $requete = 'SELECT g.libelle FROM tgrade g, tmembre m WHERE g.id_membre = m.id AND g.id_membre= ?';
                $parametres = array();
                array_push($parametres, $id);

                new GradeFactory($requete, $tabResult, $parametres);
                return $tabResult;
            }
	}
        
        /*
	 * Nom:recupererDispositions
	 * Description:récupère les dispositions d'articles dans la base de données
	 * Variables:
	 * requete: la requete sql
	 * tabResult: le tableau d'objets Image
	 * */
        function recupererDispositions(){
            $requete = 'SELECT * FROM tdispositions';
            new DispositionFactory($requete, $tabResult, null);
            return $tabResult;
        }
        
        /*
	 * Nom:recupererDispositionArticle
	 * Description:récupère la disposition de l'article souhaité dans la base de données
	 * Variables:
	 * requete: la requete sql
	 * tabResult: le tableau d'objets Image
	 * */
        function recupererDispositionArticle($article){
            if(isset($article)){
                $article_id = $article->getIdt();
                $requete = 'SELECT * FROM tdisposition d WHERE id = ('
                        . 'SELECT id_disposition FROM tnews WHERE id = ?'
                        . ');';
                $parametres = array();
                array_push($parametres, $article_id);
                new DispositionFactory($requete, $tabResult, $parametres);
                return $tabresult;
            }
        }
        
        /*
	 * Nom:recupererAlbums
	 * Description:récupère les liens albums dans la base de données
	 * Variables:
	 * requete: la requete sql
	 * tabResult: le tableau d'objets Image
	 * */
        function recupererAlbums(){
            $requete = 'SELECT * FROM talbums';
            new AlbumFactory($requete, $tabResult, null);
            return $tabResult;
        }
	
        /*
	 * Nom: recupererGradeByLibelle
	 * Description: l'id d'un grade en fonction d'un libellé
	 * Paramètre:
	 * libelle: le libellé recherché
	 * Variables:
	 * requete: la requete SQL
	 * parametre: les paramètres de la requête préparée
	 * tabResult: le jeux de résultat
	 * */
	function recupererGradeByLibelle($libelle){
            if(isset($libelle)){
                $requete = 'SELECT id FROM tGrade WHERE libelle=?';

                $parametres = array();
                array_push($parametres, $libelle);

                new GradeFactory($requete, $tabResult, $parametres);
                return $tabResult;
            }
	}
	
        /*
         * Nom: recupererMembreByPseudo
	 * Description: un membre selon son psudonyme
	 * Paramètre:
	 * pseudo: le pseudonyme recherché
	 * Variables:
	 * requete: la requete SQL
	 * parametre: les paramètres de la requête préparée
	 * tabResult: le jeux de résultat
         * */
	function recupererMembreByPseudo($pseudo){
            if(isset($pseudo)){
                    $requete = 'SELECT * FROM tmembre WHERE pseudo=?';

                    $parametres = array();
                    array_push($parametres, $pseudo);

                    new PersonneFactory($requete, $tabResult, $parametres);
            }
            if(isset($tabResult)){
                    $membre = $tabResult[0];
                    return $membre;
            }
	}
        
        /*
	 * Nom: creerNews
	 * Description : enregistre une nouvelle news dans la base de données
	 * Paramètre:
	 * news: la news à ajouter
	 * Variables:
	 * $titre: le titre de la news
	 * $description: la description de la news
	 * $date: la date de poste de la news
	 * $id_auteur: l'id de l'auteur de la news
	 * requete: la requete sql
	 * tabResult: le tableau d'objets de type Grade
	 * */
	function creerNews($news){
            if(isset($news)){
                $titre = $news->getTitre();
                $description = $news->getDescription();
                $id_auteur = $news->getIdAuteur();

                $requete = 'INSERT INTO `tnews`(`titre`, `texte`, `date`, `id_membre`) VALUES (?,?,NOW(),?)';
                $argument = array();

                array_push($argument, $titre);
                array_push($argument, $description);
                array_push($argument, $id_auteur);

                new NewsFactory($requete, $tabResult, $argument);
            }
	}
	
	/*
	 * Nom: creerMembre
	 * Description : enregistre un nouveau membre dans la base de données
	 * Parametre:
	 * membre: le membre à ajouter
	 * Variables:
	 * pseudo: le pseudo du membre
	 * motDePasse: le mot de passe du membre
	 * requete: la requete sql
	 * tabResult: le tableau d'objets de type Grade
	 * */
	function creerMembre($membre){
		
		if(isset($membre)){
			$pseudo = $membre->getPseudo();
			$motDePasse = md5($membre->getMotDePasse());
			$email = $membre->getEmail();	
			$id_grade = $membre->getIdGrade();
			
			//si le grade n'est pas spécifié alors la personne deviens automatiquement un membre
			if(!isset($id_grade)){
				
				$id_grade_tmp = recupererGradeByLibelle("MEMBRE");
				if(isset($id_grade_tmp)){
						$id_grade = $id_grade_tmp[0]->getId();
				}
			}
			
			
			$requete = 'INSERT INTO `tmembre`(`pseudo`, `motDePasse`, `email`, `id_grade`) VALUES (?,?,?,?)';
			$parametres = array();
			array_push($parametres, $pseudo);
			array_push($parametres, $motDePasse);
			array_push($parametres, $email);
			array_push($parametres, $id_grade);
			
			new PersonneFactory($requete, $tabResult, $parametres);	
		}
	}
	
	/*
	 * Nom: creerGrade
	 * Description : enregistre un nouveau grade dans la base de données
	 * Parametre:
	 * grade: le grade à ajouter
	 * Variables:
	 * $libelle: le libellé du grade
	 * $id_membre: l'id du membre concerné
	 * requete: la requete sql
	 * tabResult: le tableau d'objets de type Grade
	 * */
	function creerGrade($grade){
		
		if(isset($grade)){
			$libelle = $grade->getLibelle();
				
			$requete = 'INSERT INTO `tGrade`(`libelle`) VALUES (?)';
			
			$parametres = array();
			array_push($parametres, $libelle);
			
			new GradeFactory($requete, $tabResult, $parametres);
		}
	}
	
	/*
	 * Nom: creerEvenement
	 * Description : enregistre un nouvel évènement dans la base de données
	 * Paramètre:
	 * evenement: l'évènement à ajouter
	 * Variables:
	 * titre: le titre de l'évènement
	 * description: la description de l'évènement
	 * id_membre: l'auteur de l'évènement
	 * requete: la requete sql
	 * tabResult: le tableau d'objets de type Grade
	 * */
	function creerEvenement($evenement){
		
		if(isset($evenement)){
			$titre = $evenement->getTitre();
			$description = $evenement->getDescription();
			$id_membre = $evenement->getIdAuteur();
		
			$requete = 'INSERT INTO `tevenements`(`date`, `titre`, `description`, `id_membre`) VALUES (NOW(), ?, ?, ?)';
			$parametres = array();
			array_push($parametres, $titre);
			array_push($parametres, $description);
			array_push($parametres, $id_membre);
			
			new EvenementsFactory($requete, $tabResult, $parametres);
		}
	}
	
	/*
	 * Nom: creerAlertes
	 * Description : enregistre une nouvelle alerte dans la base de données
	 * Paramètres:
	 * alerte: l'alerte à ajouter dans la base de données
	 * Variables:
	 * dateDeb: la date de début de l'alerte
	 * dateFin: la date de fin de l'alerte
	 * titre: le titre de l'alerte
	 * description: la description de l'alerte
	 * id_membre: l'auteur de l'alerte
	 * requete: la requete sql
	 * tabResult: le tableau d'objets de type Grade
	 * */
	function creerAlertes($alerte){
		
		if(isset($alerte)){
			$dateDeb = $alerte->getDateDebut();
			$dateFin = $alerte->getDateFin();
			$titre = $alerte->getTitre();
			$description = $alerte->getDescription();
			$id_membre = $alerte->getIdAuteur();
		
			$requete = 'INSERT INTO `talert`(`date_deb`, `date_fin`, `titre`, `description`, `id_membre`) VALUES (NOW(), NOW(), ?, ?, ?)';
			$parametres = array();
			array_push($parametres, $titre);
			array_push($parametres, $description);
			array_push($parametres, $id_membre);
			
			new AlertesFactory($requete, $tabResult, $parametres);
		}
	}
	
	/*
	 * Nom: creerImage
	 * Description: permet d'insérer une image présente sur le serveur dans un article
	 * Paramètres:
	 * image: l'image à lier à l'article
	 * chemin: le chemin de l'image sur le serveur
	 * idNews: l'id de la news contenant l'image
	 * 
	 * */
	function creerImage($image){
		if(isset($image)){
			$chemin = $image->getChemin();
			$idNews = $image->getIdNews();
			
			$requete = 'INSERT INTO `timages`(`chemin`, `id_news`) VALUES (?, ?)';
			$parametres = array();
			array_push($parametres, $chemin);
			array_push($parametres, $idNews);
			
			new ImageFactory($requete, $tabResult, $parametres);
		}
	}

        function creerDisposition(){
            //fonction vide! Les dispositions sont arbitraires 
            //et sont stockées à titre informatif dans la base de données
            //Pour ajouter en tant qu'admin des dispositions dans la base, il faudra creer
            //un editeur graphique de mise en forme et une génération automatique de l'HTML correspondant!
            // ==> Pas pratique, et très complexe! On oublie!
        }
        
        function creerAlbum($album){
            if(isset($album)){
			$titre = $album->getTitre();
			$url = $image->getUrl();
			
			$requete = 'INSERT INTO `talbums`(`titre`, `url`) VALUES (?, ?)';
			$parametres = array();
			array_push($parametres, $titre);
			array_push($parametres, $url);
			
			new ImageFactory($requete, $tabResult, $parametres);
		}
        }
        
	/**
	 * Nom: supprimerEvenementParId
	 * Description:  supprime un evenement dans la base de données en fonction de son id
	 * Paramètre:
	 * $id: l'id de l'évènement
	 * Variables:
	 * requete: la requete sql
	 * parametres: les parametres de la requete sql
	 * */
	function supprimerEvenementParId($id){
		
		if(isset($id)){
			
			$requete = 'DELETE FROM `tevenements` WHERE `id`=?';
			
			$parametres = array();
			array_push($parametres, $id);
			
			new EvenementsFactory($requete, $tabResult, $parametres);
		}
		
	}
        
        /**
	 * Nom: supprimerAlerteParId
	 * Description:  supprime une alerte dans la base de données en fonction de son id
	 * Paramètre:
	 * $id: l'id de l'alerte
	 * Variables:
	 * requete: la requete sql
	 * parametres: les parametres de la requete sql
	 * */
        function supprimerAlerteParId($id){
            if(isset($id)){
                $requete = 'DELETE FROM `talert` WHERE `id`=?';
                $parametres = array();
                array_push($parametres, $id);
                new AlertesFactory($requete, $tabResult, $parametres);
            }
        }
        
        /**
	 * Nom: supprimerNewsParId
	 * Description:  supprime un article dans la base de données en fonction de son id
	 * Paramètre:
	 * $id: l'id de l'article
	 * Variables:
	 * requete: la requete sql
	 * parametres: les parametres de la requete sql
	 * */
        function supprimerNewsParId($id){
            if(isset($id)){
                $requete = 'DELETE FROM `tnews` WHERE `id`=?';
                $parametres = array();
                array_push($parametres, $id);
                new NewsFactory($requete, $tabResult, $parametres);
            }
        }
        
        /**
	 * Nom: supprimerMembreParId
	 * Description:  supprime une alerte dans la base de données en fonction de son id
	 * Paramètre:
	 * $id: l'id du membre
	 * Variables:
	 * requete: la requete sql
	 * parametres: les parametres de la requete sql
	 * */
        function supprimerMembreParId($id){
            if(isset($id)){
                $requete = 'DELETE FROM `tmembre` WHERE `id`=?';
                $parametres = array();
                array_push($parametres, $id);
                new PersonneFactory($requete, $tabResult, $parametres);
            }
        }
        
?>
