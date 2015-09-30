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
				$libelle=$row['libelle'];		
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$description = $row['description'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
                        try{
				$nom = $row['nom'];
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
