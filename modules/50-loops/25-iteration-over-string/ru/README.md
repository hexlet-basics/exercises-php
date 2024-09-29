Циклы подходят не только для обработки чисел, но и при работе со строками — и это благодаря возможности получить конкретный символ по его индексу. Ниже пример кода, который распечатывает буквы каждого слова на отдельной строке:

```php
<?php

function printNameBySymbol($name)
{
    $i = 0;
    // Такая проверка будет выполняться до конца строки,
    // включает последний символ
    // Его индекс — `длина строки - 1`
    while ($i < strlen($name)) {
        // Обращаемся к символу по индексу
        print_r("$name[$i]\n");
        $i = $i + 1;
    }
}

$name = 'Arya';
printNameBySymbol($name);
// => 'A'
// => 'r'
// => 'y'
// => 'a'
```

https://replit.com/@hexlet/php-basics-loops-using-printnamebysymbol

Самое главное в этом коде — поставить правильное условие в `while`. Это можно сделать сразу двумя способами:

* `$i < strlen($name)`
* `$i <= strlen($name) - 1`

Оба способа приводят к одному результату.