<?php
class Alerte extends Evenement{
	
	/**
	 * la date de début
	 * */
	private $dateDebut;	
		
	/**
	 * constructeur des News
	 * */
	public function __construct($id, $titre, $description, $dateDebut, $dateFin, $idAuteur){
		parent::__construct($id, $titre, $description, $dateFin, $idAuteur);
		$this->dateDebut = $dateDebut;
	}
	
	/**
	 * La date de début de l'alerte
	 * */
	public function getDateDebut(){
		return $this->dateDebut;
	}
	
	/**
	 * la nouvelle date de début
	 * */
	public function setDateDebut($dateDebut){
		$this->dateDebut = $dateDebut;
	}
	
}

?>
