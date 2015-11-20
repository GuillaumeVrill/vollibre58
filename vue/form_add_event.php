<section id="addEvent" class="row">
    <div class="col-xs-12 addEventPage">
        <h1> Ajouter un Ev&eacute;nement </h1>
        <div class="eventInfos">
            Remplissez le formulaire suivant pour ajouter un &eacute;v&eacute;nement, qui sera contr&ocirc;l&eacute; et accept&eacute; par un mod&eacute;rateur.
        </div>
        <form method="post" action="?page=f_add_event">
            <div class="event_line">
                <label for="dateEvent">Date de l'&eacute;v&eacute;nement: </label>
                <input type="date" name="dateEvent" id="dateEvent" required />
            </div>
            <div class="event_line">
                <label for="titreAlerte">Nom de l'&eacute;v&eacute;nement (titre): </label>
                <input type="text" name="titreEvent" id="titreEvent" placeholder="Ex: Sortie puy de dome" required />
            </div>
            <div class="event_line">
                <label for="descrEvent">Description</label>
                <textarea name="descrEvent" id="descrEvent" rows="3" cols="50" resize="none" maxlength="255" required></textarea>
            </div>
            <input name="eventSend" id="eventSend" type="submit" value="Proposer l'&eacute;v&eacute;nement" />
        </form>
    </div>
</section>
