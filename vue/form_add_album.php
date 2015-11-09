<section id="addAlbum" class="row">
    <div class="col-xs-12 addAlbumPage">
        <h1> Ajouter un Album </h1>
        <div class="albumInfos">
            Remplissez le formulaire suivant pour ajouter un album.
        </div>
        <form method="post" action="?page=f_add_album">
            <div class="albumadd_line">
                <label for="titreAlbum">Titre: </label>
                <input type="text" name="titreAlbum" id="titreAlbum" maxlength="100" placeholder="Ex: Album de Guillaume" />
            </div>
            <div class="albumadd_line">
                <label for="urlAlbum">Lien de l'album (URL): </label>
                <input type="text" name="urlAlbum" id="urlAlbum" maxlength="100" placeholder="Ex: http://lorempixel.com" />
            </div>
            <input name="albumSend" id="albumSend" type="submit" value="Ajouter l'album" />
        </form>
    </div>
</section>
