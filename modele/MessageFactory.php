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
				$maildest=$row['mailDestinataire'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$objet = stripslashes($row['objet']);
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$message = stripslashes($row['message']);
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			
			
			$msg = new Message($id, $maildest, $objet, $message);
			$tabResult[] = $msg;
		
		}
	
	}
	
}
?>

