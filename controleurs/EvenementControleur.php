<?php
$page['vue'] = 'vue/corps_evenements.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_evenements.css" />';

// Actions et evenements:
$action="";


if(isset($_REQUEST['dateEvent']) && isset($_REQUEST['titreEvent']) && isset($_REQUEST['eventSend'])){
$titre=$_REQUEST['titreEvent'];
$dateEvent=$_REQUEST['dateEvent'];
$eventSend=$_REQUEST['eventSend'];

//$Evenement = new Evenement(null, 
}



switch($action){
	case "ajouterEvenement":
	
	break;
	
	case "supprimerEvenement":
	
	break;
}

/*
 * Nom: ajouterEvenement
 * Description :ajoute un évènement dans la base de données
 *  */
function ajouterEvenement($evenements){
	//creerEvenement($evenements);
}

/*
 * Nom: supprimerEvenement
 * Description:supprime un évènement dans la base de données
 * */
function supprimerEvenement($id){
	//supprimerEvenementParId($id);
}

