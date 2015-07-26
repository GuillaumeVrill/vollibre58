<?php

class Database { 
 	private static $instance;
	private $db;
 
	/* Constructeur privé */
	private function __construct() {
        try {
            $this->db = new PDO('mysql:host='.DB_HOST.';dbname='.DB_NAME, DB_USER, DB_PWD);
        } catch(Exception $e) {
            echo 'Erreur connexion DB : '.$e->getMessage().'<br />';
			echo 'Num : '.$e->getCode();
        }
    }
		
	public function __destruct() {
		$this->instance = null;
	}
		
	/* Singleton (une seule et unique instance PDO pour tout le script) */
	static function getInstance() {
		if(is_null(self::$instance)) {
			self::$instance = new Database;
		}
		return self::$instance;
	}
	
	/* Requète d'exécution */
	public function exec($sql) {
		return $this->db->exec($sql);
	}
	
	/* Dernière ID inser�e */
	public function lastInsertId() {
		return $this->db->lastInsertId();
	}
}
