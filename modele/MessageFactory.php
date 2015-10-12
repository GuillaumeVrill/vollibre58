<?php
class MessageFactory{
	
	function __construct($requete, &$tabResult, $parametres){		
		
		$dbh = ConnexionBDD::getInstance();
		
		$stmt = $dbh->prepareEtExecuteRequete($dbh, $requete, $parametres);
	
	
		//print_r($parametres);

		while($row = $stmt->fetch()){

			try{
				$id = $row['id'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$maildest=$row['mailDest'];		
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$objet=$row['objet'];		
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$message = $row['message'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			
			
			$message = new Message($id, $maildest, $objet, $message);
			$tabResult[] = $message;
		
		}
	
	}
	
}
?>

