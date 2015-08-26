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
				$texte = $row['texte'];
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
			
			$news = new News($id, $titre, $texte, $date, $idMembre);
			$tabResult[] = $news;
		
		}
	}
	
}
?>


