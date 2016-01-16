<section id="alerteEvent" class="row">
    <div class="col-xs-12 col-sm-6">
        <?php
            if(isset($evenements)){
                //on ne publie sur la page d'accueil que les 3 derniers événements en date:
                for($i=0; $i<3; $i++){
                    if(count($evenements)>$i){ ?>
                        <p>
                            <span class="label label-success">Infos:</span>
                            <?php print utf8_encode ($evenements[$i]->getDateFin()); ?> - 
                            <a class="description" href="<?php print URL_PATH; ?>?page=evenements"><?php print $evenements[$i]->getTitre(); ?></a>
                        </p>
                    <?php }
                }
            }
            else { echo 'Aucune information enregistr&eacute;e.'; }
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
                            <a class="description" href="<?php print URL_PATH; ?>?page=evenements"><?php print $alertes[$i]->getTitre(); ?></a>
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
        <iframe src="<?php if(isset($video[0]) && notEmpty($video[0]->getChemin())){ print $video[0]->getChemin(); } ?>" frameborder="0" allowfullscreen></iframe>
        <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right']) && ($_SESSION['user_right']=='2' || $_SESSION['user_right']=='1')) : ?>
            <div class="editVideo">
                <form name="f_edit_video" id="f_edit_video" method="post" action="<?php print URL_PATH; ?>">
                    <label for="videoURL">URL de la vidéo: </label>
                    <input type="text" name="videoURL" id="videoURL" value="<?php if(isset($video[0]) && notEmpty($video[0]->getChemin())){ print $video[0]->getChemin(); } ?>" required />
                    <input type="submit" name="videoSubmit" id="videoSubmit" value="Mettre à jour" />
                </form>
            </div>
        <?php endif; ?>
        <div class="regles">
            <h4>Les r&egrave;gles pour voler avec nous:</h4>
            <ul>
                <li>Roulez à 30km/h dans le village</li>
                <li>En arrivant, saluez les locaux (et m&ecirc;me les autres!)</li>
                <li>En vol, respectez les priorités</li>
                <li>Posez-vous dans l'attrerrissage, dans les chemins, mais pas dans les champs en culture</li>
        </div>
    </div>
    <div class="col-xs-12 col-sm-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                    <h3>Derni&egrave;res actualit&eacute;s du club</h3>
            </div>
            <ul class="list-group">
                <?php for($n=0; $n<sizeof($lastNews) && $n<2; $n++): ?>
                    <?php if(isset($lastNews[$n]) && notEmpty($lastNews[$n]->getTitre()) && 
                            isset($lastNewsPictures[$n]) && notEmpty($lastNewsPictures[$n][0])): ?>
                    <li class="list-group-item">
                        <a href="<?php print URL_PATH; ?>?page=blog">
                            <div class="newsTitle"><?php print $lastNews[$n]->getTitre(); ?></div>
                            <img class="newsPic" src="<?php print $lastNewsPictures[$n][0]->getChemin(); ?>" />
                        </a>
                    </li>
                    <?php endif; ?>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>
