<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use function Pest\Laravel\call;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       
        Role::create([
            'id'=>1,
            'name'=>'admin'
        ]);
        Role::create([
            'id'=>2,
            'name'=>'editor'
        ]);
        Role::create([
            'id'=>3,
            'name'=>'viewer'
        ]);

         // User::factory(10)->create();
        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'test@example.com',
            'password' => 'test@example.com',
            'role_id'=>1
        ]);
    }
}
