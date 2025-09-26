<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <title>Gestion d'Événements</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800 dark:bg-gray-900 dark:text-gray-100">
    <div class="min-h-screen flex flex-col items-center justify-center px-4">
        <div class="banner">
            <img src="{{ asset('assets/images/logos/Banner.png') }}" alt="Gestion d'Événements Locaux" class="img-fluid">
        </div>

        <p class="text-lg text-center max-w-xl mb-6">
            Bienvenue sur notre plateforme ! Créez, gérez et participez à des événements locaux.
            Que vous soyez organisateur ou participant, tout est pensé pour vous.
        </p>

        <section class="mt-8 max-w-4xl text-center">
            <h2 class="text-2xl font-bold mb-4">Pourquoi utiliser notre plateforme ?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">📅 Création d’événements</h3>
                    <p>Organisez facilement des événements publics ou privés, avec gestion des inscriptions.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">🌍 Ancrage local</h3>
                    <p>Favorisez les rencontres dans votre quartier ou votre ville, avec une carte interactive.</p>
                </div>
                <div class="bg-white dark:bg-gray-800 p-4 rounded shadow">
                    <h3 class="font-semibold text-lg mb-2">♻️ Événements durables</h3>
                    <p>Valorisez les initiatives écologiques et responsables dans votre communauté.</p>
                </div>
            </div>
        </section>
        <section class="mt-8 max-w-4xl text-center">
            <div class="flex space-x-4">
                <a href="{{ route('login') }}"
                    class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">Connexion</a>
                <a href="{{ route('register') }}"
                    class="px-6 py-2 bg-gray-300 text-gray-800 rounded hover:bg-gray-400">Inscription</a>
            </div>
        </section>
    </div>
    <div class="relative banner">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-2xl font-semibold bg-green-800 bg-opacity-60 px-4 py-2 rounded">
            Ensemble pour des événements durables 🌱
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
