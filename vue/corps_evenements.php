<section id="events" class="row">
	<div class="col-xs-12 col-sm-6" id="event">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="panel-title">Ev&eacute;nements</h1>
			</div>
			<ul class="list-group">
				<?php
				$evenements = recupererEvenements();
				
				if(isset($evenements)){
					for($i=0; $i<count($evenements); $i++){ ?>
                                            <li class="list-group-item">
                                            <span class="badge">Evenement</span>
                                            <?php print utf8_encode($evenements[$i]->getDateFin()); ?> - 
                                            <strong><?php print utf8_encode($evenements[$i]->getTitre()); ?></strong> - 
                                            <?php print utf8_encode ($evenements[$i]->getDescription()); ?>
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
				<?php
                                $alertes = recupererAlertes();
                                
                                if(isset($alertes)){
                                    for($i=0; $i<count($alertes); $i++){ ?>
                                            <li class="list-group-item">
                                            <span class="badge">Alerte</span>
                                            <?php print utf8_encode($alertes[$i]->getDateDebut()); ?> - 
                                            <strong><?php print utf8_encode($alertes[$i]->getTitre()); ?></strong> - 
                                            <?php print utf8_encode ($alertes[$i]->getDescription()); ?>
                                            </li>
                                    <?php } 
                                } ?>
			</ul>
		</div>
	</div>
</section>
