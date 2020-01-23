# Project Biblio

Le site web d'une bibliothèque imaginaire.
http://note.ly/kazanye

## Gestion d'une bibliothèque

Vous devez réaliser le système de gestion d’une bibliothèque universitaire selon les spécifications ci-dessous. 

## Cahier des charges

- Dans cette bibliothèque on trouve deux types d’ouvrages accessibles aux usagers : des livres et des revues périodiques. Ces derniers ne seront pas gérés par le système informatique et ne seront consultables que sur place. 
 
- A tout ouvrage sera attribué un numéro d’identification qui devra être unique. 
 
- La bibliothèque est dirigée par une ou un bibliothécaire qui aura en charge la gestion des ouvrages et des usagers. 
 
    - Possibilité de rentrer un nouvel ouvrage ou d’en sortir un de la bibliothèque à condition qu’il ne soit pas emprunté par un usager.

    - Gestion des usagers en création, renouvellement et suppression s’il n’a pas d’emprunt en cours ou si sa date de fin d’adhésion est dépassée.

    - Possibilité de visualiser la liste des usagers qui ont dépassé la date de retour d’un l’ouvrage emprunté afin de pouvoir faire une relance téléphonique ou par sms. 
 
- La bibliothèque est accessible par deux types d’usagers : les professeurs et les étudiants. Pour pouvoir effectuer un emprunt il faut que l’usager s’inscrive auprès de la bibliothécaire.  
 
- La fiche d’un usager contient les informations suivantes : nom, prénom, adresse, numéro de téléphone, email, catégorie (étudiant ou professeur). 
 
- Une fois inscrit, l’usager se verra remettre une carte qui l’identifie de façon unique. Cet identifiant sera constitué par la concaténation des trois premiers caractères de son nom, des trois premiers caractères de son prénom  et d’un numéro d’ordre à trois chiffres. La carte est délivrée pour un an. 
 
- Les droits d’emprunt sont fonction de la catégorie de l’usager. Les professeurs peuvent emprunter jusqu’à 8 livres pendant 4 semaines alors que les étudiants ne peuvent emprunter que 3 livres pour une période de 2 semaines. 
 
- Si un ouvrage demandé n’est pas physiquement présent à la bibliothèque l’usager a la possibilité de faire une réservation. Cette réservation pourra s’effectuer à partir du portail web de la bibliothèque. Pour cela, l’usager devra être identifié en saisissant son nom et son numéro de carte. Lors du retour de l’ouvrage à la bibliothèque, l’usager sera averti par la bibliothécaire de sa disponibilité. Il dispose alors d’une semaine pour venir retirer ce dernier. Au-delà de ce délai, la réservation n’est plus valide. Il peut aussi annuler une réservation d’un ouvrage. 
 
- Les informations (notice) sur un ouvrage seront les suivantes : auteurs, titre, éditeur, collection, date de parution, thème, disponibilité (présent, emprunté, réservé ou supprimé). 
 
- A partir du portail web, toute personne devra pouvoir effectuer une recherche d’ouvrage sans être identifiée donc usager (il est simple invité). Cette recherche peut s’effectuer sur différents critères tels que l’auteur, l’éditeur, le titre, un thème.  titre, le ou les auteurs, l’éditeur, sa date de parution et sa disponibilité.  L’internaute aura la possibilité de mettre l’ouvrage trouvé dans un « panier » qu’il pourra gérer par la suite. Lors de la gestion de ce panier, il pourra supprimer des ouvrages du panier et s’il est un usager inscrit faire une réservation d’un ouvrage qui serait indisponible. Dans tous les cas, la possibilité de sauvegarder le panier au format PDF lui sera offerte. 
 
- Un usager identifié sur le site peut obtenir l’état de son compte c'est-àdire connaître les ouvrages qu’il a emprunté, ceux qu’il a réservé et ses données personnelles (nom, prénom, numéro de carte, date de validité, mail, téléphone). Il doit avoir la possibilité de modifier son mail et son numéro de téléphone de ses informations personnelles. 
 
- Afin de vérifier l’activité de son fond bibliothécaire, le ou la bibliothécaire disposera de statistiques  sur le nombre d’emprunt par ouvrage. Si sur une année un ouvrage est peu emprunté, il ou elle peut décider de le sortir du fond (la disponibilité de l’ouvrage passe à supprimé).

## Vous concevrez
 
 - Soit une application unique : Les options des menus devront être dynamiques en fonction de l’utilisateur connecté (bibliothécaire, usager, invité). 
 
 - Soit deux applications distinctes : Le portail web pour les usagers et les invités « front office » et l’application pour la ou le bibliothécaire « back office »). 
 
La charte graphique reste libre. 
 
Le client reste à votre disposition.

## Travail à réaliser
 
Faire la maquette de l’application d’un des points de vue suivants : 
 
- du point de vue du ou de la bibliothécaire : 
 
    - La gestion des ouvrages
    - La gestion des usagés
    - La gestion des emprunts
    - La gestion des retours et des réservations
    - La visualisation des statistiques 
 
- du point de vue de l’usager 
 
    - La recherche d’ouvrages
    - La gestion du panier
    - La réservation d’un ouvrage
    - La gestion de son compte 
 
- du point de vue de l’invité 
 
    - La recherche d’ouvrages
    - La gestion du panier 