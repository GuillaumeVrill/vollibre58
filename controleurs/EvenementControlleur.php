<?php


switch($action){
	case "":
	
	break;
}

/*
 * Nom: ajouterEvenement
 * Description :ajoute un évènement dans la base de données
 *  */
function ajouterEvenement($evenements){
	creerEvenement($evenements);
}

/*
 * Nom: supprimerEvenement
 * Description:supprime un évènement dans la base de données
 * */
function supprimerEvenement($id){
	supprimerEvenementParId($id);
}


?>
