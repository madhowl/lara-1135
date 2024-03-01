<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Category::factory(10)->create();
        $this->command->info('Категории созданы...');
        $this->call(TagSeeder::class);
        $this->command->info('Тэги выгружены...');
        \App\Models\Post::factory(1000)->create();
        $this->command->info('Посты сгенерированы...');
        \App\Models\Post::all()->each(
            function ($post) {
                $tags = Tag::all();
                $post->tags()->saveMany($tags->random(random_int(0, 4)));
            }
        );
        $this->command->info('Добавлены тэги к постам.');
        $this->command->info('Работа выполнена ;)');


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
