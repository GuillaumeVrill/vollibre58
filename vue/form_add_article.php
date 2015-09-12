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
    $disposition = array();
    //'nom' = code raccourci du titre
    //'titre' = nom qui sera affiché et visible
    //A REMPLACER PAR UNE REQUETE SQL ==>
    $disposition[0]['nom'] = "std";
    $disposition[1]['nom'] = "3pic";
    $disposition[2]['nom'] = "3pic-rev";
    $disposition[3]['nom'] = "2pic";
    $disposition[4]['nom'] = "vert-left";
    $disposition[5]['nom'] = "vertright";
    
    $disposition[0]['titre'] = "standart";
    $disposition[1]['titre'] = "3 images";
    $disposition[2]['titre'] = "3 images inversées";
    $disposition[3]['titre'] = "2 images";
    $disposition[4]['titre'] = "verticale gauche";
    $disposition[5]['titre'] = "verticale droite";
    
    $disposition[0]['url'] = "static/images/dispositionsArticles/01standard.png";
    $disposition[1]['url'] = "static/images/dispositionsArticles/02pictures3.png";
    $disposition[2]['url'] = "static/images/dispositionsArticles/03pictures3_rev.png";
    $disposition[3]['url'] = "static/images/dispositionsArticles/04pictures2.png";
    $disposition[4]['url'] = "static/images/dispositionsArticles/05verticalLeft.png";
    $disposition[5]['url'] = "static/images/dispositionsArticles/06verticalRight.png";
    
?>

<section id="addArticle" class="row">
    <div class="col-xs-12 addArticlePage">
        <h1> R&eacute;diger un article </h1>
        <div class="articleInfos">
            Remplissez le formulaire suivant pour ajouter un nouvel article qui apparaitra en haut de la page "blog":
        </div>
        <form method="post" action="?page=f_add_article">
            <div class="articleadd_line">
                <label for="titreArticle">Titre de l'article: </label>
                <input type="text" name="titreArticle" id="titreArticle" maxlength="255" placeholder="Ex: Vols d'automne 2015" />
            </div>
            <div class="articleadd_line">
                <label for="selectDispo">Selectionnez la mise en forme de l'article: </label>
                <div id="selectDispo">
                    <?php
                        for ($i=0; $i<sizeof($disposition); $i++){ ?>
                            <div class="selectBox">
                                <input type="radio" name="disposition" value="<?php print $i; ?>" 
                                       id="<?php print $disposition[$i]['nom']; ?>"
                                       onClick="loadForm()" />
                                <label for="<?php print $disposition[$i]['nom']; ?>"><?php print $disposition[$i]['titre']; ?><br />
                                    <img src="<?php print $disposition[$i]['url']; ?>" />
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
