<?php

class Grade{
	/*l'id du grade*/
	private $id;
	
	/*le libellé associé*/
	private $libelle;
	
	
	/*constructeur de grade*/
	public function __construct($id, $libelle){
		$this->id = $id;
		$this->libelle = $libelle;
	}
	
	/*retourne l'id */
	public function getId(){
		return $this->id;
	}

	/*le nouvelle id*/
	public function setId($id){
		$this->id = $id;
	}
	
	/*retourne le libellé*/
	public function getLibelle(){
		return $this->libelle;
	}
	
	/*le nouveau libelle*/
	public function setLibelle($libelle){
		$this->libelle = $libelle;
	}
	
}

?>
