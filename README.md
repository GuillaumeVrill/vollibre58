# vollibre58
Dépôt du site vollibre58, club de parapente de Bourgogne

Le site web a été réalisé à la main (et non les pieds) par Guillaume Vrilliaux et Sebastien Lenhartova.
Il reste certainement des améliorations à faire, et "oui" nous aurions pu utiliser un CMS, mais l'idée était également 
de mettre en pratique nos compétence en développement web. 
D'où le choix de développer le site complètement. 

Le site internet présente notre club aux externes, et permet de nous contacter. Il dispose d'une interface d'administration pour permttre aux personnes identifiées 
d'interagir avec le site pour publier des articles, gérer les utilisateurs, ou encore proposer des événements ou des alertes. 

Pour fonctionner, il faut la base de données qui va bien (dont je suis le propriétaire, sinon c'est trop facile :p ).


-------------------------------------- ESPACE DEVELOPPEUR ------------------------------------------


-----------------------------------------------------------------
Fonctions relatives à la base de données qu'il faut créer:
-----------------------------------------------------------------

-> surveiller les encodages (utf8) chez l'hébergeur (actuellement free)
-> voir si c'est possible de supprimer les événements et alertes trop ancien(ne)s automatiquement dans la base, à intervalle régulier


-----------------------------------------------------------------
                        SECURITE A GERER:
-----------------------------------------------------------------
-> Securiser les variables des formulaires

-> Supprimer les valeurs des tableaux POST et GET des formulaires pour éviter les ré-exécutions de code lors des actualisations de page
    -> ou forcer l'actualisation de la page en JS pour contourner le problème