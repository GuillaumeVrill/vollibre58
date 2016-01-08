<?php
    //récupération de la disposition de l'article:
    $id_dispo = $article->getIdDisposition();
    //Récupération des images de l'article:
    $img = array();
    $img = recupererImagesArticle($article);
    $pic = array();
    
    if(isset($img[0])  && notEmpty($img[0]->getChemin())){
        $pic[0] = $img[0]->getChemin();
    }
    else {
        $pic[0] = "";
    }
    if(isset($img[1])  && notEmpty($img[1]->getChemin())){
        $pic[1] = $img[1]->getChemin();
    }
    else {
        $pic[1] = "";
    }
    if(isset($img[2])  && notEmpty($img[2]->getChemin())){
        $pic[2] = $img[2]->getChemin();
    }
    else {
        $pic[2] = "";
    }

    //Préparation des elements de formulaires:
    $texteHaut = '<div class="article_line txtH"><label for="txtHaut">Texte du haut: </label>'
            . '<textarea name="txtHaut" id="txtHaut" rows="5" resize="none" required>'.$article->getTexte1().'</textarea></div>';
    
    $texteBas = '<div class="article_line txtB"><label for="txtBas">Texte du bas: </label>'
            . '<textarea name="txtBas" id="txtBas" rows="5" resize="none" required>'.$article->getTexte2().'</textarea></div>';
    
    $texteGauche = '<div class="article_line txtG"><label for="txtGauche">Texte de gauche: </label>'
            . '<textarea name="txtGauche" id="txtGauche" rows="8" resize="none" required>'.$article->getTexte1().'</textarea></div>';
    
    $texteDroite = '<div class="article_line txtD"><label for="txtDroite">Texte de droite: </label>'
            . '<textarea name="txtDroite" id="txtDroite" rows="8" resize="none" required>'.$article->getTexte1().'</textarea></div>';
    
    $img_std = '<div class="img_std"><label for="image_std">Lien vers l\'image: </label>'
            . '<input type="text" name="image_std" id="image_std" value='.$pic[0].' required /></div>';
    
    $img_vertG = '<div class="img_vertG"><label for="image_vertG">Lien vers l\'image: </label>'
            . '<input type="text" name="image_vertG" id="image_vertG" value='.$pic[0].' required /></div>';
    
    $img_vertD = '<div class="img_vertD"><label for="image_vertD">Lien vers l\'image: </label>'
            . '<input type="text" name="image_vertD" id="image_vertD" value='.$pic[0].' required /></div>';
    
    $img_2pic_pic1 = '<div class="img_2pic_1"><label for="image_2pic_1">Lien vers l\'image: </label>'
            . '<input type="text" name="image_2pic_1" id="image_2pic_1" value='.$pic[0].' required /></div>';
    
    $img_2pic_pic2 = '<div class="img_2pic_2"><label for="image_2pic_2">Lien vers l\'image: </label>'
            . '<input type="text" name="image_2pic_2" id="image_2pic_2" value='.$pic[1].' required /></div>';
    
    $img_3pic_grande = '<div class="img_3pic_gde"><label for="image_3pic_grande">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3pic_grande" id="image_3pic_grande" value='.$pic[0].' required /></div>';
    
    $img_3pic_petite1 = '<div class="img_3pic_pet1"><label for="image_3pic_petite1">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3pic_petite1" id="image_3pic_petite1" value='.$pic[1].' required /></div>';
    
    $img_3pic_petite2 = '<div class="img_3pic_pet2"><label for="image_3pic_petite2">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3pic_petite2" id="image_3pic_petite2" value='.$pic[2].' required /></div>';
    
    $img_3picInv_grande = '<div class="img_3picinv_gde"><label for="image_3picinv_grande">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3picinv_grande" id="image_3picinv_grande" value='.$pic[0].' required /></div>';
    
    $img_3picInv_petite1 = '<div class="img_3picinv_pet1"><label for="image_3picinv_petite1">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3picinv_petite1" id="image_3picinv_petite1" value='.$pic[1].' required /></div>';
    
    $img_3picInv_petite2 = '<div class="img_3picinv_pet2"><label for="image_3picinv_petite2">Lien vers l\'image: </label>'
            . '<input type="text" name="image_3picinv_petite2" id="image_3picinv_petite2" value='.$pic[2].' required /></div>';
    
?>

<section id="addArticle" class="row">
    <div class="col-xs-12 addArticlePage">
        <h1> R&eacute;diger un Article </h1>
        <div class="articleInfos">
            Remplissez le formulaire suivant pour &eacute;diter l'article s&eacute;lectionn&eacute;:
        </div>
        <form method="post" action="?page=f_edit_article">
            <input type="hidden" name="disposition" id="disposition" value="<?php print $id_dispo; ?>" />
            <input type="hidden" name="id_actArticle" id="id_actArticle" value="<?php print $article->getId(); ?>" />
            <div class="articleadd_line">
                <label for="titreArticle">Titre de l'article: </label>
                <input type="text" name="titreArticle" id="titreArticle" maxlength="255" value="<?php print $article->getTitre(); ?>" required />
            </div>
            <!-- affichage de certaines des zones du formulaire selon la mise en forme choisie (AJAX): -->
            <div id="formulaire">
                <?php
                    try {
                        //selection du formulaire et mise en place des éléments:
                        switch($id_dispo){
                            //Formulaire standard:
                            case 1: 
                                echo '<div class="form_article std">'.$texteHaut.'<div class="article_line  img_select">'.$img_std.'</div>'.$texteBas.'</div>';
                                break;
                            //Formulaire 3 images:
                            case 2:
                                echo '<div class="form_article pic3">'.$texteHaut.'<div class="article_line  img_select">'.$img_3pic_grande.'<div class="img_3pic_right">'.$img_3pic_petite1.$img_3pic_petite2.'</div></div>'.$texteBas.'</div>';
                                break;
                            //Formulaire 3 images inversé:
                            case 3:
                                echo '<div class="form_article picInv3">'.$texteHaut.'<div class="article_line  img_select">'.'<div class="img_3picinv_left">'.$img_3picInv_petite1.$img_3picInv_petite2.'</div>'.$img_3picInv_grande.'</div>'.$texteBas.'</div>';
                                break;
                            //Formulaire 2 images:
                            case 4:
                                echo '<div class="form_article pic2">'.$texteHaut.'<div class="article_line  img_select">'.$img_2pic_pic1.$img_2pic_pic2.'</div>'.$texteBas.'</div>';
                                break;
                            //Formulaire verticale gauche:
                            case 5:
                                echo '<div class="form_article vertG">'.'<div class="article_line  img_select">'.$img_vertG.'</div>'.$texteDroite.'</div>';
                                break;
                            //Formulaire verticale droite:
                            case 6:
                                echo '<div class="form_article vertD">'.$texteGauche.'<div class="article_line  img_select">'.$img_vertD.'</div></div>';
                                break;
                        }

                    } catch (Exception $ex) {
                        die($e->getMessage());
                    }
                ?>
            </div>
            <input name="articleEdit" id="articleEdit" type="submit" value="Editer l'article" />
        </form>
    </div>
</section>
