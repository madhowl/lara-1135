# Время чтения поста – расчет и реализация

Иногда, оказывается довольно полезным отображать время чтения какой-либо статьи или текста. Особенно это интересно будет для блогов и новостных сайтов.

Сам подсчет времени чтения — задача простая.

Вики пишет что средняя скорость чтения составляет порядка 200 слов в минуту.

Кто эти средние люди я не знаю но обычные люди читают текст гораздо медленнее 130 - 150 слов в минуту.

При разработке класса для подсчета времени чтения статьи я использовал константное значение, которое равняется 200 словам в минуту. Дополнительно класс вырезает все HTML-теги.

## Код метода вставляем в модель

```php
public function calculateReadingTime($text, $wordsPerMinute = 120)
    {
        // Разделяем текст на отдельные слова
        $word_count = count(
            preg_split('/\W+/u', $text, -1, PREG_SPLIT_NO_EMPTY)
        );
        // Вычисляем ориентировочное время чтения
        $minutes = floor($word_count / $wordsPerMinute);
        $seconds = floor(
            $word_count % $wordsPerMinute / ($wordsPerMinute / 60)
        );
        $str_minutes = ($minutes == 1) ? "мин." : "мин.";
        $str_seconds = ($seconds == 1) ? "сек." : "сек.";
        $readingTime = '';
        if ($minutes == 0) {
            $readingTime .= "$seconds $str_seconds";
        } else {
            $readingTime .= "$minutes $str_minutes $seconds $str_seconds";
        }
        return $readingTime;
    }
```

##  В методе вывода поста получаем время чтения

```php
$readingTime = $post->calculateReadingTime($post->content);
```
### И отправляем в предстовление

```php
return view(
    'frontend.blog-single',
    compact('post', 'categories', 'readingTime')
);
```
### Наслаждаемся результатом. 

![Alt text](image/post_reading_time.png)