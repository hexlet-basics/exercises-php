Агрегация применяется не только к числам, но и к строкам. Это такие задачи, в которых строка формируется динамически — то есть заранее неизвестно, какого она размера и что будет содержать.

Представьте себе функцию, которая умеет умножать строку, то есть повторять ее указанное количество раз:

```php
<?php

repeat('hexlet', 3); // 'hexlethexlethexlet'
```

Принцип работы этой функции довольно простой — в цикле происходит «наращивание» строки указанное количество раз:

```php
<?php

function repeat($text, $times)
{
    // Нейтральный элемент для строк – пустая строка
    $result = '';
    $i = 1;

    while ($i <= $times) {
        // Каждый раз добавляем строку к результату
        $result = "{$result}{$text}";
        $i = $i + 1;
    }

    return $result;
}
```

Распишем выполнение этого кода по шагам:

```php
<?php

// Для вызова repeat('hexlet', 3);
$result = '';
$result = "{$result}hexlet"; // hexlet
$result = "{$result}hexlet"; // hexlethexlet
$result = "{$result}hexlet"; // hexlethexlethexlet
```
