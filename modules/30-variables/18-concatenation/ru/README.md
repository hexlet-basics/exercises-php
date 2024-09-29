
Для закрепления предыдущей темы попробуем использовать переменные с конкатенацией. Синтаксически ничего не меняется: мы умеем конкатенировать (склеивать) две строки:

```php
<?php

$what = "Kings" . "road";
print_r($what); // => "Kingsroad"
```

… а значит сумеем конкатенировать строку и одну переменную, в которой записана строка:

```php
<?php

$first = "Kings";
$what = $first . "road";

print_r($what); // => "Kingsroad"
```

… и даже конкатенировать две переменные, в которых записаны строки:

```php
<?php

$first = "Kings";
$last = 'road';

$what = $first . $last;
print_r($what); // => "Kingsroad"
```