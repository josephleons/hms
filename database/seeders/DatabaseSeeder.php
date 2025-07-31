<?php

namespace Database\Seeders;

use App\Models\Hospital;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create([
            'id' => 1,
            'name' => 'admin',
        ]);
        Role::create([
            'id' => 2,
            'name' => 'doctor',
        ]);
        Role::create([
            'id' => 3,
            'name' => 'patient',
        ]);

        Hospital::create([
            'id' => 1,
            'name' => 'Muhimbil Hospital'
        ]);

        Hospital::create([
            'id' => 2,
            'name' => 'ALRAHMAH HOSPITAL'
        ]);

        Hospital::create([
            'id' => 3,
            'name' => 'MOROGORO HOSPITAL'
        ]);
        User::create([
            'id' => 1,
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('0000'),
            'contact' => '072639282730',
            'role_id' => 1
        ]);
        User::create([
            'id' => 2,
            'name' => 'Doctor Masalu',
            'username' => 'doctor',
            'email' => 'masaludoctor@gmail.com',
            'password' => Hash::make('0000'),
            'contact' => '0726392878',
            'role_id' => 2
        ]);
        User::create([
            'id' => 3,
            'name' => 'Kusaga Patient',
            'username' => 'patient',
            'email' => 'patient@gmail.com',
            'password' => Hash::make('0000'),
            'contact' => '0786978630',
            'role_id' => 3
        ]);
    }
}