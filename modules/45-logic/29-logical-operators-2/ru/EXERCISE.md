
Напишите функцию `isNeutralSoldier()`, которая принимает на вход два аргумента:

1. Цвет доспехов (строка). Возможные варианты: `red`, `yellow`, `black`.
2. Цвет щита (строка). Возможные варианты: `red`, `yellow`, `black`.

Функция возвращает `true` если *цвет доспехов не красный* и *цвет щита чёрный*. В остальных случаях возвращает `false`.

Примеры вызова:

```php
<?php

isNeutralSoldier('yellow', 'black'); // true
isNeutralSoldier('red', 'black');    // false
isNeutralSoldier('red', 'red');      // false
```
