Architecture du Projet Laravel
Introduction

Ce document fournit une vue d'ensemble de l'architecture de notre projet Laravel. Il est destiné à aider les nouveaux développeurs à comprendre la structure du projet et ses composants principaux.
Structure du Projet
Vue d'ensemble des Dossiers

Le projet Laravel suit une structure standard. Voici un aperçu des principaux dossiers et de leurs rôles :

    app/: Contient le code principal de l'application.
        Http/: Contrôleurs et middlewares.
        Models/: Modèles de données.

    bootstrap/: Initialisation du framework.

    config/: Fichiers de configuration.

    database/: Gestion de la base de données.
        migrations/: Fichiers de migration de la base de données.
        seeders/: Fichiers pour peupler la base de données.

    public/: Point d'entrée des requêtes et assets publics (images, JavaScript, CSS).

    resources/: Vues et assets (CSS, JavaScript).
        views/: Templates de vue.

    routes/: Définitions des routes.
    
BlogController

Le BlogController est responsable de la gestion des actions liées au blog. Il contient les méthodes suivantes :

    create(): Affiche le formulaire de création d'un nouvel article.
    store(): Sauvegarde un nouvel article dans la base de données.
    index(): Affiche la liste des articles de blog.
    edit(): Affiche le formulaire d'édition pour un article existant.
    update(): Met à jour un article existant dans la base de données.
    show(): Affiche un article spécifique basé sur son identifiant et son slug.

Routes

Le fichier routes/web.php définit les routes pour l'application. Les principales routes pour le blog incluent :

    Afficher la liste des articles.
    Afficher le formulaire de création d'un nouvel article.
    Sauvegarder un nouvel article.
    Afficher le formulaire d'édition d'un article existant.
    Mettre à jour un article existant.
    Afficher un article spécifique basé sur son identifiant et son slug.
