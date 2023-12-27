## ¿Qué es una instrucción?

Una **instrucción** es un comando que el intérprete de PHP ejecuta. Está escrita en un lenguaje de programación. Se puede comparar con una instrucción o receta para cocinar un plato:

El código en PHP es un conjunto de instrucciones separadas por el símbolo `;`.

Aquí tienes un ejemplo de código con dos instrucciones:

```php
<?php

print_r('Madre de Dragones. ');
print_r('¡Dracarys!');
// => Madre de Dragones. ¡Dracarys!
```

Al ejecutar este código, se mostrarán en pantalla dos frases consecutivas: `Madre de Dragones. ¡Dracarys!`.

Las instrucciones se pueden escribir una tras otra sin saltar de línea:

```php
<?php

print_r('Madre de Dragones. '); print_r('Dracarys!');
// => Madre de Dragones. ¡Dracarys!
```

El resultado en pantalla será el mismo. Sin embargo, este código es difícil de leer, por lo que las instrucciones se colocan una debajo de la otra.
