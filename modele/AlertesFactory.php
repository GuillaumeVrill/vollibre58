<?php
class AlertesFactory{
	
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
				$dateDebut=$row['date_deb'];		
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$dateFin = $row['date_fin'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$titre = $row['titre'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$description = $row['description'];
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
			
			$alerte = new Alerte($id, $titre, $description, $dateDebut, $dateFin, $idMembre);
			$tabResult[] = $alerte;
		
		}
	}
	
}
?>
