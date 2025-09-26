<footer class="bg-gray-200 dark:bg-gray-800 text-center py-4 mt-12 w-full">
    <div class="text-sm text-gray-700 dark:text-gray-300">
        &copy; {{ date('Y') }} gestion-evenements. Tous droits réservés.
        <div class="mt-2 space-x-4">
            <a href="{{ route('legal') }}" class="underline hover:text-green-600">Mentions légales</a>
            <a href="{{ route('contact') }}" class="underline hover:text-green-600">Contact</a>
        </div>
    </div>
</footer>
