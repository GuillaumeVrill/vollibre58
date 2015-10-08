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


NOTES: Pour la recupération d'un article ou de tous les articles, on récupèrera également les images de chaque article, il peut en posséder 1, 2, ou 3.
Le tableau de retour pour l'ensemble des articles pourra ressembler à ça:
//--- $article[indice][colonneBDD][indice-secondaire-eventuel] = valeur; ---//
$article[0]['id'] = "1";
$article[0]['txt1'] = "blablabla";
$article[0]['txt2'] = "blabla";
$article[0]['disposition'] = "4"; //correspond à la disposition avec 2 textes et 2 images.
$article[0]['img'][0] = "http://site-hebergement.fr/mon-image.png";
$article[0]['img'][1] = "http://site-hebergement.fr/mon-image2.JPG";
$article[1]['id'] = "2";
$article[1]['txt1'] = "blablablabla";
$article[1]['txt2'] = "blablablablablabla";
$article[1]['disposition'] = "1"; //correspond à la disposition standart avec 2 textes et une image
$article[1]['img'][0] = "http://site-hebergement.fr/mon-image3.jpg";
//etc.