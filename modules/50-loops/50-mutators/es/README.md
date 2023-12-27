Del lenguaje C a PHP se han trasladado dos operaciones:

* Incremento `++`
* Decremento `--`

A menudo se encuentran junto con bucles. Estas operaciones unarias aumentan y disminuyen en uno el número almacenado en una variable:

```php
<?php

$i = 0;
$i++; // 0
$i++; // 1

$i--; // 2
$i--; // 1
```

Al utilizar la forma prefija, todo ocurre al revés. Primero se produce el cambio en la variable y luego se devuelve el nuevo valor:

```php
<?php

$i = 0;
++$i; // 1
++$i; // 2

--$i; // 1
--$i; // 0
```

Parece que no hay ninguna diferencia entre las formas posfija y prefija. Pero aquí es donde comienzan las dificultades. Todas las demás operaciones no tienen efectos secundarios y simplemente devuelven un nuevo valor. A diferencia de ellas, el incremento y el decremento no solo devuelven un valor, sino que también **modifican** el valor de la variable.

Al utilizar la notación prefija, primero se produce el cambio en la variable y luego se devuelve. Al utilizar la notación posfija, ocurre lo contrario: primero se devuelve y luego se produce el cambio en la variable.

La regla funciona de la misma manera para el incremento y el decremento. Para simplificar, consideremos solo el incremento:

```php
<?php

$x = 5;

echo ++$x; // => 6
echo $x;   // => 6

echo $x++; // => 6
echo $x;   // => 7
```

Discutamos qué sucede paso a paso en el código:

1. Imprimimos `++$x` - esto es un incremento prefijo, por lo que primero el valor de la variable se incrementa en 1, luego se devuelve el resultado y se imprime en la pantalla.
2. El valor ha cambiado, por lo que `echo $x` imprime 6.
3. Ahora imprimimos `$x++` - esto es un incremento posfijo, por lo que primero se devuelve y se imprime el valor, y luego la variable se incrementa en 1.
4. El valor ha cambiado, por lo que `echo $x` imprime 7.

El incremento y el decremento pueden complicar significativamente el código. Es especialmente difícil cuando insertamos el incremento dentro de otras operaciones: `$x = $i++ - 7 + --$h`.

Es imposible entender un código así, por lo que es mejor no utilizar tales construcciones. Por ejemplo, en el lenguaje JavaScript, cuando se verifica el código, el linter comienza a quejarse de inmediato cuando ve el uso de incremento y decremento.

Recomendamos utilizar estas construcciones de la siguiente manera:

* Dentro de una expresión, nunca mezcle funciones sin efectos secundarios con funciones con efectos secundarios (lo mismo se aplica a las operaciones).
* Utilice el incremento y el decremento solo donde no haya diferencia entre la forma prefija y la forma posfija: por separado de todo, en su propia línea de código.
