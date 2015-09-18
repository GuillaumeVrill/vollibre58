<?php
    //recupération des articles et des images:
    /*
     * SQL ICI!!!
     */
    $article = array();
    $img = array();
    $img[0]['id_article'] = "1";
    $img[0]['url'] = 'static/images/fonds/fond07.jpg';
    $img[1]['id_article'] = "2";
    $img[1]['url'] = 'static/images/fonds/fond02.JPG';
    $img[2]['id_article'] = "2";
    $img[2]['url'] = 'static/images/fonds/fond05.JPG';
    $img[3]['id_article'] = "2";
    $img[3]['url'] = 'static/images/fonds/fond08.jpg';
    $img[4]['id_article'] = "3";
    $img[4]['url'] = 'static/images/fonds/fond05.JPG';
    $img[5]['id_article'] = "3";
    $img[5]['url'] = 'static/images/fonds/fond08.jpg';
    $img[6]['id_article'] = "4";
    $img[6]['url'] = 'static/images/incontournables/P1110451.JPG';
    
    $article[0]['id'] = "1";
    $article[0]['titre'] = "Nos vols d'automne 2014";
    $article[0]['disposition'] = "1";
    $article[0]['texte1'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed nunc odio, semper sit amet enim a, scelerisque facilisis erat. 
                Phasellus sit amet scelerisque felis. Aliquam interdum nisi eu lectus facilisis aliquet. 
                In dapibus tristique nisi, vitae consequat libero viverra non. Suspendisse ac velit posuere, 
                lobortis quam vitae, suscipit justo. Aliquam molestie ornare eros, sed blandit arcu tincidunt at. 
                Phasellus dictum interdum pharetra. Nunc in leo pharetra, interdum nisi eu, vestibulum justo. 
                Cras at dolor erat. Integer vulputate nisi vitae nibh eleifend faucibus. Mauris imperdiet eleifend 
                ex a auctor.";
    $article[0]['texte2'] = "Aliquam vestibulum lectus sit amet felis eleifend, vitae lobortis erat commodo. Donec rhoncus 
                libero nec enim lacinia scelerisque non et dolor. Class aptent taciti sociosqu ad litora torquent 
                per conubia nostra, per inceptos himenaeos. Suspendisse ac enim non lacus blandit finibus. 
                Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                Cras dictum erat sit amet metus finibus, id aliquet est tempus. Aliquam sed eros sapien. Donec 
                facilisis faucibus sapien id suscipit. Pellentesque efficitur diam sit amet vehicula euismod. 
                Nam sed euismod ligula. Praesent magna lacus, vestibulum sit amet cursus at, consectetur non justo. 
                Quisque et laoreet nunc.";
    
    $article[1]['id'] = "2";
    $article[1]['titre'] = "Nos vols d'été 2014";
    $article[1]['disposition'] = "2";
    $article[1]['texte1'] = "";
    $article[1]['texte2'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed nunc odio, semper sit amet enim a, scelerisque facilisis erat. 
                Phasellus sit amet scelerisque felis. Aliquam interdum nisi eu lectus facilisis aliquet. 
                In dapibus tristique nisi, vitae consequat libero viverra non. Suspendisse ac velit posuere, 
                lobortis quam vitae, suscipit justo. Aliquam molestie ornare eros, sed blandit arcu tincidunt at. 
                Phasellus dictum interdum pharetra. Nunc in leo pharetra, interdum nisi eu, vestibulum justo. 
                Cras at dolor erat. Integer vulputate nisi vitae nibh eleifend faucibus. Mauris imperdiet eleifend 
                ex a auctor.";
    
    $article[2]['id'] = "3";
    $article[2]['titre'] = "Nos vols de 2014";
    $article[2]['disposition'] = "4";
    $article[2]['texte1'] = "Des vols magiques en 2014 à Grenois et Asnan! Nos sites de vol favoris!!!";
    $article[2]['texte2'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed nunc odio, semper sit amet enim a, scelerisque facilisis erat. 
                Phasellus sit amet scelerisque felis. Aliquam interdum nisi eu lectus facilisis aliquet. 
                In dapibus tristique nisi, vitae consequat libero viverra non. Suspendisse ac velit posuere, 
                lobortis quam vitae, suscipit justo. Aliquam molestie ornare eros, sed blandit arcu tincidunt at. 
                Phasellus dictum interdum pharetra. Nunc in leo pharetra, interdum nisi eu, vestibulum justo. 
                Cras at dolor erat. Integer vulputate nisi vitae nibh eleifend faucibus. Mauris imperdiet eleifend 
                ex a auctor.";
    
    $article[3]['id'] = "4";
    $article[3]['titre'] = "Nos vols de 2014";
    $article[3]['disposition'] = "6";
    $article[3]['texte1'] = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Sed nunc odio, semper sit amet enim a, scelerisque facilisis erat. 
                Phasellus sit amet scelerisque felis. Aliquam interdum nisi eu lectus facilisis aliquet. 
                In dapibus tristique nisi, vitae consequat libero viverra non. Suspendisse ac velit posuere, 
                lobortis quam vitae, suscipit justo. Aliquam molestie ornare eros, sed blandit arcu tincidunt at. 
                Phasellus dictum interdum pharetra. Nunc in leo pharetra, interdum nisi eu, vestibulum justo. 
                Cras at dolor erat. Integer vulputate nisi vitae nibh eleifend faucibus. Mauris imperdiet eleifend 
                ex a auctor.";
    $article[3]['texte2'] = "";
    
?>

<section id="blog" class="row">
    <div class="col-xs-12">
        <h1> Le blog </h1>
        <div class="albumsLinks">
            <h4>Albums des photographes:</h4>
            <a href="">Album de Guillaume</a>
            <a href="">Album de Sebastien</a>
        </div>
        <?php
            //pour chaque article:
            for($i=0; $i<sizeof($article); $i++){
                //on récupère les url des images de l'article:
                $pic = array();
                for($j=0; $j<sizeof($img); $j++){
                    if($img[$j]['id_article'] == $article[$i]['id']){
                        $pic[] = $img[$j]['url'];
                    }
                }
                //selon la disposition:
                switch ($article[$i]['disposition']){
                    case 1:
                        echo '<div class="blogArticle std">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="content">'.$article[$i]['texte1'].'</div>'
                            . '<div class="picture pic-std">'
                            . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                            . '</div>'
                            . '<div class="content">'.$article[$i]['texte2'].'</div>'
                            . '</div>';
                        break;
                    
                    case 2:
                        echo '<div class="blogArticle pic3">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="content">'.$article[$i]['texte1'].'</div>'
                            . '<div class="galerie galerie-3pic">'
                            . '<div class="img-grande">'
                            . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                            . '</div>'
                            . '<div class="img-petite">'
                            . '<a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[1].'" /></a>'
                            . '<a href="'.URL_PATH.$pic[2].'" target="_blank"><img src="'.$pic[2].'" /></a>'
                            . '</div>'
                            . '</div>'
                            . '<div class="content">'.$article[$i]['texte2'].'</div>'
                            . '</div>';
                        break;
                    
                    case 3:
                        echo '<div class="blogArticle pic3-inv">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="content">'.$article[$i]['texte1'].'</div>'
                            . '<div class="galerie galerie-3pic-inv">'
                            . '<div class="img-petite">'
                            . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[1].'" /></a>'
                            . '<a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[2].'" /></a>'
                            . '</div>'
                            . '<div class="img-grande">'
                            . '<a href="'.URL_PATH.$pic[2].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                            . '</div>'
                            . '</div>'
                            . '<div class="content">'.$article[$i]['texte2'].'</div>'
                            . '</div>';
                        break;
                    
                    case 4:
                        echo '<div class="blogArticle pic2">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="content">'.$article[$i]['texte1'].'</div>'
                            . '<div class="galerie galerie-2pic">'
                            . '<div class="demi"><a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a></div>'
                            . '<div class="demi"><a href="'.URL_PATH.$pic[1].'" target="_blank"><img src="'.$pic[1].'" /></a></div>'
                            . '</div>'
                            . '<div class="content">'.$article[$i]['texte2'].'</div>'
                            . '</div>';
                        break;
                    
                    case 5:
                        echo '<div class="blogArticle vertG">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="picture-vertG vertical">'
                            . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                            . '</div>'
                            . '<div class="content-vertG vertical">'.$article[$i]['texte1'].'</div>'
                            . '</div>';
                        break;
                    
                    case 6:
                        echo '<div class="blogArticle vertD">'
                            . '<h3>'.$article[$i]['titre'].'</h3>'
                            . '<div class="content-vertD vertical">'.$article[$i]['texte1'].'</div>'
                            . '<div class="picture-vertD vertical">'
                            . '<a href="'.URL_PATH.$pic[0].'" target="_blank"><img src="'.$pic[0].'" /></a>'
                            . '</div>'
                            . '</div>';
                        break;
                }
            }
        ?>
    </div>
</section>