<?php

class ConnexionBDD
{
	/**
	 * l'instance d'objet unique de la base de données
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
	public function prepareEtExecuteRequete($dbh, $requete){

		$num_args = func_num_args();
		$argument = func_get_args();

		$statement = $this->dbh->prepare($requete);

		for($i=2; $i<$num_args; $i++){
			$statement->bindParam($i-1, $argument[$i]);
		}

		$statement->execute();

		return $statement;
	}
}
?>
