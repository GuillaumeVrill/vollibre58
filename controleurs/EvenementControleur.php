<?php
$page['vue'] = 'vue/corps_evenements.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_evenements.css" />';

// Actions et evenements:
$action="";
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

