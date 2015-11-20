<script type="text/javascript">
    function getXMLHttpRequest() {
            var req = null;
            try { req = new XMLHttpRequest(); } catch (err1) {
                    try {
                            var req = new ActiveXObject("Microsoft.XMLHTTP");
                    } catch (err2) {
                            try {
                                    var req = new ActiveXObject("Msxml2.XMLHTTP");
                            } catch (err3) {
                                    req = null;
                            }
                    }
            }
            return req;
    }
    function loadForm(){
        var request = getXMLHttpRequest();
        request.onreadystatechange = function(){
            if(request.readyState == 4 && request.status == 200){
                var response = request.responseText;
                document.getElementById('formulaire').innerHTML = response;
            }
        };
        request.open("POST","static/ajax/loadForm_article.php",true);
        request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
        disposition = document.getElementsByName('disposition');
        for(i=0; i<disposition.length; i++){
            if(disposition[i].checked){
                idDispo = disposition[i].value;
            }
        }
        request.send("idDisposition="+idDispo);
    }
</script>

<?php
    //récupération des mises en formes disponibles:
    $dispo = recupererDispositions();
?>

<section id="addArticle" class="row">
    <div class="col-xs-12 addArticlePage">
        <h1> R&eacute;diger un Article </h1>
        <div class="articleInfos">
            Remplissez le formulaire suivant pour ajouter un nouvel article qui apparaitra en haut de la page "blog":
        </div>
        <form method="post" action="?page=f_add_article">
            <div class="articleadd_line">
                <label for="titreArticle">Titre de l'article: </label>
                <input type="text" name="titreArticle" id="titreArticle" maxlength="255" placeholder="Ex: Vols d'automne 2015" required />
            </div>
            <div class="articleadd_line">
                <label for="selectDispo">Selectionnez la mise en forme de l'article: </label>
                <div id="selectDispo">
                    <?php
                        for ($i=0; $i<sizeof($dispo); $i++){ ?>
                            <div class="selectBox">
                                <input type="radio" name="disposition" value="<?php print $dispo[$i]->getId(); ?>" 
                                       id="dispo<?php print $dispo[$i]->getId(); ?>"
                                       onClick="loadForm()" required />
                                <label for="dispo<?php print $dispo[$i]->getId(); ?>"><?php print $dispo[$i]->getLibelle(); ?><br />
                                    <img src="<?php print $dispo[$i]->getUrl(); ?>" />
                                </label>
                            </div>
                        <?php }
                    ?>
                </div>
            </div>
            <!-- affichage de certaines des zones du formulaire selon la mise en forme choisie (AJAX): -->
            <div id="formulaire">
                <!-- formulaire chargé en ajax: -->
            </div>            
            <input name="articleSend" id="articleSend" type="submit" value="Ajouter l'article" />
        </form>
    </div>
</section>
