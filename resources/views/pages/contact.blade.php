<x-guest-layout> <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200"> Contact </h2>
    </x-slot>
    <div class="p-6 max-w-xl mx-auto text-gray-700 dark:text-gray-300">

        @if (session('success'))
            <x-alert-success :message="session('success')" />
        @endif

        <form method="POST" action="{{ route('contact.send') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block font-medium">Nom</label>
                <input type="text" name="name" id="name" required
                    class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:text-white">
            </div>
            <div>
                <label for="email" class="block font-medium">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:text-white">
            </div>
            <div>
                <label for="message" class="block font-medium">Message</label>
                <textarea name="message" id="message" rows="5" required
                    class="w-full border rounded px-3 py-2 dark:bg-gray-800 dark:text-white">
                </textarea>
            </div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                Envoyer
            </button>
        </form>
</x-guest-layout>
