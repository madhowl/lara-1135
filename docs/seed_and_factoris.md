# Фабрики и сиды

создадим фабрику для модели **Post**:

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->realTextBetween(20,75);
        $slug = Str::slug($title, '-');
        return [
            'title'=>$title,
            'slug' => $slug,
            'category_id'=>rand(1,10),
            'description'=>fake()->realText(250),
            'active'=>1,
            'image'=>fake()->imageUrl(1024,768,'cats'),
            'content'=>fake()->realTextBetween(1500, 5000),
        ];
    }
}
```
создадим фабрику для модели **Category**:

```php
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = fake()->city();
        $slug = Str::slug($title, '-');
        return [
            'title'=>$title,
            'slug'=>$slug,
            'description'=>fake()->realText(250),
            'image'=>fake()->imageUrl(640,480,'cat'),
        ];
    }
}
```
Добавляем сиды в ***database/seeders/DatabaseSeeder.php***:

```php
<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\Category::factory(10)->create();
         \App\Models\Post::factory(1000)->create();
    }
}
```
 Запускаем миграцию:
 ```bash
 php artisan migrate:fresh --seed
 ```
 [К содержанию](../README.md)