<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories[] = [
            'name' => 'Object Oriented Programming',
            'alias' => 'oop',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'Programming',
            'alias' => 'programming',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'PHP',
            'alias' => 'php',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'Java',
            'alias' => 'java',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'Python',
            'alias' => 'python',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'Web Frontend',
            'alias' => 'web_frontend',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        $categories[] = [
            'name' => 'Miscellaneous',
            'alias' => 'misc',
            'created_at' => now(),
            'updated_at' => now(),
        ];

        \App\Models\Category::insert($categories);
    }
}
