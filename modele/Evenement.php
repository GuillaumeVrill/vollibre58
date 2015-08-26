<?php

class Evenement{
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
	protected $dateFin;
	
	/**
	 * l'id de l'auteur ayant posté l'annonce
	 * */
	protected $idAuteur;

	
	/**
	 * constructeur des News
	 * */
	public function __construct($id, $titre, $description, $dateFin, $idAuteur){
		$this->id = $id;
		$this->titre = $titre;
		$this->description = $description;
		$this->dateFin = $dateFin;
		$this->idAuteur = $idAuteur;
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
	public function getDateFin(){
		return $this->dateFin;
	}
	
	/**
	 * modifie la date de post de la news
	 * */
	public function setDateFin($dateFin){
		$this->dateFin = $dateFin;
	}
		
	/**
	 * retourne l'id de l'auteur ayant publié la news
	 * */
	public function getIdAuteur(){
		return $this->idAuteur;
	}
	
	/*
	 * modifie l'id de l'auteur ayant posté la news
	 * */
	public function setIdAuteur($idAuteur){
		$this->idAuteur = $idAuteur;
	}

	
}

?>

