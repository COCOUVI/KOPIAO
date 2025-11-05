<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Les champs assignables en masse
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'email_verified_at',
        'password',
        'telephone',
        'photo_path',
        'role_id',
        'is_active',
        'birthdate',
        'remember_token',
        'bio',
        'qualifications',
        'subjects',
        'rate_per_hour',
        'availability',
        'city',
        'learning_history',
        'learning_preference',
        'satisfaction_score',
        'notify_email',
        'notify_push',
    ];

    /**
     * Champs cachés pour sérialisation
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Type des champs
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
}
