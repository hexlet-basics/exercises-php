A nivel básico, las computadoras operan solo con números. Para sumar dos números en matemáticas, escribimos, por ejemplo, `3 + 4`. En programación, es lo mismo. En esta lección, aprenderemos cómo realizar operaciones aritméticas en el código.

## Aritmética en programación

Veamos un ejemplo de un programa que suma dos números:

```php
<?php

// No olvides el punto y coma al final, ya que cada línea de código es una instrucción
3 + 4;
```

La aritmética en programación es prácticamente igual a la de la escuela. La instrucción `3 + 4;` hará que el intérprete sume los números y obtenga el resultado. Este programa funcionará, pero no tiene sentido, ya que básicamente no le estamos dando ninguna instrucción al intérprete, simplemente le estamos diciendo "mira, la suma de tres y cuatro".

En un trabajo real, no es suficiente informar al intérprete sobre una expresión matemática. Por ejemplo, al crear una tienda en línea, no es suficiente pedirle al intérprete que calcule el costo de los productos en el carrito. En este caso, debemos pedirle que calcule el costo y muestre el precio al comprador.

Necesitamos pedirle al intérprete que sume `3 + 4` y darle una instrucción para hacer algo con el resultado. Por ejemplo, mostrarlo en pantalla:

```php
<?php

// Nuevamente, no olvides el punto y coma al final de la línea
print_r(3 + 4); // => 7
```

Además de la suma, están disponibles las siguientes operaciones:

* `*` — multiplicación
* `/` — división
* `-` — resta
* `%` — [resto de la división](https://es.wikipedia.org/wiki/Resto_(matem%C3%A1tica))
* `**` — potenciación

Estos símbolos de operación se llaman operadores.
