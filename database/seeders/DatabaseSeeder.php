<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // tambah 1 data user statik
        User::factory()->create([
            'name' => 'Rizwan Admin',
            'email' => 'rizwan@fic16.com',
            'password' => Hash::make('12345678'),
        ]);

        // tambah 10 data user random
        User::factory(10)->create();
    }
}
