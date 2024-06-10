<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = [
            'Books',
            'Movies',
            'Music',
            'Games'
        ];

        foreach ($titles as $title) {
            \App\Models\Category::factory()->title($title)->create();
        }

    }
}
