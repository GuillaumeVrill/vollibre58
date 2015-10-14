<?php
class Disposition{
	
	/*
	 * l'id de la disposition
	 * */
	private $id;
	
	/*
	 * la description de la disposition
	 * */
	private $description;
        
        /*
	 * le libelle de la disposition
	 * */
	private $libelle;
        
        /*
	 * le nom (raccourci) de la disposition
	 * */
	private $nom;
        
        /*
	 * l'url de la disposition
	 * */
	private $url;


	

	public function __construct($id, $description, $libelle, $nom, $url){
		$this->id = $id;
		$this->description = $description;
		$this->libelle = $libelle;
                $this->nom = $nom;
                $this->url = $url;
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
	public function getLibelle(){
		return $this->libelle;
	}
	
	/*
	 * Le nouvel id de la news associé à l'image
	 * */
	public function setLibelle($libelle){
		$this->libelle = $libelle;
	}
	
	
	/**
	 * le chemin de l'image
	 * */
	public function getDescription(){
		return $this->description;
	}
	
	/**
	 *definis le nouveau chemin d'accès à l'image
	 * */
	public function setChemin($description){
		$this->description = $description;
	}
        
        /**
	 * le chemin de l'image
	 * */
	public function getNom(){
		return $this->nom;
	}
	
	/**
	 *definis le nouveau chemin d'accès à l'image
	 * */
	public function setNom($nom){
		$this->nom = $nom;
	}
        
        /**
	 * le chemin de l'image
	 * */
	public function getUrl(){
		return $this->url;
	}
	
	/**
	 *definis le nouveau chemin d'accès à l'image
	 * */
	public function setUrl($url){
		$this->url = $url;
	}
	
	
}

?>
