Con el tiempo, los valores de las variables pueden cambiar dentro de un programa:

```php
<?php

// greeting - se traduce como saludo
$greeting = '¡Padre!';
print_r($greeting); // => ¡Padre!

$greeting = '¡Madre!';
print_r($greeting); // => ¡Madre!
```

El nombre se mantiene igual, pero los datos internos cambian. Las variables en PHP no requieren una declaración especial. En su lugar, la variable se declara cuando se utiliza por primera vez en el programa.

Nunca se puede estar seguro de lo que está almacenado dentro de una variable. Para estar tranquilo, es necesario analizar el código que se encuentra antes de la variable. Esto es lo que hacen los desarrolladores durante la depuración, cuando intentan entender por qué el programa no funciona o no funciona como se esperaba.

Las variables no cambian con frecuencia. Por lo general, se utilizan para almacenar información.
