	<section id="alerteEvent" class="row">
		<div class="col-xs-12 col-sm-6">
			<?php
				//recherche des evenements:
				$evenements = $_SESSION["evenements"];
				
				if(isset($evenements)){
					for($i=0; $i<3; $i++){
						if(count($evenements)>$i){
							echo '<p><span class="label label-success">Event:</span> F&eacute;vrier, <a href="">'.$evenements[$i]->getDescription().'</a>,le '.$evenements[$i]->getDateFin().'!</p>';	
						}
					}
				}
				else{
					echo 'aucun évènements prévu actuellement';
				}
				
			?>
			<br />
		</div>
		<div class="col-xs-12 col-sm-6">
			<?php
				//recherche des alertes:
				
				$alertes = $_SESSION["alertes"];
				
				if(isset($alertes)){
					for($i=0; $i<3; $i++){
						if(count($alertes)>$i){
							echo '<p><span class="label label-danger">Alerte:</span>'.$alertes[$i]->getTitre().', <a href="">'.$alertes[$i]->getDescription().'</a>,le '.$alertes[$i]->getDateDebut().'</p>';
						}
					}
				}
			
			?>
			<br />
		</div>
	</section>
	<div class="row">
		<div id="video" class="col-xs-12 col-sm-8">
			<h3>Pr&eacute;sentation du club:</h3>
			<iframe src="https://www.youtube.com/embed/xbmMfFfta4M" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3>Derni&egrave;res actualit&eacute;s du club</h3>
				</div>
				<ul class="list-group">
					<li class="list-group-item">Dernier <a href="">album ajout&eacute;</a></li>
					<li class="list-group-item">Prochain <a href="">&eacute;v&eacute;nement</a> pr&eacute;vu</li>
					<li class="list-group-item">Etc.</li>
				</ul>
			</div>
		</div>
	</div>
