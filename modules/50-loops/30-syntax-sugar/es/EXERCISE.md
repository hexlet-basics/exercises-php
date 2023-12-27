
Implementa la función `filterString()`, que recibe una cadena y un carácter, y devuelve una nueva cadena en la que se elimina el carácter pasado en todas sus posiciones.

```php
<?php

$str = 'If I look back I am lost';
filterString($str, 'I'); // 'f  look back  am lost'
filterString($str, 'o'); // 'If I lk back I am lst'
```
