<?php
    
?>

<section id="contact" class="row">
    <div class="col-xs-12 contactPage">
        <h1> Contact </h1>
        <div class="contactInfos">
            Le formulaire suivant nous sera communiqué par email, nous vous r&eacute;pondrons aussi vite que possible. 
        </div>
        <form method="post" action="?page=contact">
            <p>
                <div class="contact_line">
                    <label for="mail">Votre email pour vous r&eacute;pondre:</label>
                    <input type="mail" name="mail" id="mail" placeholder="Ex: nom.prenom@exemple.com" />
                </div>
                <div class="contact_line">
                    <label for="objet">Objet : </label>
                    <input type="text" name="objet" id="objet" placeholder="Ex: rejoindre le club" maxlength="200" />
                </div>
                <div class="contact_line">
                    <label for="">Message : </label>
                    <textarea name="message" id="message" rows="10" cols="50" resize="none"></textarea>
                </div>
                <input name="mailSend" id="mailSend" type="submit" value="Envoyer" />
            </p>
        </form>
    </div>
</section>