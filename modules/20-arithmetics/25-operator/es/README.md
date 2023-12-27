Un **operador** es un símbolo de operación, como `+`. Los operadores suelen estar representados por uno o varios caracteres, a veces por una palabra. Por lo general, corresponden a operaciones matemáticas.

Los operadores realizan operaciones en valores específicos, llamados **operandos**.

Veamos un ejemplo:

```php
<?php

print_r(8 + 2);
```

Aquí, `+` es el operador, y los números `8` y `2` son los operandos.

Las operaciones que requieren dos operandos se llaman **operaciones binarias**. En el caso de la suma, tenemos dos operandos: uno a la izquierda del signo `+` y otro a la derecha. Si se omite al menos un operando, por ejemplo, `3 + ;`, el programa dará un error de sintaxis.

También hay operaciones **unarias**, que tienen un solo operando, y **ternarias**, que tienen tres operandos. Además, los operadores pueden tener la misma apariencia pero representar operaciones diferentes.

Los símbolos `+` y `-` no solo se utilizan como operadores. Cuando se trata de números negativos, el signo menos forma parte del número:

```php
<?php

print_r(-3); // => -3
```

En el ejemplo anterior, se aplica una operación unaria al número `3`. El operador `-` antes del tres le indica al intérprete que tome el número `3` y encuentre su opuesto, es decir, `-3`. Esto puede ser confuso, ya que `-3` es tanto un número como un operador con un operando. Pero en los lenguajes de programación, esta es la estructura:

```php
<?php

// Lo mismo que 4 - 3
print_r(4 + -3); // => 1
```

Lo mismo ocurre con el signo más:

```php
<?php

print_r(+3); // => 3
print_r(1 + +3); // => 4
```
