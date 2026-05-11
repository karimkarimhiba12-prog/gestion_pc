<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin',
            'password' => Hash::make('123456'),
            'role' => 'admin',
            'specialite' => 'IT',
            'disponibilite' => 'Disponible',
            'charge_travail' => 0,
        ]);
    }
}