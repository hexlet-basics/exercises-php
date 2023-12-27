Las funciones no solo pueden devolver valores, sino también recibirlos como parámetros. Ya nos hemos encontrado con parámetros de funciones:

```php
<?php

// Recibe un parámetro de cualquier tipo
print_r('soy un parámetro');
// Recibe dos parámetros numéricos:
// El primero es el número a redondear
// El segundo es el número de decimales a dejar
round(10.1245, 3); // 10.125
// Recibe tres parámetros de tipo cadena:
// El primero es lo que buscamos
// El segundo es por qué lo reemplazamos
// El tercero es la cadena en la que se realiza el reemplazo
str_replace('go', 'mo', 'google'); // 'moogle'
```

En esta lección aprenderemos a crear funciones que reciben parámetros. Supongamos que tenemos la tarea de implementar la función `getLastChar()`. Esta función devuelve el último carácter de una cadena que se pasa como parámetro. Así es como se usaría esta función:

```php
<?php

// Pasando parámetros directamente sin variables
getLastChar('Hexlet'); // 't'
// Pasando parámetros a través de variables
$name1 = 'Hexlet';
getLastChar($name1); // 't'
$name2 = 'Goo';
getLastChar($name2); // 'o'
```

De la descripción y los ejemplos de código podemos hacer las siguientes conclusiones:

* Necesitamos definir la función `getLastChar()`
* La función debe recibir un parámetro de tipo cadena
* La función debe devolver un valor de tipo cadena

Definición de la función:

```php
<?php

function getLastChar($str)
{
    // Calculamos el índice del último carácter como la longitud de la cadena - 1
    return $str[strlen($str) - 1];
}
```

Vamos a analizarlo. Entre paréntesis se especifica el nombre del parámetro (`$str`). Como dentro de la función no sabemos con qué valor específico estamos trabajando, los parámetros siempre se describen como variables.

El nombre del parámetro puede ser cualquier cosa, no está relacionado con la forma en que se llama a la función. Lo importante es que este nombre refleje el significado del valor que contiene. El valor específico del parámetro dependerá de cómo se llame a esta función.

Este parámetro es obligatorio. Si intentamos llamar a la función sin él, el intérprete mostrará un error:

```sh
getLastChar(); // este código no tiene sentido
ArgumentCountError: Too few arguments to function getLastChar(), 0 passed
```

También se pueden especificar dos, tres o más parámetros. Se separan por comas:

```php
<?php

// Función para encontrar el número medio
function average($x, $y)
{
    return ($x + $y) / 2;
}
average(1, 5); // 3
average(1, 2); // 1.5
```
