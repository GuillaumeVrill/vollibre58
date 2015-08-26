<?php

class Personne{
	
	/**
	 * l'id de la personne
	 * */
	private $id;
	
	/**
	 * pseudo de la personne
	 * */
	private $pseudo;

	/**
	 * mot de passe de la personne
	 * */
	private $motDePasse;
	
	/*Le/Les grades du membres*/
	private $id_grade;
	
	/*l'adresse email*/
	private $email;
	
	/**
	 * un constructeur de personne
	 * */
	public function __construct($id, $pseudo, $motDePasse, $email, $id_grade){
		$this->id = $id;
		$this->pseudo = $pseudo;
		$this->motDePasse = $motDePasse;
		$this->id_grade = $id_grade;
		$this->email = $email;
	}
	
	/**
	 * l'id de la personne
	 * */
	public function getId(){
		return $this->id;
	}

	/**
	 * nouvel id de la personne
	 * */
	public function setId($id){
		$this->id = $id;
	}
	
	/**
	 * pseudo de la personne
	 * */
	public function getPseudo(){
		return $this->pseudo;
	}

	/**
	 * nouveau pseudo de la personne
	 * */
	public function setPseudo($pseudo){
		$this->pseudo = $pseudo;
	}
	
	/**
	 * mot de passe de la personne
	 * */
	public function getMotDePasse(){
		return $this->motDePasse;
	}

	/**
	 * nouveau mot de passe de la personne
	 * */
	public function setMotDePasse($motDePasse){
		$this->motDePasse = $motDePasse;
	}

	/*les grades du membres*/
	public function getIdGrade(){
		return $this->id_grade;
	}

	/*les nouveaux grades du membres*/
	public function setIdGrade($grade){
		$this->id_grade = $grade;	
	}
	
	/*l adresse mail du membre*/
	public function getEmail(){
		return $this->email;
	}
	
	/*le nouvel email du membre*/
	public function setEmail($email)
	{
		$this->email = $email;
	}
	
	/**
	 * affiche le pseudo
	 * */
	public function __toString(){
		echo $pseudo;
	}
	
}

?>
