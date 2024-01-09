<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "user" => "kadu",
            "email" => "kadu@gmail.com",
            "password" => Hash::make('123456789'),
        ]);

        User::create([
            "user" => "guibio",
            "email" => "guibio@gmail.com",
            "password" => Hash::make('123456789'),
        ]);

        User::create([
            "user" => "pavas",
            "email" => "pavas@gmail.com",
            "password" => Hash::make('123456789'),
        ]);

        User::create([
            "user" => "kauan",
            "email" => "kauan@gmail.com",
            "password" => Hash::make('123456789'),
        ]);
    }
}

