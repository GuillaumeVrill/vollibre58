<?php
function createAlbumLinks(){
    $albums = recupererAlbums();
    for($i=0; $i<sizeof($albums); $i++){
        echo '<a href="'.$albums[$i]->getUrl().'">'.$albums[$i]->getTitre().'</a>';
    }
}

function createView(){
    //récupération des articles et de leurs images:
    $articles = recupererNews();
    $images = recupererImages();
    
    //pour chaque article:
    for($i=0; $i<sizeof($articles); $i++){
        //on récupère les url des images de l'article:
        $pic = array();
        for($j=0; $j<sizeof($images); $j++){
            if($images[$j]->getIdNews() == $articles[$i]->getId()){
                $pic[] = $images[$j]->getChemin();
            }
        }
        //selon la disposition:
        switch ($articles[$i]->getIdDisposition()){
            case 1:
                echo '<div class="blogArticle std">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="content">'.$articles[$i]->getTexte1().'</div>'
                    . '<div class="picture pic-std">'
                    . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                    . '</div>'
                    . '<div class="content">'.$articles[$i]->getTexte2().'</div>'
                    . '</div>';
                break;

            case 2:
                echo '<div class="blogArticle pic3">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="content">'.$articles[$i]->getTexte1().'</div>'
                    . '<div class="galerie galerie-3pic">'
                    . '<div class="img-grande">'
                    . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                    . '</div>'
                    . '<div class="img-petite">'
                    . '<a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[1].'" /></a>'
                    . '<a href="'.URL_PATH.$pic[2].'" target="_blank"><img src="'.$pic[2].'" /></a>'
                    . '</div>'
                    . '</div>'
                    . '<div class="content">'.$articles[$i]->getTexte2().'</div>'
                    . '</div>';
                break;

            case 3:
                echo '<div class="blogArticle pic3-inv">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="content">'.$articles[$i]->getTexte1().'</div>'
                    . '<div class="galerie galerie-3pic-inv">'
                    . '<div class="img-petite">'
                    . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[1].'" /></a>'
                    . '<a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[2].'" /></a>'
                    . '</div>'
                    . '<div class="img-grande">'
                    . '<a href="'.URL_PATH.$pic[2].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                    . '</div>'
                    . '</div>'
                    . '<div class="content">'.$articles[$i]->getTexte2().'</div>'
                    . '</div>';
                break;

            case 4:
                echo '<div class="blogArticle pic2">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="content">'.$articles[$i]->getTexte1().'</div>'
                    . '<div class="galerie galerie-2pic">'
                    . '<div class="demi"><a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a></div>'
                    . '<div class="demi"><a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[1].'" /></a></div>'
                    . '</div>'
                    . '<div class="content">'.$articles[$i]->getTexte2().'</div>'
                    . '</div>';
                break;

            case 5:
                echo '<div class="blogArticle vertG">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="picture-vertG vertical">'
                    . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                    . '</div>'
                    . '<div class="content-vertG vertical">'.$articles[$i]->getTexte1().'</div>'
                    . '</div>';
                break;

            case 6:
                echo '<div class="blogArticle vertD">'
                    . '<h3>'.$articles[$i]->getTitre().'</h3>'
                    . '<div class="content-vertD vertical">'.$articles[$i]->getTexte1().'</div>'
                    . '<div class="picture-vertD vertical">'
                    . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                    . '</div>'
                    . '</div>';
                break;
        }
    }
}

$page['vue'] = 'vue/corps_blog.php';
$page['css'] = '<link rel="stylesheet" type="text/css" href="static/css/css_blog.css" />';
