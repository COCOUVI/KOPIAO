<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Récupère toutes les photos dans storage/app/public/profile-photos
        $photos = Storage::disk('public')->allFiles('profile-photos');

        // Vérification de sécurité
        if (empty($photos)) {
            dd("Aucune photo trouvée dans : " . storage_path('app/public/profile-photos'));
        }

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

        for ($i = 0; $i < 15; $i++) {

            $firstname = $firstnames[array_rand($firstnames)];
            $lastname = $lastnames[array_rand($lastnames)];

            User::create([
                'firstname'          => $firstname,
                'lastname'           => $lastname,
                'email'              => strtolower($firstname) . "." . strtolower($lastname) . $i . '@example.com',
                'password'           => Hash::make('password123'),
                'role_id'            => 3,
                'is_active'          => true,
                'subjects'           => json_encode($subjects_list[array_rand($subjects_list)]),
                'city'               => $cities[array_rand($cities)],
                'learning_preference'=> $learning_pref[array_rand($learning_pref)],
                'birthdate'          => fake()->dateTimeBetween('-45 years', '-25 years')->format('Y-m-d'),
                'photo_path'         => 'profile-photos/' . basename($photos[array_rand($photos)]),
            ]);
        }
    }
}
