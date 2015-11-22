<?php
class Video {
	
	/*
	 * l'id de la video
	 * */
	private $id;
	
	/*
	 * le chemin (url) de la video
	 * */
	private $chemin;


	

	public function __construct($id, $chemin){
		$this->id = $id;
                $this->chemin = $chemin;
	}

	/*
	 * l'id de la video
	 * */
	public function getId(){
		return $this->id;
	}

	/*
	 * le nouvel id de la video
	 * */
	public function setId($id){
		$this->id = $id;
	}
	
	/*
	 * le chemin de la video
	 * */
	public function getChemin(){
		return $this->chemin;
	}
	
	/*
	 * Le nouveau chemin de la video
	 * */
	public function setChemin($chemin){
		$this->chemin = $chemin;
	}
	
}

?>
