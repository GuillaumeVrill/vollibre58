<?php
$rights = array();
$rights[0] = "1";   //administrateur
$rights[1] = "2";   //moderateur
$rights[2] = "3";   //redacteur

$dispo = recupererDispositions();

//variable d'erreur:
$error = false;


if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && in_array($_SESSION['user_right'], $rights, true)){
    
    $id_user = $_SESSION['user_id'];
    
    if(isset($_REQUEST['actualNews']) && !empty($_REQUEST['actualNews'])){
        $articleId = $_REQUEST['actualNews'];
        $art = recupererNewsParId($articleId);
        $article = $art[0];
    }
    
    if(isset($_REQUEST['articleEdit'])){
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
        
        if(isset($_REQUEST['id_actArticle']) && !empty($_REQUEST['id_actArticle'])){
            $id_article = $_REQUEST['id_actArticle'];
        }
        else{
            $id_article = 0;
        }
        
        if(isset($_REQUEST['disposition']) && !empty($_REQUEST['disposition'] && isset($_REQUEST['titreArticle']) && !empty($_REQUEST['titreArticle']))){
            $id_dispo = $_REQUEST['disposition'];
            $titre = $_REQUEST['titreArticle'];
            $article = null;
            $image = array();
            $today = date("Y-m-d");
            switch($id_dispo){
                case 1: 
                    if($txtH && $txtB && $istd){
                        //REMPLACER L'ID DE L'ARTICLE PAR UNE FONCTION DE RECUPERATION DU DERNIER ID SAISI.
                        $article = new News($id_article, $titre, $txtH, $txtB, $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $istd, 0));
                    }
                    break;
                
                case 2: 
                    if($txtH && $txtB && $i3gde && $i3p1 && $i3p2){
                        $article = new News($id_article, $titre, $txtH, $txtB, $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $i3gde, 0));
                        array_push($image, new Image(0, $i3p1, 0));
                        array_push($image, new Image(0, $i3p2, 0));
                    }
                    break;
                
                case 3: 
                    if($txtH && $txtB && $i3invgde && $i3invp1 && $i3invp2){
                        $article = new News($id_article, $titre, $txtH, $txtB, $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $i3invgde, 0));
                        array_push($image, new Image(0, $i3invp1, 0));
                        array_push($image, new Image(0, $i3invp2, 0));
                    }
                    break;
                
                case 4: 
                    if($txtH && $txtB && $i2p1 && $i2p2){
                        $article = new News($id_article, $titre, $txtH, $txtB, $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $i2p1, 0));
                        array_push($image, new Image(0, $i2p2, 0));
                    }
                    break;
                
                case 5: 
                    if($txtD && $ivertG){
                        $article = new News($id_article, $titre, $txtD, "", $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $ivertG, 0));
                    }
                    break;
                
                case 6: 
                    if($txtG && $ivertD){
                        $article = new News($id_article, $titre, $txtG, "", $today, $id_user, $id_dispo);
                        array_push($image, new Image(0, $ivertD, 0));
                    }
                    break;
            }
            
            //Ajout du nouvel article:
            editerNews($article->getId(), $article);
            //Récupération dernier article ajouté et mise en place du bon id dans les images créés:
            $res = recupererNewsParId($article->getId());
            for($i=0; $i<sizeof($image); $i++){
                $image[$i]->setIdNews($res[0]->getId());
                creerImage($image[$i]);
            }
            
        }
    }
    
    if(!isset($article)){
        $article = new News(0, "ERROR", "ERROR", "ERROR", "0", 1, 1);
        $error = true;
    }
    else {
        $error = false;
    }
    
    $page['vue'] = 'vue/form_edit_article.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_f_edit_article.css" />';
}
else {
    $page['vue'] = 'vue/access_denied.php';
    $page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_access_denied.css" />';
}
