Функция [mktime()](https://php.net/manual/ru/function.mktime.php) генерирует _timestamp_ по информации о времени: секундах, часах, минутах и дате:

```bash
mktime(
    int $hour,
    ?int $minute = null,
    ?int $second = null,
    ?int $month = null,
    ?int $day = null,
    ?int $year = null
): int|false
```

`mktime()` — многословная функция, в которой каждая часть даты и времени передается как отдельный параметр:

```php
<?php

mktime(0, 0, 0, 7, 1, 2000); // 962409600
```
