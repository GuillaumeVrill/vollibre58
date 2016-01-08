<?php
class PersonneFactory{
	
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
				$pseudo=$row['pseudo'];		
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$mdp=$row['motDePasse'];		
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
			}
			try{
				$email = $row['email'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			try{
				$id_grade = $row['id_grade'];
			}
			catch(Exception $e){
				echo $e->getMessage();
			}
			
			
			$personne = new Personne($id, $pseudo, $mdp, $email, $id_grade);
			$tabResult[] = $personne;
		
		}
	
	}
	
}
?>

