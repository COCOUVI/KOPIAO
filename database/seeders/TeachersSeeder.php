<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeachersSeeder extends Seeder
{
    public function run(): void
    {
       
        // Création de l'admin avant les professeurs
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'firstname'             => 'Admin',
                'lastname'              => 'Principal',
                'email'                 => 'admin@gmail.com',
                'email_verified_at'     => now(),
                'password'              => Hash::make('admin1234@'),
                'telephone'             => '+22990000000',
                'photo_path'            => null,
                'role_id'               => 1, // 1 pour admin
                'is_active'             => 1,
                'remember_token'        => Str::random(10),
                'created_at'            => now(),
                'updated_at'            => now(),
                'bio'                   => 'Administrateur principal',
                'qualifications'        => null,
                'subjects'              => null,
                'rate_per_hour'         => null,
                'identity_document_path'=> null,
                'identity_verified'     => 1,
                'availability'          => null,
                'city'                  => 'Cotonou',
                'learning_history'      => null,
                'learning_preference'   => null,
                'satisfaction_score'    => null,
                'notify_email'          => 1,
                'notify_push'           => 1,
                'last_login'            => null,
                'is_valid'              => 1,
            ]);
        }

        // 🔹 Listes de données
        $firstnames = ['Alex', 'Sarah', 'Marc', 'Isabelle', 'Kevin', 'Laura', 'David', 'Chantal', 'Eric', 'Mireille', 'Hugo', 'Fabienne', 'Louis', 'Arielle', 'Thomas'];
        $lastnames = ['Adjaho', 'Kpoton', 'Gandonou', 'Dossou', 'Mensah', 'Ketema', 'Houngbe', 'Assogba', 'Zinsou', 'Tokoudagba', 'Avlessi', 'Ayihoun', 'Dagba', 'Anato', 'Gbèdonou'];
        $cities = ['Cotonou', 'Porto-Novo', 'Abomey-Calavi', 'Bohicon', 'Ouidah'];
        $subjects_list = [
            ['Maths', 'Physics'],
            ['English', 'French'],
            ['Computer Science'],
            ['Biology', 'Chemistry'],
            ['History', 'Geography'],
            ['Philosophy'],
            ['Economics', 'Management']
        ];
        $learning_pref = ['online', 'in_person', 'hybrid'];

        // 🔹 Génération de 15 professeurs aléatoires
        for ($i = 0; $i < 15; $i++) {
            $firstname = $firstnames[array_rand($firstnames)];
            $lastname = $lastnames[array_rand($lastnames)];
            // Génère un email aléatoire et unique
            do {
                $email = strtolower($firstname) . "." . strtolower($lastname) . rand(1000,9999) . '@example.com';
            } while (User::where('email', $email)->exists());

            User::create([
                'firstname'             => $firstname,
                'lastname'              => $lastname,
                'email'                 => $email,
                'email_verified_at'     => now(),
                'password'              => Hash::make('password123'),
                'telephone'             => '+229' . rand(90000000, 99999999),
                'photo_path'            => null, // ou '' si tu préfères une chaîne vide
                'role_id'               => 3,
                'is_active'             => 1,
                'remember_token'        => Str::random(10),
                'created_at'            => now(),
                'updated_at'            => now(),
                'bio'                   => null,
                'qualifications'        => null,
                'subjects'              => json_encode($subjects_list[array_rand($subjects_list)]),
                'rate_per_hour'         => rand(1000, 5000),
                'identity_document_path'=> 'pieceidentite/dummy.pdf',
                'identity_verified'     => 1,
                'availability'          => null,
                'city'                  => $cities[array_rand($cities)],
                'learning_history'      => null,
                'learning_preference'   => $learning_pref[array_rand($learning_pref)],
                'satisfaction_score'    => null,
                'notify_email'          => 1,
                'notify_push'           => 1,
                'last_login'            => null,
                'is_valid'              => 1,
            ]);
        }
    }
}
