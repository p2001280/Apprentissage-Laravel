Installation du Projet
Prérequis

Assurez-vous d'avoir les outils suivants installés sur votre machine :

    PHP >= 7.4
    Composer

Étapes d'installation

    Cloner le dépôt

    sh

git clone https://github.com/votre-utilisateur/votre-projet.git
cd votre-projet

Installer les dépendances PHP avec Composer

sh

composer install

Créer le fichier .env

Copiez le fichier .env.example en .env et configurez vos informations de base de données et autres paramètres nécessaires.

sh

cp .env.example .env

Générer la clé d'application

sh

    php artisan key:generate

Configuration du Débogueur Laravel

Pour utiliser le débogueur Laravel, nous recommandons l'installation de Laravel Debugbar. Suivez les étapes suivantes :

    Ajouter le package avec Composer

    sh

composer require barryvdh/laravel-debugbar --dev

Publier la configuration

sh

    php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"

Utilisation de la Console Laravel

La console Laravel (artisan) est un outil puissant pour exécuter des commandes et gérer l'application. Quelques commandes utiles :

    Lancer le serveur de développement

    sh

php artisan serve

Exécuter les migrations

sh

php artisan migrate

Exécuter les seeders

sh

php artisan db:seed


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
