<?php

class Message{
	
	/**
	 * l'id du message
	 * */
	protected $id;
	
	/**
	 * le destinataire du message
	 * */
	protected $maildest;
	
	/**
	 * l'objet du message
	 * */
	protected $objet;
	
	/**
	 * le message
	 * */
	protected $message;
	
	
	/**
	 * constructeur des Messages
	 * */
	public function __construct($id, $maildest, $objet, $message){
		$this->id = $id;
		$this->maildest=$maildest;
		$this->objet=$objet;
		$this->message=$message;
	}
	
	/**
	 * renvoie l'id du message
	 * */
	public function getId(){
		return $this->id;
	}
	
	
	/**
	 * modifie l'id du message
	 * */
	public function setId($id)
	{
		$this->id = $id;
	}

	/**
	 * retourne le destinataire du message
	 * */
	public function getMailDest(){
		return $this->maildest;
	}
	
	/**
	 * modifie le destinataire du message
	 * */
	public function setMailDest($maildest){
		$this->maildest = $maildest;
	}
	
	
	/**
	 * retourne l'objet du message
	 * */
	public function getObjet(){
		return $this->objet;
	}
	
	/**
	 * modifie l'objet du message
	 * */
	public function setobjet($objet){
		$this->objet = $objet;
	}
	
	/**
	 * retourne le message
	 * */
	public function getDate(){
		return $this->message;
	}
	
	/**
	 * modifie le message
	 * */
	public function setDate($message){
		$this->message = $message;
	}

}

?>
