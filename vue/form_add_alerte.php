<section id="addAlerte" class="row">
    <div class="col-xs-12 addAlertePage">
        <h1> Ajouter une Alerte </h1>
        <div class="alerteInfos">
            Remplissez le formulaire suivant pour ajouter une alerte, elle sera contr&ocirc;l&eacute;e et accept&eacute;e par un mod&eacute;rateur.
        </div>
        <form method="post" action="?page=f_add_alerte">
            <div class="alerte_line">
                <label for="dateExp">Date: </label>
                <input type="date" name="dateExp" id="dateExp" required />
            </div>
            <div class="alerte_line">
                <label for="titreAlerte">Nom de l'alerte (titre): </label>
                <input type="text" name="titreAlerte" id="titreAlerte" placeholder="Ex: Objet trouv&eacute;" required />
            </div>
            <div class="alerte_line">
                <label for="descrAlerte">Description</label>
                <textarea name="descrAlerte" id="descrAlerte" rows="3" cols="50" resize="none" maxlength="255" required></textarea>
            </div>
            <input name="alerteSend" id="alerteSend" type="submit" value="Proposer l'alerte" />
        </form>
    </div>
</section>
