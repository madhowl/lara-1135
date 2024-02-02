# Автоматическое увеличение счётчика просмотров через Event (События)

## Создаём событие

```bash
php artisan make:event PostShow
```

### Код события

```php
    public Post $post;

    /**
     * Create a new event instance.
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }
```

## Создаём слушателя

```bash
php artisan make:listener IncrementVisitCountInPost
```

### Код слушателя

```php
class IncrementVisitCountInPost
{
    public function handle(PostShow $event): void
    {
        $event->post->increment('view_count');
    }
}
```

## В провайдере EventServiceProvider регестрируем событие

```php
PostShow::class =>[
            IncrementVisitCountInPost::class
        ]
```

## В методе отоброжения поста вызываем событие

```php
PostShow::dispatch($post);
```

### Получаем + к интелекту и карме ;)

[К содержанию](../README.md)
