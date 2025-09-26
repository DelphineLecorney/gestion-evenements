<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <title>Gestion d'Événements</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100">

    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <h1 class="text-4xl font-bold mb-4">🎉 Gestion d'Événements Communautaires</h1>
        <p class="text-lg text-center max-w-xl mb-6">
            Bienvenue sur notre plateforme ! Créez, gérez et participez à des événements locaux.
            Que vous soyez organisateur ou participant, tout est pensé pour vous.
        </p>

        <div class="flex space-x-4">
            <a href="{{ route('login') }}" class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Connexion</a>
            <a href="{{ route('register') }}" class="px-6 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Inscription</a>
        </div>

        <footer class="mt-12 text-sm text-gray-500">
            Projet Laravel 12 avec Breeze – Développé par Delphine 💻
        </footer>
    </div>

</body>
</html>
