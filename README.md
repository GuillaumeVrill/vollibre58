# vollibre58
Dépôt du site vollibre58, club de parapente de Bourgogne


-----------------------------------------------------------------
Fonctions relatives à la base de données qu'il faut créer:
-----------------------------------------------------------------




-----------------------------------------------------------------
            Fonctions aditionnelles à gérer:
-----------------------------------------------------------------

-> ajout des required dans les formulaires
-> créer des boutons pour l'ajout d'événements ou d'alertes pour éviter les liens dans la barre d'administration



-----------------------------------------------------------------
                        SECURITE A GERER:
-----------------------------------------------------------------

-> Créer une fonction de hachage et de salage des mots de passe utilisateur lors de la création et de la connexion d'un utilisateur:
        Dal.php -> connexionMembre() (remplacement de la fonction PASSWORD())
                -> creerMembre()

-> Securiser les variables des formulaires

-> Supprimer les valeurs des tableaux POST et GET des formulaires pour éviter les ré-exécutions de code lors des actualisations de page
    -> ou forcer l'actualisation de la page en JS pour contourner le problème