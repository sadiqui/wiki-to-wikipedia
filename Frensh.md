# Projet Wiki

## Contexte du Projet
Wiki a besoin d'un système de gestion de contenu efficace associé à un front-end correspondant pour offrir une expérience utilisateur exceptionnelle.

Ce système devrait permettre aux administrateurs de gérer facilement les catégories, les tags et les wikis, tout en offrant aux auteurs la possibilité de créer, éditer et supprimer leur propre contenu.

Du côté front-end, l'accent sera mis sur une interface conviviale, avec des fonctionnalités telles qu'une inscription simplifiée, une barre de recherche efficace et des affichages dynamiques des derniers wikis et catégories pour une navigation aisée.

L'objectif principal est de créer un espace collaboratif où chacun peut travailler ensemble, créer, trouver et partager des wikis de manière facile et engageante.

## Fonctionnalités Clés

### Back Office

#### Gestion des Catégories (administrateur)

Les administrateurs devraient avoir la capacité de créer, éditer et supprimer des catégories pour organiser le contenu.

Plusieurs wikis devraient pouvoir être associés à une catégorie.

#### Gestion des Tags (administrateur)

Les administrateurs devraient pouvoir créer, éditer et supprimer des tags pour faciliter la recherche et le regroupement du contenu.

Les tags devraient être associés aux wikis pour une navigation plus précise.

#### Inscription des Auteurs

Les auteurs devraient pouvoir s'inscrire sur la plateforme en fournissant des informations de base telles que leur nom, leur adresse e-mail et un mot de passe sécurisé.

#### Gestion des Wikis (auteurs et administrateurs)

Les auteurs devraient avoir la capacité de créer, éditer et supprimer leurs propres wikis.

Les auteurs devraient pouvoir associer une seule catégorie et plusieurs tags à leurs wikis pour faciliter l'organisation et la recherche.

Les administrateurs devraient avoir la possibilité d'archiver les wikis inappropriés pour maintenir un environnement sûr et pertinent.

#### Page d'Accueil du Tableau de Bord

Consultation des statistiques des entités via le tableau de bord.

### Front Office

#### Connexion et Inscription

Les utilisateurs devraient avoir la possibilité de créer un compte (Inscription) en fournissant des informations de base, ainsi que de se connecter (Connexion) à leurs comptes existants. Si l'utilisateur a un rôle d'administrateur, il sera redirigé vers la page du tableau de bord ; sinon, il sera redirigé vers la page d'accueil.

#### Barre de Recherche

Une barre de recherche devrait être disponible pour permettre aux visiteurs de rechercher des wikis, des catégories et des tags sans avoir besoin de rafraîchir la page (utilisation de AJAX).

#### Affichage des Derniers Wikis

La page d'accueil ou une section dédiée devrait afficher les derniers wikis ajoutés à la plateforme, offrant ainsi aux utilisateurs un accès rapide au contenu le plus récent.

#### Affichage des Dernières Catégories

Une section distincte devrait présenter les dernières catégories créées ou mises à jour, permettant aux utilisateurs de découvrir rapidement les thèmes récemment ajoutés à la plateforme.

#### Redirection vers la Page Unique d'un Wiki

En cliquant sur un wiki, les utilisateurs devraient être redirigés vers une page unique dédiée à ce wiki, offrant des détails complets tels que le contenu, les catégories associées, les tags et les informations sur l'auteur.

## Technologies Requises

- Frontend : HTML5, Framework CSS et JavaScript
- Backend : PHP 8 avec une architecture MVC
- Base de données : Driver PDO