# vollibre58
Dépôt de sauvegarde du site vollibre58
Ne pas Commit le fichier "nbproject" généré par netbeans.


-----------------------------------------------------------------
Fonctions relatives à la base de données qu'il faut créer:
-----------------------------------------------------------------

--- FONCTION NAME ---                       Done? (OK)
#ExempleFonction()                          -OK

SupprimerEvent($event_id);                  -OK
SupprimerAlerte($alerte_id);                -OK
SupprimerArticle($article_id);              -OK
SupprimerUtilisateur($user_id);             -OK

recupererTousLesArticles();                 -OK
recupererArticle($article_id);              -OK

recupererTouteslesImages();                 -OK
recupererImagesArticle($article_id);        -OK
recupererAlbums();                          -OK
recupererDispositions();                    -OK
recupererDispositionArticle($article_id);   -OK

editerNews($id);                            -
editerUser($id);                            -


-------------------------------------------------------------------
                            SECURITE:
-------------------------------------------------------------------

-> Créer une fonction de hachage et de salage des mots de passe utilisateur lors de la création et de la connexion d'un utilisateur:
        Dal.php -> connexionMembre() (remplacement de la fonction PASSWORD())
                -> creerMembre()
