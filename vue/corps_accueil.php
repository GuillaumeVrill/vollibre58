<?php
    //recherche des alertes et des événements:
    $alertes = recupererAlertes();
    $evenements = recupererEvenements();
?>
<section id="alerteEvent" class="row">
    <div class="col-xs-12 col-sm-6">
        <?php
            if(isset($evenements)){
                //on ne publie sur la page d'accueil que les 3 derniers événements en date:
                for($i=0; $i<3; $i++){
                    if(count($evenements)>$i){ ?>
                        <p>
                            <span class="label label-success">Event:</span>
                            <?php print utf8_encode ($evenements[$i]->getDateFin()); ?> - 
                            <a class="description" href="<?php print URL_PATH; ?>?page=evenements"><?php print utf8_encode($evenements[$i]->getTitre()); ?></a>
                        </p>
                    <?php }
                }
            }
            else { echo 'Aucun évènement prévu.'; }
        ?>
        <br />
    </div>
    <div class="col-xs-12 col-sm-6">
        <?php
            if(isset($alertes)){
                for($i=0; $i<3; $i++){
                    if(count($alertes)>$i){ ?>
                        <p>
                            <span class="label label-danger">Alerte:</span>
                            <?php print utf8_encode ($alertes[$i]->getDateDebut()); ?> - 
                            <a class="description" href="<?php print URL_PATH; ?>?page=evenements"><?php print utf8_encode($alertes[$i]->getTitre()); ?></a>
                        </p>
                    <?php }
                }
            }
            else { echo 'Aucune alerte enregistr&eacute;e.'; }
        ?>
        <br />
    </div>
</section>
<div class="row">
    <div id="video" class="col-xs-12 col-sm-8">
        <h3>Pr&eacute;sentation du club:</h3>
        <iframe src="https://www.youtube.com/embed/JW2ShQsMFEk" frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3>Derni&egrave;res actualit&eacute;s du club</h3>
            </div>
            <ul class="list-group">
                <?php
                    $tab_News = recupererNbDerniereNews(5);

                    if(isset($tab_News)){
                            echo "ok";
                    }
                    else{
                            echo "pas ok";
                    }
                   /* for($i=0; $i<count($tab_News); $i++){
                            echo utf8_encode($tab_News[$i]->getTitre());
                    }*/
                ?>
                <li class="list-group-item">Prochain <a href="">&eacute;v&eacute;nement</a> pr&eacute;vu</li>
                <li class="list-group-item">Etc.</li>
            </ul>
        </div>
    </div>
</div>
