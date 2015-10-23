<?php
class NewsFactory{
	
	function __construct($requete, &$tabResult, $parametre){
		$dbh = ConnexionBDD::getInstance();
		
		
		$stmt = $dbh->prepareEtExecuteRequete($dbh, $requete, $parametre);
		
		
		while($row = $stmt->fetch()){

			try{
				$id = $row['id'];
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
				$texte1 = $row['texte1'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
                        try{
				$texte2 = $row['texte2'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$date = $row['date'];
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
                        try{
				$id_disposition = $row['id_disposition'];
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			
			$news = new News($id, $titre, $texte1, $texte2, $date, $idMembre, $id_disposition);
			$tabResult[] = $news;
		
		}
	}
	
}
?>


