<?php
class Image{
	
	/*
	 * l'id de la disposition
	 * */
	private $id;
	
	/*
	 * le titre de la disposition
	 * */
	private $titre;
        
        /*
	 * l'url de la disposition
	 * */
	private $url;


	

	public function __construct($id, $description, $libelle, $nom, $url){
		$this->id = $id;
                $this->titre = $titre;
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
	public function getTitre(){
		return $this->titre;
	}
	
	/*
	 * Le nouvel id de la news associé à l'image
	 * */
	public function setTitre($titre){
		$this->titre = $titre;
	}
        
        /**
	 * le lien vers l'album
	 * */
	public function getUrl(){
		return $this->url;
	}
	
	/**
	 *definis le nouveau lien vers l'album
	 * */
	public function setUrl($url){
		$this->url = $url;
	}
	
	
}

?>
