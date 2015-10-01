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
				$titre = $row['titre'];		
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
                        
			
			$album = new Disposition($id, $titre, $url);
			$tabResult[] = $album;
		
		}
	}
	
}
?>
