<?php
class EvenementsFactory{
	
	function __construct($requete, &$tabResult, $parametres){
		$dbh = ConnexionBDD::getInstance();
		
		$stmt = $dbh->prepareEtExecuteRequete($dbh, $requete, $parametres);

		
		while($row = $stmt->fetch()){

			try{
				$id = $row['id'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$dateFin = $row['date'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$titre = stripslashes($row['titre']);
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$description = stripslashes($row['description']);
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$idMembre = $row['id_membre'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			
			$evenement = new Evenement($id, $titre, $description, $dateFin, $idMembre);
			$tabResult[] = $evenement;
		}
	}
	
}
?>

