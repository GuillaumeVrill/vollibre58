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
	 * la description de la news (2 parties possibles):
	 * */
	protected $texte1;
        protected $texte2;
	
	/**
	 * la date du post de la news
	 * */
	protected $date;
	
	/**
	 * l'id de l'auteur ayant posté dans la news
	 * */
	protected $id_auteur;
        
        /**
         * la disposition choisie pour la mise en forme de l'article
         **/
        protected $id_disposition;
	
	
	/**
	 * constructeur des News
	 * */
	public function __construct($id, $titre, $txt1, $txt2, $date, $id_auteur, $id_disposition){
		$this->id = $id;
		$this->titre=$titre;
		$this->texte1=$txt1;
                $this->texte1=$txt2;
		$this->date=$date;
		$this->id_auteur=$id_auteur; 
                $this->id_disposition = $id_disposition;
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
	 * retourne le premier texte de la news
	 * */
	public function getTexte1(){
		return $this->texte1;
	}
	
	/**
	 * modifie le premier texte de la news
	 * */
	public function setTexte1($txt1){
		$this->texte1 = $txt1;
	}
        
        /**
	 * retourne le second texte de la news
	 * */
	public function getTexte2(){
		return $this->texte2;
	}
	
	/**
	 * modifie le second texte de la news
	 * */
	public function setTexte2($txt2){
		$this->texte2 = $txt2;
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

        /**
	 *retourne l'id de la disposiion qui a posté la news
	 *  */
	public function getIdDisposition(){
		return $this->id_disposition;
	}
	
	
	/**
	 * modifie l'id de l'auteur qui a posté la news
	 * */
	public function setIdDisposition($id_disposition){
		$this->id_disposition = $id_disposition;
	}
        
}

?>
