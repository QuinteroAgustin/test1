# RésaVite

Bienvenue dans l'application RésaVite.

## Base de données

La base s'appelle "resavite". Son login est "root" et il n'y a pas de password.

## Login et password

Tous les login ont été créés. Voici la liste.
* bob
* douglas
* jef
* carlos
* marie
* helena
* peter
* olga

Les password sont le login + 31. Par exemple, c'est bob31 pour le login bob.

Enjoy !

Signé : le stagiaire de la compta.

## Correctif appliqué
0- penser a ajouter la nouvelle base de donnée
1- Mise en place d'un htaccess dans params pour interdire d'accèder au contenue du fichier connexion.ini depuis internet
2- changement du type dans la page de connexion pouyr cacher le mot de passe
3- modification de la structure de la base de donnée pour que le hash du mot de passe puisse etre rentrée dans sa totalité.
4- mise en place du hashage du password + modification des mdp dans la bdd
5- Mise en place des check pour créer les réservations
6- on optien maintent l'id user grace à la session donc plus de modif de reservation d'un autre user, et plus la possibilité de voir les réservation des autres users
7- les injection sql pour reserver et les reservation sont stopé
8- Si on n'est pas connecté on ne peux plus accèder au pages ou il faut être membre