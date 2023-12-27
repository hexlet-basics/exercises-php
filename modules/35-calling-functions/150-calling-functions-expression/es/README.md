En programación, una expresión es algo que devuelve un resultado que se puede utilizar. Recordemos que las operaciones matemáticas como la suma y la resta, y las operaciones de cadenas de texto, son expresiones:

```php
<?php

1 + 5 * 3
'Hola' . 'Mundo'
// Las variables pueden ser parte de una expresión
$tasa * 5
```

La característica de las expresiones es que devuelven un resultado que se puede asignar a una variable o mostrar en pantalla. Por ejemplo:

```php
<?php

// Aquí la expresión es 1 + 5
$suma = 1 + 5;
print_r(1 + 5);
```

Las expresiones se pueden combinar y obtener un comportamiento más complejo en lugares inesperados y de formas inesperadas. Hablaremos más sobre esto más adelante. Como resultado, entenderemos mejor cómo combinar partes de código para obtener el resultado deseado.

## ¿Es una función una expresión?

Sabemos que las funciones devuelven un resultado, por lo que son expresiones. Por lo tanto, podemos utilizar una llamada a una función directamente en operaciones matemáticas.

Por ejemplo, así se puede obtener el índice del último carácter en una palabra:

```php
<?php

$nombre = 'php';
// Los índices comienzan en cero
// ¡Llamada a la función y resta juntas!
$ultimo_indice = strlen($nombre) - 1;
print_r($ultimo_indice); // 2
```

En este código no hay una nueva sintaxis. Solo hemos combinado partes conocidas basándonos en su naturaleza. Podemos ir aún más lejos:

```php
<?php

$nombre = 'php';
print_r(strlen($nombre) - 1); // => 2
```

Todo esto es válido para cualquier función, por ejemplo, las funciones de cadenas de texto:

```php
<?php

$nombre = 'Toto';
// Se utiliza interpolación
print_r("Nombre de usuario: {$nombre}");
// => Nombre de usuario: Toto
```
