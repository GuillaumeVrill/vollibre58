<?php
    // récupération des grades de la base de données:
    $grades = recupererTousLesGrades();
    $g = array();
    // grade: 3=membre, 2=redacteur, 1=moderateur, 0=administrateur (/!\ =/= getId() /!\)
    $g[0] = $grades[3];
    $g[1] = $grades[2];
    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id']) && $_SESSION['user_right'] == "1"){
        $g[2] = $grades[1];
    }
?>
<section id="editUser" class="row">
    <div class="col-xs-12 editUserPage">
        <h1> Editer un Utilisateur </h1>
        <?php if($error): ?>
            <div class="userInfos">
                La page contient une erreur, retournez dans <a href="<?php print URL_PATH; ?>?page=list_user">la liste des utilisateurs</a>, et recommencez la procédure d'édition.
            </div>
        <?php elseif(!$error): ?>
            <div class="userInfos">
                Modifier les parties du formulaire suivant pour &eacute;diter l'utilisateur:
            </div>
            <form method="post" action="?page=f_edit_user">
                <input type="hidden" name="actUser" id="actUser" value="<?php print $user->getId(); ?>" />
                <div class="useredit_line">
                    <label for="pseudoUser">Pseudonyme: </label>
                    <input type="text" name="pseudoUser" id="pseudoUser" maxlength="100" value="<?php print $user->getPseudo(); ?>" required />
                </div>
                <div class="useredit_line">
                    <label for="motdepasseUser">Mot de passe: </label>
                    <input type="password" name="motdepasseUser" id="motdepasseUser" required />
                </div>
                <div class="useredit_line">
                    <label for="mailUser">Adresse mail: </label>
                    <input type="mail" name="mailUser" id="mailUser" maxlength="255" value="<?php print $user->getEmail(); ?>" required />
                </div>
                <div class="useredit_line">
                    <label for="gradeUser">Grade: </label>
                    <select name="gradeUser" id="gradeUser">
                        <?php
                            //listing des options disponibles dans le tableau de grades:
                            for($i=0; $i<sizeof($g); $i++){ ?>
                                <option value="<?php print $g[$i]->getId(); ?>" <?php if($g[$i]->getId() == $user->getIdGrade()): ?>selected<?php endif; ?>>
                                    <?php print $g[$i]->getLibelle(); ?>
                                </option>
                            <?php }
                        ?>
                    </select>
                </div>
                <div>
                    <p>
                        <strong>Rappel des droits disponibles selon le grade choisi:</strong><br />
                        <strong>Membre:</strong> envoyer des messages priv&eacute;s aux autres membres <br />
                        <strong>R&eacute;dacteur:</strong> droits du membre, r&eacute;diger des articles <br />
                        <strong>Mod&eacute;rateur:</strong> droits du r&eacute;dacteur, gestion des articles et des utilisateurs <br />
                    </p>
                </div>
                <input name="userEdit" id="userEdit" type="submit" value="Editer l'utilisateur" />
            </form>
        <?php endif; ?>
    </div>
</section>

