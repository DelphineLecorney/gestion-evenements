<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        $adminEmail = env('ADMIN_EMAIL');

        if (!User::where('email', $adminEmail)->exists()) {
            User::create([
                'name' => 'Admin',
                'email' => $adminEmail,
                'password' => Hash::make(env('ADMIN_PASSWORD')),
                'role' => 'admin',
            ]);

            echo "Admin créé avec succès.\n";
        } else {
            echo "L'admin existe déjà. Aucun nouvel utilisateur créé.\n";
        }
    }
}
