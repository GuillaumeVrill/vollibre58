<?php
    //récupération des événements et des alertes:
    $evenements = recupererEvenements();
    $alertes = recupererAlertes();
    
    //traitement des formulaires de suppression:
    for($i=0; $i<sizeof($evenements); $i++){
        if(isset($_POST['event'.$i])){
            
        }
    }
    for($i=0; $i<sizeof($alertes); $i++){
        if(isset($_POST['alerte'.$i])){
            
        }
    }
?>

<section id="events" class="row">
    <div class="col-xs-12 col-sm-6" id="event">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h1 class="panel-title">Ev&eacute;nements</h1>
            </div>
            <ul class="list-group">
                <?php if(isset($evenements)){
                    for($i=0; $i<count($evenements); $i++){ ?>
                        <li class="list-group-item">
                            <div class="contenu">
                                <span class="badge">Evenement</span>
                                <?php print utf8_encode($evenements[$i]->getDateFin()); ?> - 
                                <strong><?php print utf8_encode($evenements[$i]->getTitre()); ?></strong> - 
                                <?php print utf8_encode ($evenements[$i]->getDescription()); ?>
                            </div>
                            <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right']) && 
                                    ($_SESSION['user_right']=='moderateur' || $_SESSION['user_right']=='administrateur')) : ?>
                                <div class="supp_btn">
                                    <form class="btn" name="event_supp_form" id="event_supp_form" method="post" action="<?php print URL_PATH; ?>?page=evenements">
                                        <input name="event<?php print $alertes[$i]->getId(); ?>" id="event<?php print $evenements[$i]->getId(); ?>" type="submit" value=""
                                            onClick="confirm('Supprimer l\'événement?')" />
                                    </form>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </div>
    <div class="col-xs-12 col-sm-6" id="alerte">
        <div class="panel panel-danger">
            <div class="panel-heading">
                <h1 class="panel-title">Alertes</h1>
            </div>
            <ul class="list-group">
                <?php if(isset($alertes)){
                    for($i=0; $i<count($alertes); $i++){ ?>
                        <li class="list-group-item">
                            <div class="contenu">
                                <span class="badge">Alerte</span>
                                <?php print utf8_encode($alertes[$i]->getDateDebut()); ?> - 
                                <strong><?php print utf8_encode($alertes[$i]->getTitre()); ?></strong> - 
                                <?php print utf8_encode ($alertes[$i]->getDescription()); ?>
                            </div>
                            <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right']) && 
                                    ($_SESSION['user_right']=='moderateur' || $_SESSION['user_right']=='administrateur')) : ?>
                                <div class="supp_btn">
                                    <form class="btn" name="alert_supp_form" id="alert_supp_form" method="post" action="<?php print URL_PATH; ?>?page=evenements">
                                        <input name="alerte<?php print $alertes[$i]->getId(); ?>" id="alerte<?php print $alertes[$i]->getId(); ?>" type="submit" value="" 
                                            onClick="confirm('Supprimer l\'alerte?')"/>
                                    </form>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php } 
                } ?>
            </ul>
        </div>
    </div>
</section>
