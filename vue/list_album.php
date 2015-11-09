<section id="listAlbums" class="row">
    <div class="albumItem albumTemoin">
        <div class="album_id">ID</div>
        <div class="album_title">TITRE</div>
        <div class="album_url">URL</div>
        <div class="album_action">ACTION</div>
    </div>
    <?php for($i=0; $i<sizeof($albums); $i++){ ?>
        <div class="albumItem">
            <div class="album_id"><?php print $albums[$i]->getId(); ?></div>
            <div class="album_title">
                <div class="contenu"><?php print $albums[$i]->getTitre(); ?></div>
            </div>
            <div class="album_url"><?php print $albums[$i]->getUrl(); ?></div>
            <div class="album_action">
                <div class="supp_btn">
                    <form class="btn" name="album_supp_form<?php print $i; ?>" method="post" action="<?php print URL_PATH; ?>?page=list_album">
                        <input name="album<?php print $albums[$i]->getId(); ?>" id="album<?php print $albums[$i]->getId(); ?>" type="submit" value=""
                            onClick="confirm('Supprimer l\'album?')" />
                    </form>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="add_album_form">
        <a href="<?php print URL_PATH; ?>?page=f_add_album">Nouvel Album</a>
    </div>
</section>