<?php
	/*********** Front-controleur ****************************************
	*	Le front controleur est le point d'entrée du site, il appel 
	*	les autres controleurs et appel les fichiers de configuration
	*********************************************************************/
	// Appel de la page de configuration
	require_once('conf/top.php');
	// Appel du controleur du site
	require_once('controleurs/site.php');
?>