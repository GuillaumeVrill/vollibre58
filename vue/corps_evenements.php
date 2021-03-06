<section id="events" class="row">
    <div class="col-xs-12 col-sm-6" id="event">
        <div class="panel panel-success">
            <div class="panel-heading">
                <h1 class="panel-title">Informations</h1>
            </div>
            <ul class="list-group">
                <?php if(isset($evenements)){
                    for($i=0; $i<count($evenements); $i++){ ?>
                        <li class="list-group-item">
                            <div class="contenu">
                                <span class="badge">Informations</span>
                                <?php print utf8_encode($evenements[$i]->getDateFin()); ?> - 
                                <strong><?php print $evenements[$i]->getTitre(); ?></strong> - 
                                <?php print $evenements[$i]->getDescription(); ?>
                            </div>
                            <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right']) && ($_SESSION['user_right']=='2' || $_SESSION['user_right']=='1')) : ?>
                                <div class="supp_btn">
                                    <form class="btn" name="event_supp_form<?php print $i; ?>" method="post" action="<?php print URL_PATH; ?>?page=evenements" 
                                          onsubmit="return confirm('Supprimer l\'information?')">
                                        <input name="event<?php print $evenements[$i]->getId(); ?>" id="event<?php print $evenements[$i]->getId(); ?>" type="submit" value="" />
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
                                <?php print utf8_encode($alertes[$i]->getDateFin()); ?> - 
                                <strong><?php print $alertes[$i]->getTitre(); ?></strong> - 
                                <?php print $alertes[$i]->getDescription(); ?>
                            </div>
                            <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right']) && 
                                    ($_SESSION['user_right']=='2' || $_SESSION['user_right']=='1')) : ?>
                                <div class="supp_btn">
                                    <form class="btn" name="alert_supp_form<?php print $i; ?>" method="post" action="<?php print URL_PATH; ?>?page=evenements" 
                                          onsubmit="return confirm('Supprimer l\'alerte?')">
                                        <input name="alerte<?php print $alertes[$i]->getId(); ?>" id="alerte<?php print $alertes[$i]->getId(); ?>" type="submit" value="" />
                                    </form>
                                </div>
                            <?php endif; ?>
                        </li>
                    <?php } 
                } ?>
            </ul>
        </div>
    </div>
    <?php if(isset($_SESSION['user_right']) && !empty($_SESSION['user_right'])): ?>
    <div class="col-xs-12">
        <div class="col-xs-6" id="firstForm">
            <a class="btnNew btnNewEvent" href="<?php print URL_PATH; ?>?page=f_add_event">Nouvelle Information</a>
        </div>
        <div class="col-xs-6">
            <a class="btnNew btnNewAlerte" href="<?php print URL_PATH; ?>?page=f_add_alerte">Nouvelle alerte</a>
        </div>
    </div>
    <?php endif; ?>
</section>
