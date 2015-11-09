<section id="listMessages" class="row">
    <div class="msgItem msgTemoin">
        <div class="msg_id">ID</div>
        <div class="msg_objet">OBJET</div>
        <div class="msg_mail">MAIL DESTINATAIRE</div>
        <div class="msg_action">ACTION</div>
    </div>
    <?php for($i=0; $i<sizeof($msgs); $i++){ ?>
        <div class="msgItem">
            <div class="msg_id"><?php print $msgs[$i]->getId(); ?></div>
            <div class="msg_objet"><?php print $msgs[$i]->getObjet(); ?></div>
            <div class="msg_mail">
                <div class="contenu"><?php print $msgs[$i]->getMailDest(); ?></div>
            </div>
            <div class="msg_action">
                <div class="supp_btn">
                    <form class="btn" name="message_supp_form<?php print $i; ?>" method="post" action="<?php print URL_PATH; ?>?page=list_msg_contact">
                        <input name="message<?php print $msgs[$i]->getId(); ?>" id="message<?php print $msgs[$i]->getId(); ?>" type="submit" value=""
                            onClick="confirm('Supprimer le message?')" />
                    </form>
                </div>
            </div>
        </div>
        <div class="msgItem">
            <div class="msg_message"><?php print $msgs[$i]->getMessage(); ?></div>
        </div>
    <?php } ?>
</section>