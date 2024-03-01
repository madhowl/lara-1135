<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Laravel',
                'slug' => 'laravel',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'PHP',
                'slug' => 'php',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Уроки',
                'slug' => 'lessons',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'SQL',
                'slug' => 'sql',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Linux',
                'slug' => 'linux',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'JavaScript',
                'slug' => 'javascript',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Bash',
                'slug' => 'bash',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Новости',
                'slug' => 'news',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Заметки',
                'slug' => 'must-have',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        Tag::insert($data);
    }
}
