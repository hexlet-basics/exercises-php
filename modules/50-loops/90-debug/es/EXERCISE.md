
Implementa una función `compress()` que comprima una cadena con el método RLE (Run-Length Encoding).

El algoritmo: si un carácter se repite varias veces seguidas, se sustituye por el carácter y el número de repeticiones. Los caracteres únicos se escriben sin cifra.

Ejemplos:

```php
<?php

compress('aaabcccc'); // 'a3bc4'
compress('abcd');     // 'abcd'
compress('aabbaa');   // 'a2b2a2'
compress('');         // ''
```

Este algoritmo se usa en formatos reales de compresión de datos — por ejemplo, en los antiguos protocolos de fax y en los archivos BMP.

### Algoritmo

1. Recorrer la cadena contando el número de caracteres idénticos seguidos
2. En cuanto el carácter cambie — escribir el carácter anterior y el contador (si es mayor que 1)
3. No olvidar procesar el último grupo después de terminar el bucle
