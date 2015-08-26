<?php

class News{
	
	/**
	 * l'id de la personne
	 * */
	protected $id;
	
	/**
	 * le titre de la news
	 * */
	protected $titre;
	
	/**
	 * la description de la news
	 * */
	protected $description;
	
	/**
	 * la date du post de la news
	 * */
	protected $date;
	
	/**
	 * l'id de l'auteur ayant posté dans la news
	 * */
	protected $id_auteur;
	
	
	/**
	 * constructeur des News
	 * */
	public function __construct($id, $titre, $description, $date, $id_auteur){
		$this->id = $id;
		$this->titre=$titre;
		$this->description=$description;
		$this->date=$date;
		$this->id_auteur=$id_auteur; 
	}
	
	/**
	 * renvoie l'id de la news
	 * */
	public function getId(){
		return $this->id;
	}
	
	
	/**
	 * modifie l'id de la news
	 * */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * retourne le titre de la news
	 * */
	public function getTitre(){
		return $this->titre;
	}
	
	/**
	 * modifie le titre de la news
	 * */
	public function setTitre($titre){
		$this->titre = $titre;
	}
	
	
	/**
	 * retourne la description de la news
	 * */
	public function getDescription(){
		return $this->description;
	}
	
	/**
	 * modifie la description de la news
	 * */
	public function setDescription($description){
		$this->description = $description;
	}
	
	/**
	 * retourne la date de post de la news
	 * */
	public function getDate(){
		return $this->date;
	}
	
	/**
	 * modifie la date de post de la news
	 * */
	public function setDate($date){
		$this->date = $date;
	}
		
		
	/**
	 *retourne l'id de l'auteur qui a posté la news
	 *  */
	public function getIdAuteur(){
		return $this->id_auteur;
	}
	
	
	/**
	 * modifie l'id de l'auteur qui a posté la news
	 * */
	public function setIdAuteur($id_auteur){
		$this->id_auteur = $id_auteur;
	}

}

?>
