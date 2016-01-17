<?php
class GradeFactory{
	
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
				$libelle = stripslashes($row['libelle']);		
			}
			catch(Exception $e){
				echo $e->getMessage();
			}

			
			$grades = new Grade($id, $libelle);
			$tabResult[] = $grades;
		
		}
	}
	
}
?>
