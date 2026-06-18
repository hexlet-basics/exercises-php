
Implementa la función `normalizeFilename()`, que prepara el nombre de un archivo para guardarlo. La función recibe una cadena y devuelve una nueva cadena en la que todos los espacios se reemplazan por el carácter `_`.

Ejemplo de llamada:

```php
<?php

normalizeFilename('my photo.png');      // 'my_photo.png'
normalizeFilename('final report.pdf');  // 'final_report.pdf'
normalizeFilename('already_ready.txt'); // 'already_ready.txt'
```
