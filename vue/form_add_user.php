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

<section id="addUser" class="row">
    <div class="col-xs-12 addUserPage">
        <h1> Ajouter un Utilisateur </h1>
        <div class="userInfos">
            Remplissez le formulaire suivant pour ajouter un utilisateur.
        </div>
        <form method="post" action="?page=f_add_user">
            <div class="useradd_line">
                <label for="pseudoUser">Pseudonyme: </label>
                <input type="text" name="pseudoUser" id="pseudoUser" maxlength="100" placeholder="Ex: GuillaumeV" />
            </div>
            <div class="useradd_line">
                <label for="motdepasseUser">Mot de passe: </label>
                <input type="password" name="motdepasseUser" id="motdepasseUser" />
            </div>
            <div class="useradd_line">
                <label for="mailUser">Adresse mail: </label>
                <input type="mail" name="mailUser" id="mailUser" maxlength="255" placeholder="Ex: personne@exemple.com" />
            </div>
            <div class="useradd_line">
                <label for="gradeUser">Grade: </label>
                <select name="gradeUser" id="gradeUser">
                    <?php
                        //listing des options disponibles dans le tableau de grades:
                        for($i=0; $i<sizeof($g); $i++){ ?>
                            <option value="<?php print $g[$i]->getId(); ?>"><?php print $g[$i]->getLibelle(); ?></option>
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
            <input name="userSend" id="userSend" type="submit" value="Ajouter l'utilisateur" />
        </form>
    </div>
</section>
