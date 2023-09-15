<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Define the fillable attributes for mass assignment.
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    // Attributes that should be hidden from JSON responses.
    protected $hidden = [
        'remember_token',
    ];

    // Define data type casting for specific attributes.
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
