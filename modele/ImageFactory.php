<?php
class ImageFactory{
	
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
				$chemin=$row['chemin'];		
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$idNews = $row['id_news'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}

			
			$image = new Image($id, $chemin, $idNews);
			$tabResult[] = $image;
		
		}
	}
	
}
?>
