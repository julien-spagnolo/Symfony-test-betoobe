# Symfony-test-betoobe


## Les fonctionnalités attendues sont les suivantes :

* Les utilisateurs peuvent s'inscrire depuis la page d'accueil du site. Ils doivent fournir :
    * Leur nom et prénom
    * Leur adresse mail
    * Leur date de naissance
* Un administrateur doit pouvoir valider les inscription (activation de compte)
* Une fois le compte validé, les utilisateurs peuvent :
    * Choisir une activité et s'y inscrire
    * Voir la liste des activités auxquelles ils participent
    * Se désinscrire d’une des activités
* Une activité se définie par :
    * Un nom
    * Une date de début et de fin
    * Un âge minimum pour participer
    * Un nombre maximum de participant
* L'administrateur doit pouvoir suivre les activités : nombre de participants...
 

Quelques précisions :

* La partie "utilisateur" (à minima) doit faire appel à de l'AJAX pour ne pas rafraichir la page à chaque action (soumission de formulaire...)
* La base de données doit être Mysql
* Pas de notification par mail à prévoir


## Ma réalistation :

* Les utilisateurs peuvent s'inscrire depuis la page d'accueil du site. Ils doivent fournir :
    * Leur nom et prénom (fait)
    * Leur adresse mail (fait)
    * Leur date de naissance (fait mais un bug est présent ou les dates ne vont pas en dessus de 2015 il me semble que c'est connu de symfony je n'ai pas eu le temps de retrouver l'info pour débloquer la chose)
* Un administrateur doit pouvoir valider les inscription (activation de compte) (fait via la route /admin on peut passer un utilisateur en bloqué ou débloqué)
* Une fois le compte validé, les utilisateurs peuvent : (la condition n'est pas présente dans le cas ou l'utilisateur est validé. Il n'apparait pas dans la liste)
    * Choisir une activité et s'y inscrire (possible en édition du coup)
    * Voir la liste des activités auxquelles ils participent (fait en visualisation de l'utilisateur)
    * Se désinscrire d’une des activités (possible en édition utilisateur)
* Une activité se définie par :
    * Un nom (fait)
    * Une date de début et de fin (fait)
    * Un âge minimum pour participer (fait)
    * Un nombre maximum de participant (fait)
* L'administrateur doit pouvoir suivre les activités : nombre de participants.. (fait).