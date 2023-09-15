<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    // Define the blueprint for generating user records.
    public function definition()
    {
        return [
            'name' => $this->faker->name, // Generate a random name.
            'email' => $this->faker->unique()->safeEmail, // Generate a unique and valid email address.
            'email_verified_at' => now(), // Set the email verification timestamp to the current time.
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // A hashed password.
            'remember_token' => Str::random(10), // Generate a random "remember me" token.
        ];
    }
}
