<?php
class Album {
	
	/*
	 * l'id de l'album
	 * */
	private $id;
	
	/*
	 * le titre de l'album
	 * */
	private $titre;
        
        /*
	 * l'url de l'album
	 * */
	private $url;
	

	public function __construct($id, $titre, $url){
		$this->id = $id;
                $this->titre = $titre;
                $this->url = $url;
	}

	/*
	 * l'id de l'album
	 * */
	public function getId(){
		return $this->id;
	}

	/*
	 * le nouvel id de l'album
	 * */
	public function setId($id){
		$this->id = $id;
	}
	
	/*
	 * le titre de l'album
	 * */
	public function getTitre(){
		return $this->titre;
	}
	
	/*
	 * Le nouveau titre de l'album
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
