Escribe una función `maskCardNumber()` que oculte el número de una tarjeta bancaria. La función debe reemplazar todos los caracteres de la cadena por `*`, excepto los últimos cuatro.

Ejemplo de funcionamiento:

```php
<?php

maskCardNumber('1234567812345678'); // '************5678'
maskCardNumber('12345678');         // '****5678'
```
