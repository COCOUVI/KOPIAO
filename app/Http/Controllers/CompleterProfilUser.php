<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompleterProfilUser extends Controller
{
public function edit()
{
    $user = Auth::user();

    // Définir les champs à vérifier selon le rôle
    if ($user->role_id == 3) { // Tuteur
        $fields = [
            'firstname',
            'lastname',
            'email',
            'telephone',
            'photo_path',
            'bio',
            'qualifications',
            'subjects',
            'rate_per_hour',
            'availability',
            'city',
        ];
    } elseif ($user->role_id == 2) { // Étudiant
        $fields = [
            'firstname',
            'lastname',
            'email',
            'telephone',
            'photo_path',
            'bio',
            'learning_history',
            'learning_preference',
            'city',
        ];
    } else { // autres rôles
        $fields = [
            'firstname',
            'lastname',
            'email',
            'telephone',
            'photo_path',
            'bio',
            'city',
        ];
    }

    // Calcul du pourcentage complété
    $filled = 0;
    foreach ($fields as $field) {
        if (!empty($user->$field)) {
            $filled++;
        }
    }

    $total = count($fields);
    $profileCompletion = round(($filled / $total) * 100);

    return view('CompleterProfilUser', compact('user', 'profileCompletion'));
}


    public function update(Request $request)
    {
        $user = Auth::user();

        $rules = [
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'telephone' => 'required|string|max:20',
            'birthdate' => 'required|date',
            'city' => 'required|string|max:255',
            'bio' => 'nullable|string|max:1000',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];

        // Règles spécifiques selon le rôle
        if ($user->role_id == 3) { // Tuteur
            $rules['qualifications'] = 'required|string|max:500';
            $rules['subjects'] = 'required|string|max:500';
            $rules['rate_per_hour'] = 'required|numeric|min:0';
        } elseif ($user->role_id == 2) { // Étudiant
            $rules['learning_preference'] = 'required|string|in:En_ligne,présentiel,hybrid';
            $rules['learning_history'] = 'nullable|string|max:1000';
        }

        $validated = $request->validate($rules);

        // Mettre à jour les champs de base
        $user->update([
            'firstname' => $validated['firstname'],
            'lastname' => $validated['lastname'],
            'email' => $validated['email'],
            'telephone' => $validated['telephone'],
            'birthdate' => $validated['birthdate'],
            'city' => $validated['city'],
            'bio' => $validated['bio'] ?? null,
        ]);

        // Gérer l'upload de la photo
        if ($request->hasFile('photo')) {
            if ($user->photo_path) {
                Storage::delete($user->photo_path);
            }
            $path = $request->file('photo')->store('profile-photos', 'public');
            $user->update(['photo_path' => $path]);
        }

        // Mettre à jour les champs spécifiques au rôle
        if ($user->role_id == 3) {
            $user->update([
                'qualifications' => $validated['qualifications'],
                'subjects' => $validated['subjects'],
                'rate_per_hour' => $validated['rate_per_hour'],
            ]);
        } elseif ($user->role_id == 2) {
            $user->update([
                'learning_preference' => $validated['learning_preference'],
                'learning_history' => $validated['learning_history'] ?? null,
            ]);
        }

        return redirect()->route('CompleterProfilUser.edit')->with('success', 'Profil mis à jour avec succès!');
    }
}
