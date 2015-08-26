<?php
class Image{
	
	/**
	 * le fichier image(blob)
	 * */
	private $chemin;

	/*
	 * l'id de l'image
	 * */
	private $id;
	
	/*
	 * l'id de la news associées à l'image
	 * */
	private $idNews;


	

	public function __construct($id, $chemin, $idNews){
		$this->id = $id;
		$this->chemin = $chemin;
		$this->idNews = $idNews;
	}

	/*
	 * l'id de l'image
	 * */
	public function getId(){
		return $id;
	}

	/*
	 * le nouvel id de l'image
	 * */
	public function setId($id){
		$this->id = $id;
	}
	
	/*
	 * l'id de la news associées à l'image
	 * */
	public function getIdNews(){
		return $this->idNews;
	}
	
	/*
	 * Le nouvel id de la news associé à l'image
	 * */
	public function setIdNews($idNews){
		$this->idNews = $idNews;
	}
	
	
	/**
	 * le chemin de l'image
	 * */
	public function getChemin(){
		return $this->chemin;
	}
	
	/**
	 *definis le nouveau chemin d'accès à l'image
	 * */
	public function setChemin($chemin){
		$this->chemin = $chemin;
	}
	
	
}

?>
