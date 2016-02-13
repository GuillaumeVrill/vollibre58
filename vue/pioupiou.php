<div class="row">
    <div id="pioupiou" class="col-xs-12">
        <h3>Donn&eacute;es m&eacute;t&eacute;os:</h3>
        <!--<script src="http://api.pioupiou.fr/socket.io/socket.io.js"></script>
        <script>
          /*var socket = io.connect("http://api.pioupiou.fr/v1/push");

          socket.on("connect", function () {
            socket.emit("subscribe", "all");
            socket.emit("subscribe", 1); // station n° 1
            //socket.emit("unsubscribe", "all");
          });

          socket.on("error", function (data) {
            console.log(data);
          });
          socket.on("status", function (data) {
            
            console.log(data);
          });
          socket.on("measurement", function (data) {
              
            console.log(data);
          });
          socket.on("location", function (data) {
              
            console.log(data);
          });
          */
        </script>-->
        <?php
            $json_data = url_get_contents("http://api.pioupiou.fr/v1/live/110");
            $json = new Services_JSON();
            $datas = $json->decode($json_data);
        ?>
        <div class="pioupiou-datas">
            <!--<div class="pioupiou-left">
                <h4>Informations g&eacute;n&eacute;rales:</h4>
                <strong>Balise: </strong><span id="balise"></span><?php print($datas->data->meta->name); ?><br />
                <strong>Lattitude: </strong><?php print($datas->data->location->latitude); ?><br />
                <strong>Longitude: </strong><?php print($datas->data->location->longitude); ?><br />
                <strong>Date: </strong><?php print($datas->data->location->date); ?><br />
            </div>
            <div class="pioupiou-right">
                <h4>Mesures:</h4>
                <strong>Date: </strong><?php print($datas->data->measurements->date); ?><br />
                <strong>Pression: </strong><?php print($datas->data->measurements->pressure); ?><br />
                <strong>Vitesse Vent Moyenne: </strong><?php print($datas->data->measurements->wind_speed_avg); ?><br />
                <strong>Vitesse vent Max: </strong><?php print($datas->data->measurements->wind_speed_max); ?><br />
                <strong>Vitesse Vent Min: </strong><?php print($datas->data->measurements->wind_speed_min); ?><br />
            </div>-->
            <div><strong>Nous disposons d'une balise pioupiou dont les données sont accessibles <a href="http://api.pioupiou.fr/v1/live/110" target="_blank">ici</a></strong></div>
            <div class="infos-legales">
                Pour plus d'informations sur l'acquisition des donn&eacute;es des balises Pioupiou, se reporter &agrave; l'article correspondant dans les 
                <a href="<?php print URL_PATH ?>?page=mentions" title="Mentions legales" target="_blank">Mentions l&eacute;gales</a>. <br />
            </div>
        </div>
    </div>
</div>