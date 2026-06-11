En programación, muchas funciones y métodos tienen parámetros que rara vez cambian. En estos casos, se les asignan valores predeterminados que se pueden cambiar según sea necesario. En esta lección aprenderemos cómo asignar valores predeterminados. Esto nos permite reducir la cantidad de código repetitivo:

```php
<?php

// Función de potencia
// El segundo parámetro tiene un valor predeterminado de 2
function myPow($x, $base = 2)
{
    return $x ** $base;
}

// Tres al cuadrado (dos es el valor predeterminado)
myPow(3); // 3 * 3 = 9
// Tres al cubo
myPow(3, 3); // 3 * 3 * 3 = 27
```

El valor predeterminado se asigna como una asignación normal en la definición. Solo se utiliza si el parámetro no se pasa. Hay que acostumbrarse a esto.

Incluso puede haber un valor predeterminado cuando solo hay un parámetro:

```php
<?php

function myPrint($text = 'nothing')
{
    print_r($text);
}

myPrint(); // => "nothing"
myPrint("Hexlet"); // => "Hexlet"
```

Puede haber cualquier cantidad de parámetros con valores predeterminados:

```php
<?php

function f($a = 5, $b = 10, $c = 100)
{
  ...
}
```

Los valores predeterminados tienen una restricción. Deben ir al final de la lista de parámetros. Desde el punto de vista de la sintaxis, no es posible crear una función con un parámetro opcional seguido de uno obligatorio:

```php
<?php

// Este código dará un error
function f($a = 5, $b = 10, $c = 100, $x)
{
  ...
}

// Y este también
function f($a = 5, $b = 10, $x, $c = 100)
{
  ...
}

// Pero este funcionará
function f($x, $a = 5, $b = 10, $c = 100)
{
  ...
}

// Y este también
function f($x, $y, $a = 5, $b = 10, $c = 100)
{
  ...
}
```
