<?php
$rights = array();
$rights[0] = "1";   //administrateur
$rights[1] = "2";   //moderateur
$rights[2] = "3";   //redacteur

$dispo = recupererDispositions();

if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    if(isset($_REQUEST['articleSend'])){
        //on récupère les résultat (true ou false) de la récupération de tous les inputs des formulaires possibles. On aura "true" s'il existe et sont rempli, false sinon:
        $txtH = 0; $txtB = 0; $txtG = 0; $txtD = 0;     //les textes
        $istd = 0;                                      //image standard
        $ivertG = 0; $ivertD = 0;                       //images verticales
        $i2p1 = 0; $i2p2 = 0;                           //images en duo
        $i3gde = 0; $i3p1 = 0; $i3p2 = 0;               //images de trio
        $i3invgde = 0; $i3invp1 = 0; $i3invp2 = 0;      //images de trio inversé
        //récupération des champs de formulaires (existant ou non, remplis ou non):
        if(isset($_REQUEST['txtHaut']) && !empty($_REQUEST['txtHaut'])){ $txtH = $_REQUEST['txtHaut']; }
        if(isset($_REQUEST['txtBas']) && !empty($_REQUEST['txtBas'])){ $txtB = $_REQUEST['txtBas']; }
        if(isset($_REQUEST['txtGauche']) && !empty($_REQUEST['txtGauche'])){ $txtG =  $_REQUEST['txtGauche']; }
        if(isset($_REQUEST['txtDroite']) && !empty($_REQUEST['txtDroite'])){ $txtD = $_REQUEST['txtDroite'];}
        if(isset($_REQUEST['image_std']) && !empty($_REQUEST['image_std'])){ $istd = $_REQUEST['image_std']; }
        if(isset($_REQUEST['image_vertG']) && !empty($_REQUEST['image_vertG'])){ $ivertG = $_REQUEST['image_vertG']; }
        if(isset($_REQUEST['image_vertD']) && !empty($_REQUEST['image_vertD'])){ $ivertD = $_REQUEST['image_vertD']; }
        if(isset($_REQUEST['image_2pic_1']) && !empty($_REQUEST['image_2pic_1'])){ $i2p1 = $_REQUEST['image_2pic_1']; }
        if(isset($_REQUEST['image_2pic_2']) && !empty($_REQUEST['image_2pic_2'])){ $i2p2 = $_REQUEST['image_2pic_2']; }
        if(isset($_REQUEST['image_3pic_grande']) && !empty($_REQUEST['image_3pic_grande'])){ $i3gde = $_REQUEST['image_3pic_grande']; }
        if(isset($_REQUEST['image_3pic_petite1']) && !empty($_REQUEST['image_3pic_petite1'])){ $i3p1 = $_REQUEST['image_3pic_petite1']; }
        if(isset($_REQUEST['image_3pic_petite2']) && !empty($_REQUEST['image_3pic_petite2'])){ $i3p2 = $_REQUEST['image_3pic_petite2']; }
        if(isset($_REQUEST['image_3picinv_grande']) && !empty($_REQUEST['image_3picinv_grande'])){ $i3invgde = $_REQUEST['image_3picinv_grande']; }
        if(isset($_REQUEST['image_3picinv_petite1']) && !empty($_REQUEST['image_3picinv_petite1'])){ $i3invp1 = $_REQUEST['image_3picinv_petite1']; }
        if(isset($_REQUEST['image_3picinv_petite2']) && !empty($_REQUEST['image_3picinv_petite2'])){ $i3invp2 = $_REQUEST['image_3picinv_petite2']; }
        
        if(isset($_REQUEST['disposition']) && !empty($_REQUEST['disposition'])){
            $id_dispo = $_REQUEST['disposition'];
            switch($id_dispo){
                case 1: 
                    if($txtH && $txtB && $istd){
                        //fonction de creation d'un nouvel article
                        
                    }
                    else{
                        //affichage d'un message d'informations manquantes: 
                        
                    }
                    break;
                
                case 2: 
                    if($txtH && $txtB && $i3gde && $i3p1 && $i3p2){
                        print "2 ok"; exit();
                    }
                    else{
                        //affichage d'un message d'informations manquantes:
                        
                    }
                    break;
                
                case 3: 
                    if($txtH && $txtB && $i3invgde && $i3invp1 && $i3invp2){
                        print "3 ok"; exit();
                    }
                    else{
                        //affichage d'un message d'informations manquantes:
                        
                    }
                    break;
                
                case 4: 
                    if($txtH && $txtB && $i2p1 && $i2p2){
                        print "4 ok"; exit();
                    }
                    else{ 
                        //affichage d'un message d'informations manquantes:
                        
                    }
                    break;
                
                case 5: 
                    if($txtD && $ivertG){
                        print "5 ok"; exit();
                    }
                    else{ 
                        //affichage d'un message d'informations manquantes:
                        
                    }
                    break;
                
                case 6: 
                    if($txtG && $ivertD){
                        print "6 ok"; exit();
                    }
                    else{ 
                        //affichage d'un message d'informations manquantes:
                        
                    }
                    break;
            }
        }
    }
    
    $page['vue'] = 'vue/form_add_article.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_add_article.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}
