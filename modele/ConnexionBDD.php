<?php

//import de PDO pour les serveur ne le supportant pas:
/*require_once('PDO/PDO.php');
require_once('PDO/PDOException.php');
require_once('PDO/PDOStatement.php');
require_once('PDO/PDOMySQL.php');
require_once('PDO/PDOStatementMySQL.php');*/

class ConnexionBDD
{
	/**
	 * l'instance d'objet unique de la base de donnée
	 * */
	private static $instance=null;
	
	/**
	 * 
	 * */
	private $dsn;
	
	/**
	 * nom d'utilisateur pour la base de données
	 * */
	private $nomUtilisateur;
	
	/**
	 * mot de passe pour accéder à la base de données
	 * */
	private $motDePasse;

	/**
	 * objet PDO accédant à la base
	 * */
	 
	private $dbh;

	/**
	 * constructeur de l'objet gerant la base de données
	 * */
	private function __construct()
	{

		global $dsn, $nomUtilisateur, $motDePasse;
		$this->dsn = $dsn;
		$this->nomUtilisateur = $nomUtilisateur;
		$this->motDePasse = $motDePasse;

		try{
			$dbh = new PDO($this->dsn, $nomUtilisateur, $motDePasse);
			$this->dbh = $dbh;
		}
		catch(PDOException $e){
			echo "problème de connexion à la base de données\n";
                        echo $e->getMessage();
		}

	}
	

	/**
	 * objet gérant la base de données
	 * */
	static function getInstance(){
		if(self::$instance===null){
			self::$instance = new self;  
		}
		return self::$instance;
	}


	/**
	 * méthode permettant de réaliser une requête préparé
	 * */
	public function prepareEtExecuteRequete($dbh, $requete, $parametres){

		$num_args = count($parametres);

		$statement = $this->dbh->prepare($requete);

		for($i=0; $i<$num_args; $i++){
			$statement->bindParam(($i+1), $parametres[$i], PDO::PARAM_STR);
		}
		
		$statement->execute();
                
		return $statement;
	}

}
?>
