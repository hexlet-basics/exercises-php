
The [mktime()](https://www.php.net/manual/en/function.mktime.php) function generates timestamp from time information: seconds, hours, minutes, and date.

```
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") ]]]]]] )
```

`mktime()` is a multi-word function, each part of the date and time is passed as a separate parameter.

```php
<?php

mktime(0, 0, 0, 7, 1, 2000); // 962409600
```
