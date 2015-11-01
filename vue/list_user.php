<section id="listUsers" class="row">
    <div class="userItem userTemoin">
        <div class="user_id">ID</div>
        <div class="user_pseudo">PSEUDONYME</div>
        <div class="user_mail">EMAIL</div>
        <div class="user_idGrade">ID GRADE</div>
        <div class="user_action">ACTIONS</div>
    </div>
    <?php for($i=0; $i<sizeof($users); $i++){ ?>
        <div class="userItem">
            <div class="user_id"><?php print $users[$i]->getId(); ?></div>
            <div class="user_pseudo"><?php print $users[$i]->getPseudo(); ?></div>
            <div class="user_mail"><?php print $users[$i]->getEMail() ?></div>
            <div class="user_idGrade"><?php print $users[$i]->getIdGrade(); ?></div>
            <div class="user_action">
                action
            </div>
        </div>
    <?php } ?>
    <div class="add_user_form">
        <a href="<?php print URL_PATH; ?>?page=f_add_user">Nouveau Membre</a>
    </div>
</section>