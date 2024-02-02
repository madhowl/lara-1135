# Создание моделей и миграций

Создадим модель и миграцию для **категорий**:

```bash
php artisan make:model Category -m
```
В миграции опишем структуру нашей таблицы ***categories***:

```php
public function up(): void
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }
```

Создадим модель и миграцию для **постов**:
```bash
php artisan make:model Post -m
```
Опишем структуру таблицы ***posts***:

```php
public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->text('description');
            $table->integer('active')->default(1);
            $table->string('image')->nullable();
            $table->text('content');
            $table->integer('view_count')->default(0);
            $table->timestamps();
        });
    }
```
[К содержанию](../README.md)