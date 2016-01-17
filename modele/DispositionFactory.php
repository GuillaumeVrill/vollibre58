<?php
class DispositionFactory{
	
	function __construct($requete, &$tabResult, $parametres){
		$dbh = ConnexionBDD::getInstance();
		
		$stmt = $dbh->prepareEtExecuteRequete($dbh, $requete, $parametres);

			
		while($row = $stmt->fetch()){

			try{
				$id = $row['id'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$libelle = stripslashes($row['libelle']);		
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$description = stripslashes($row['description']);
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
                        try{
				$nom = stripslashes($row['nom']);
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
                        try{
				$url = $row['url'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}

			
			$dispo = new Disposition($id, $description, $libelle, $nom, $url);
			$tabResult[] = $dispo;
		
		}
	}
	
}
?>
