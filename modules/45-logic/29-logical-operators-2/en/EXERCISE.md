
Write a function `isNeutralSoldier()`, that takes two arguments as input:

1. Armor color (string). Possible variants: `red`, `yellow`, `black`.
2. Shield color (string). Possible variants: `red`, `yellow`, `black`.

The function returns `true` if *the color of the armor is not red and the color of the shield is black*. In other cases, it returns `false`.

Call examples:

```php
<?php

isNeutralSoldier('yellow', 'black'); // true
isNeutralSoldier('red', 'black');    // false
isNeutralSoldier('red', 'red');      // false
```
