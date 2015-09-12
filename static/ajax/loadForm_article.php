<?php
    $idDisposition = 0;
    if(isset($_REQUEST['idDisposition']) && !empty($_REQUEST['idDisposition'])){
        $idDisposition = $_REQUEST['idDisposition'];
    }
    else {
        $idDisposition = 0;
    }
    
    //Préparation des elements de formulaires:
    $texteHaut = '<div class="article_line txtH"><label for="txtHaut">Texte du haut: </label>'
            . '<textarea name="txtHaut" id="txtHaut" rows="5" resize="none"></textarea></div>';
    
    $texteBas = '<div class="article_line txtB"><label for="txtBas">Texte du bas: </label>'
            . '<textarea name="txtBas" id="txtBas" rows="5" resize="none"></textarea></div>';
    
    $texteGauche = '<div class="article_line txtG"><label for="txtGauche">Texte de gauche: </label>'
            . '<textarea name="txtGauche" id="txtGauche" rows="8" resize="none"></textarea></div>';
    
    $texteDroite = '<div class="article_line txtD"><label for="txtDroite">Texte de droite: </label>'
            . '<textarea name="txtDroite" id="txtDroite" rows="8" resize="none"></textarea></div>';
    
    $img_std = '<div class="img_std"><label for="image_std">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_std" id="image_std" /></div>';
    
    $img_vertG = '<div class="img_vertG"><label for="image_vertG">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_vertG" id="image_vertG" /></div>';
    
    $img_vertD = '<div class="img_vertD"><label for="image_vertD">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_vertD" id="image_vertD" /></div>';
    
    $img_2pic_pic1 = '<div class="img_2pic_1"><label for="image_2pic_1">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_2pic_1" id="image_2pic_1" /></div>';
    
    $img_2pic_pic2 = '<div class="img_2pic_2"><label for="image_2pic_2">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_2pic_2" id="image_2pic_2" /></div>';
    
    $img_3pic_grande = '<div class="img_3pic_gde"><label for="image_3pic_grande">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3pic_grande" id="image_3pic_grande" /></div>';
    
    $img_3pic_petite1 = '<div class="img_3pic_pet1"><label for="image_3pic_petite1">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3pic_petite1" id="image_3pic_petite1" /></div>';
    
    $img_3pic_petite2 = '<div class="img_3pic_pet2"><label for="image_3pic_petite2">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3pic_petite2" id="image_3pic_petite2" /></div>';
    
    $img_3picInv_grande = '<div class="img_3picinv_gde"><label for="image_3picinv_grande">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3picinv_grande" id="image_3picinv_grande" /></div>';
    
    $img_3picInv_petite1 = '<div class="img_3picinv_pet1"><label for="image_3picinv_petite1">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3picinv_petite1" id="image_3picinv_petite1" /></div>';
    
    $img_3picInv_petite2 = '<div class="img_3picinv_pet2"><label for="image_3picinv_petite2">Ins&eacute;rez une image (max 1Mo, ~1000*1000px): </label>'
            . '<input type="file" name="image_3picinv_petite2" id="image_3picinv_petite2" /></div>';
    
    try {
        //selection du formulaire et mise en place des éléments:
        switch($idDisposition){
            //Formulaire standard:
            case 0: 
                echo '<div class="form_article std">'.$texteHaut.'<div class="article_line  img_select">'.$img_std.'</div>'.$texteBas.'</div>';
                break;
            //Formulaire 3 images:
            case 1:
                echo '<div class="form_article pic3">'.$texteHaut.'<div class="article_line  img_select">'.$img_3pic_grande.'<div class="img_3pic_right">'.$img_3pic_petite1.$img_3pic_petite2.'</div></div>'.$texteBas.'</div>';
                break;
            //Formulaire 3 images inversé:
            case 2:
                echo '<div class="form_article picInv3">'.$texteHaut.'<div class="article_line  img_select">'.'<div class="img_3picinv_left">'.$img_3picInv_petite1.$img_3picInv_petite2.'</div>'.$img_3picInv_grande.'</div>'.$texteBas.'</div>';
                break;
            //Formulaire 2 images:
            case 3:
                echo '<div class="form_article pic2">'.$texteHaut.'<div class="article_line  img_select">'.$img_2pic_pic1.$img_2pic_pic2.'</div>'.$texteBas.'</div>';
                break;
            //Formulaire verticale gauche:
            case 4:
                echo '<div class="form_article vertG">'.'<div class="article_line  img_select">'.$img_vertG.'</div>'.$texteDroite.'</div>';
                break;
            //Formulaire verticale droite:
            case 5:
                echo '<div class="form_article vertD">'.$texteGauche.'<div class="article_line  img_select">'.$img_vertD.'</div></div>';
                break;
        }
        
    } catch (Exception $ex) {
        die($e->getMessage());
    }
?>
