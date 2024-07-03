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

    /blog (blog.index) : Route pour afficher la liste des articles.
    /blog/new (blog.create) : Route pour afficher le formulaire de création d'un nouvel article.
    /blog/new : Route pour sauvegarder un nouvel article.
    /blog/{post}/edit (blog.edit) : Route pour afficher le formulaire d'édition d'un article existant.
    /blog/{post}/edit : Route pour mettre à jour un article existant.
    /blog/{slug}-{post} (blog.show) : Route pour afficher un article spécifique basé sur son identifiant et son slug.
