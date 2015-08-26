<section id="events" class="row">
	<div class="col-xs-12 col-sm-6" id="event">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h1 class="panel-title">Ev&eacute;nements</h1>
			</div>
			<ul class="list-group">
				
						
				<?php
				
				$evenements = $_SESSION["evenements"];
				
				if(isset($evenements)){
					for($i=0; $i<count($evenements); $i++){
						echo '<li class="list-group-item">';
						echo '<span class="badge">Evenement</span>'; 
						echo  utf8_encode ($evenements[$i]->getDescription());
						echo '</li>';
					}
				}
				?>
				
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
					
					$alertes = $_SESSION["alertes"];
					
					for($i=0; $i<count($alertes); $i++){
						echo '<li class="list-group-item">';
						echo '<span class="badge">Alerte</span>'; 
						echo  utf8_encode ($alertes[$i]->getDescription());
					}
					
					echo '</li>';
				?>
			</ul>
		</div>
	</div>
</section>
