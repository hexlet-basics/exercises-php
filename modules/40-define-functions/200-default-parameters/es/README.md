Las funciones pueden recibir parámetros. A veces resulta conveniente asignar un valor directamente en la definición de la función para no tener que indicarlo en cada llamada. Ese valor se llama **valor predeterminado**.

Si no se pasa un argumento, se utiliza ese valor. Si se especifica un argumento, este reemplaza al predeterminado. Ya nos hemos encontrado con llamadas a funciones de este tipo; por ejemplo, la función incorporada `round()` tiene un segundo parámetro cuyo valor predeterminado es `0`. Ahora aprenderemos a definirlos nosotros mismos.

## Ejemplo: repetir texto

Hagamos una función que repita una cadena de texto varias veces. Por defecto que sea una vez, pero si se desea se puede indicar otra cantidad:

```php
<?php

function repeat($text, $times = 1)
{
    return str_repeat($text, $times);
}

print_r(repeat('Hi'));    // => Hi
print_r(repeat('Hi', 3)); // => HiHiHi
```

En este ejemplo se utiliza la función incorporada `str_repeat()`. Funciona así: toma la cadena de texto original y la repite la cantidad de veces indicada. Por ejemplo, `str_repeat('A', 5)` devolverá `'AAAAA'`. Esta función se usa con frecuencia al generar plantillas, separadores y fragmentos de texto que se repiten.

```text
function repeat($text, $times = 2)    ← $times tiene un valor predeterminado
{
    ...
}

repeat('go')        →  $times = 2  (por defecto)
repeat('go', 5)     →  $times = 5  (indicado explícitamente)
```

El valor predeterminado se ve como una asignación normal en la definición. Solo se aplica si el parámetro no se pasa. Hay que acostumbrarse a esto.

Puede haber un valor predeterminado incluso cuando solo hay un parámetro:

```php
<?php

function myPrint($text = 'nothing')
{
    print_r($text);
}

myPrint();         // => "nothing"
myPrint('Hexlet'); // => "Hexlet"
```

## Ejemplo: unir palabras con un separador

Por defecto las palabras se unen con un espacio, pero se puede indicar otro carácter:

```php
<?php

function joinWords($word1, $word2, $sep = ' ')
{
    return $word1 . $sep . $word2;
}

print_r(joinWords('King', 'Road'));         // => King Road
print_r(joinWords('Dragon', 'stone', '-')); // => Dragon-stone
```

## Ejemplo: varios parámetros predeterminados

Una función puede contener más de un parámetro con valores predeterminados. Por ejemplo, hagamos una función que construya una cadena separadora. Por defecto el carácter es un guion y la longitud es 10:

```php
<?php

function makeLine($symbol = '-', $length = 10)
{
    return str_repeat($symbol, $length);
}

print_r(makeLine());       // => ----------
print_r(makeLine('*'));    // => **********
print_r(makeLine('*', 5)); // => *****
print_r(makeLine('#', 3)); // => ###
```

## Restricción en el orden de los parámetros

Los parámetros opcionales siempre se indican al final de la lista de parámetros. Desde el punto de vista de la sintaxis, es imposible crear una función en la que después de un parámetro opcional venga uno obligatorio:

```php
<?php

// Este código terminará con un error
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
