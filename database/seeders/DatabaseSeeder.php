<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Filip',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'role' => 'admin'


        ]);

        $this->call(AdSeeder::class);
        $this->call(CategorySeeder::class);


        \App\Models\User::factory(10)->create();
        \App\Models\Ad::factory(10)->create();

    }
}
