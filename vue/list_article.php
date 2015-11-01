<section id="listArticles" class="row">
    <div class="articleItem articleTemoin">
        <div class="article_id">ID</div>
        <div class="article_titre">TITRE</div>
        <div class="article_date">DATE</div>
        <div class="article_user">MEMBRE</div>
        <div class="article_disposition">DISPOSITION</div>
        <div class="article_action">ACTIONS</div>
    </div>
    <?php for($i=0; $i<sizeof($articles); $i++){ ?>
        <div class="articleItem">
            <div class="article_id"><?php print $articles[$i]->getId(); ?></div>
        <div class="article_titre"><?php print $articles[$i]->getTitre(); ?></div>
        <div class="article_date"><?php print $articles[$i]->getDate(); ?></div>
        <div class="article_user"><?php print $articles[$i]->getIdAuteur(); ?></div>
        <div class="article_disposition"><?php print $articles[$i]->getIdDisposition(); ?></div>
        <div class="article_action">
            action
        </div>
        </div>
    <?php } ?>
    <div class="add_article_form">
        <a href="<?php print URL_PATH; ?>?page=f_add_article">R&eacute;diger un Article</a>
    </div>
</section>