<?php
    $idDisposition = 0;
    if(isset($_REQUEST['idDisposition']) && !empty($_REQUEST['idDisposition'])){
        $idDisposition = $_REQUEST['idDisposition'];
    }
    else {
        $idDisposition = 0;
    }
    
    //Préparation des elements de formulaires:
    $texteHaut = "";
    $texteBas = "";
    $texteGauche = "";
    $texteDroite = "";
    $img_std = "";
    $img_vertG = "";
    $img_vertD = "";
    $img_2pic_pic1 = "";
    $img_2pic_pic2 = "";
    $img_3pic_grande ="";
    $img_3pic_petite1 = "";
    $img_3pic_petite2 = "";
    $img_3picInv_grande = "";
    $img_3picInv_petite1 = "";
    $img_3picInv_petite2 = "";
    
    try {
        //selection du formulaire et mise en place des éléments:
        switch($idDisposition){
            //Formulaire standard:
            case 0: 
                echo $texteHaut.$img_std.$texteBas;
                break;
            //Formulaire 3 images:
            case 1:
                echo $texteHaut.$img_3pic_grande.$img_3pic_petite1.$img_3pic_petite2.$texteBas;
                break;
            //Formulaire 3 images inversé:
            case 2:
                echo $texteHaut.$img_3picInv_grande.$img_3picInv_petite1.$img_3picInv_petite2.$texteBas;
                break;
            //Formulaire 2 images:
            case 3:
                echo $texteHaut.$img_2pic_pic1.$img_2pic_pic2.$texteBas;
                break;
            //Formulaire verticale gauche:
            case 4:
                echo $img_vertG.$texteDroite;
                break;
            //Formulaire verticale droite:
            case 5:
                echo $texteGauche.$img_vertD;
                break;
        }
        
    } catch (Exception $ex) {
        die($e->getMessage());
    }
?>