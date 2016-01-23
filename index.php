<?php
    session_start();
    
    // Désactiver le rapport d'erreurs
    error_reporting(0);

    // Rapporte les erreurs d'exécution de script
    //error_reporting(E_ERROR | E_WARNING | E_PARSE);

    // Rapporter les E_NOTICE peut vous aider à améliorer vos scripts
    // (variables non initialisées, variables mal orthographiées..)
    //error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
    
    /*********** Front-controleur ****************************************
    *	Le front controleur est le point d'entrée du site, il appel 
    *	les autres controleurs et appel les fichiers de configuration
    *********************************************************************/
    // Appel de la page de configuration
    require_once('conf/top.php');	

    // Appel du controleur du site
    require_once('controleurs/site.php');
?>
