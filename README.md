# vollibre58
Dépôt du site vollibre58, club de parapente de Bourgogne

Le site web a été réalisé à la main (et non les pieds) par Guillaume Vrilliaux et Sebastien Lenhartova.
Il reste certainement des améliorations à faire, et "oui" nous aurions pu utiliser un CMS, mais l'idée était également 
de mettre en pratique nos compétence en développement web afin de s'améliorer.
D'où le choix de développer le site complètement. 

Le site internet présente notre club aux externes, et permet de nous contacter. Il dispose d'une interface d'administration pour permttre aux personnes identifiées 
d'interagir avec le site pour publier des articles, gérer les utilisateurs, ou encore proposer des événements ou des alertes. 

Pour fonctionner, il faut la base de données qui va bien, dont la structure est disponible dans le dossier BDD. Un compte admin est créé de base avec comme pseudos:
"admin" et mot de passe "admin". Cela vous permettra ensuite de l'éditer et de créer de nouveaux utilisateur.


HEBERGEMENT:

Le site est hebergé chez free, ce qui a nécessité un certain "bricolage", dont les points suivants:
- sécurité des mots de passe (nous voulions utiliser des méthodes modernes de haschage et de salage, mais elles ne sont pas supportés,
et aux vuex de la fréquentation du site (faible), nous avons choisi de rester sur du md5).
- PDO: il existe dans la version de PHP, mais n'est pas supporté avec l'utilisation de MySQL. Pour contourner ce problème, nous 
avons utilisé une libraire "PDO" renommée "PDO2" dans le projet, qui permet d'utiliser cette technologie dans des versions plus 
anciennes de PHP, comme c'est le cas pour l'hébergement chez free. 
- Certaines fonctions PHP ne sont pas supportées ou ne fonctionnent pas de la même façon que dans les versions récentes de PHP, il est 
donc normal de trouver certains points de développement assez étrange. 
- La page "Pioupiou.php" permet de récupérer des informations depuis une balise météo, en utilisant "curl" pour récupérer ces données à distance 
sur les serveurs de Pioupiou. Cependant, curl à été bloqué par free pour des raisons de surfréquentations, et les autres fonctions permettant 
la récupération de données distantes ont également été bloquées. Cela fonctionne donc en local, mais cela a été masqué sur le serveur. 
La page est donc inactive, il faut décommenter son "require_once()" dans le fichier "corps_accueil.php". 


Ce que nous pourrions améliorer:

- Le fichier "Dal.php" contient toutes les fonctions relatives à la manipulation de la BDD.
Il aurait pu être intéressant de créer des managers indépendant pour chaques objet.
- Les vues contiennetn parfois trop de php. Il serait interessant de les optimiser en isolant le php et en le plaçant dans le controleur 
correspondant, afin de ne garder dans les vues que du HTML et ainsi avoir un template à part entière. 
- Le controleur principal appelle le controleur correspondant lors de changement d'URL, et les controleurs secondaires récupèrent les informations 
et appellent la vue et sa mise en page. Le processus peut certainement être optimisé d'une autre façon. 
- Le comportement sous mobile est perturbé par le diaporama, et recharge la page de façon récurente. Il faudrait améliorer ce comportement en priorité. 


INSTALLATION:

- Mettre en place un virtual Host pour le site
- Créer la base de données "vollibre58"
- Créer les tables et le contenu de base nécessaire au fonctionnement, grâce au fichier "BDD/vollibre58.sql"
- En cas de changement du nom, modifier le fichier de configuration "conf/configBDD" (également vrai dans le cas d'une installation sur serveurs réelles, les adresses doivent être adaptés)
- Ensuite, il reste à accéder au site via un navigateur. 

- Les identifiants par défauts sont:
login: admin
passwd: admin

- Lors de la connexion, il faut commencer par changer le mot de passe administrateur.