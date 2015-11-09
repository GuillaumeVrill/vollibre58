<section id="listUsers" class="row">
    <div class="userItem userTemoin">
        <div class="user_id">ID</div>
        <div class="user_pseudo">PSEUDONYME</div>
        <div class="user_mail">EMAIL</div>
        <div class="user_idGrade">ID GRADE</div>
        <div class="user_action">ACTIONS</div>
    </div>
    <?php for($i=0; $i<sizeof($users); $i++){ ?>
        <!-- on affiche jamais l'administrateur, il ne peut etre supprimer de la liste -->
        <?php if($users[$i]->getId() != 1): ?>
            <div class="userItem">
                <div class="user_id"><?php print $users[$i]->getId(); ?></div>
                <div class="user_pseudo">
                    <div class="contenu"><?php print $users[$i]->getPseudo(); ?></div>
                </div>
                <div class="user_mail"><?php print $users[$i]->getEMail(); ?></div>
                <div class="user_idGrade"><?php print $users[$i]->getIdGrade(); ?></div>
                <div class="user_action">
                    <div class="supp_btn">
                        <form class="btn" name="user_supp_form<?php print $i; ?>" method="post" action="<?php print URL_PATH; ?>?page=list_user">
                            <input name="user<?php print $users[$i]->getId(); ?>" id="user<?php print $users[$i]->getId(); ?>" type="submit" value=""
                                onClick="confirm('Supprimer l\'utilisateur?')" />
                        </form>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php } ?>
    <div class="add_user_form">
        <a href="<?php print URL_PATH; ?>?page=f_add_user">Nouveau Membre</a>
    </div>
</section>