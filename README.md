# 🎉 Gestion d'Événements Communautaires

Une application web développée avec **Laravel 12** et **Breeze**, permettant aux utilisateurs de créer, gérer et participer à des événements locaux. Ce projet met en avant l'authentification, les rôles, les relations entre modèles, et une interface claire avec fil d’Ariane.

## 🚀 Fonctionnalités

- Authentification complète (inscription, connexion, déconnexion)
- Dashboard personnalisé selon le rôle (organisateur ou participant)
- Création et gestion d’événements
- Participation à des événements
- Fil d’Ariane dynamique
- Middleware pour sécuriser les routes
- Blade components réutilisables
- Design responsive avec Tailwind CSS

## 🧠 Technologies utilisées

- Laravel 12
- Laravel Breeze
- PHP 8+
- Blade
- Tailwind CSS
- MySQL
- Git & GitHub

## 📦 Installation

```bash
git clone https://github.com/tonpseudo/gestion-evenements.git
cd gestion-evenements
composer install
npm install && npm run dev
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
