Cuando escribimos programas, necesitamos conectar acciones entre sí. La suma de números, la unión de cadenas de texto y el trabajo con variables son ejemplos de cómo los pasos simples se pueden combinar para obtener un comportamiento más complejo.

```php
<?php

$rate = 10;
$hours = 5;
$salary = $rate * $hours + 100;
print_r($salary); // => 150
```

En programación, para esto se usa el concepto de **expresión**. Designa una construcción que se evalúa y produce un resultado. En el ejemplo anterior, `$rate * $hours + 100` es una expresión compuesta de variables (`$rate`, `$hours`), un literal numérico (`100`) y operaciones aritméticas. En conjunto, devuelve un resultado que se puede guardar en una variable o usar más adelante.

¿Qué nos aporta este conocimiento? Entendemos que las expresiones se pueden combinar infinitamente, complicando poco a poco la lógica. Cada nueva expresión se convierte en parte de una mayor:

```php
<?php

$bonus = 50;
// Una expresión compuesta de muchas operaciones
$salary = ($rate * $hours + $bonus) * 12 - 500;
print_r($salary);
```

Aquí varias expresiones se combinan en una, y el resultado se volvió aún más complejo. Así es exactamente como se construyen los programas. Los pasos pequeños se suman en grandes construcciones. Por eso en programación es imposible memorizar de antemano todas las combinaciones. Es mucho más importante entender cómo las expresiones se conectan entre sí en el resultado que necesitas.

## Las expresiones como argumentos de funciones

Un argumento de una función siempre es algún valor. Pero un valor no solo se puede escribir directamente, también se puede calcular. Y eso significa que en los argumentos de una función se puede sustituir cualquier expresión.

```php
<?php

// Aquí el argumento de la función print_r es el número 150
print_r(150);

// Y aquí el argumento es una expresión que primero se evalúa
print_r(10 * 15); // => 150

// Se puede combinar de forma aún más compleja
$rate = 10;
$hours = 15;
$bonus = 50;
print_r($rate * $hours + $bonus); // => 200
```

La función `print_r()` simplemente recibe un valor ya listo y lo muestra en la pantalla. A la función le da igual cómo se obtuvo ese valor. Precisamente por eso las llamadas a funciones combinan perfectamente con cualquier expresión.

## Llamada a una función dentro de una función

Como una llamada a una función es en sí misma una expresión, su resultado se puede pasar de inmediato a otra función. Esto permite construir construcciones aún más complejas.

```php
<?php

$name = 'python';

// La llamada strlen($name) devuelve 6
// Este resultado se usa de inmediato como argumento de print_r()
print_r(strlen($name)); // => 6
```

Aquí `strlen($name)` se evalúa primero y devuelve el número 6. Luego ese valor se sustituye en la llamada `print_r()`. Tal combinación puede ser tan profunda como se quiera. El resultado de una función se puede pasar a otra, luego a la siguiente.

Para leer correctamente estas construcciones, hay que recordar el orden de las llamadas.

1. Primero se ejecuta la función que está «dentro», en nuestro caso `strlen($name)`.
2. Luego su resultado se sustituye en el lugar de la llamada.
3. Después de eso se ejecuta la función externa, en este caso `print_r()`.

Así, el código `print_r(strlen($name))` se puede descomponer mentalmente de esta manera:

```text
print_r(strlen('python'))

Paso 1:  strlen('python')  →  6
Paso 2:  print_r(6)        →  muestra 6
```

1. `strlen($name)` → `6`
2. `print_r(6)`
3. En la pantalla aparece `6`.

Este principio siempre funciona. Primero se evalúan las llamadas anidadas, luego la externa.

## Uso de funciones como parte de expresiones

Las funciones devuelven valores, lo que significa que sus llamadas se pueden usar como argumentos de otras funciones y como parte de cualquier otra expresión.

```php
<?php

$name = 'python';

// La llamada strlen($name) devuelve 6
// Restamos 1 para obtener el índice del último carácter
$lastIndex = strlen($name) - 1;
print_r($lastIndex); // => 5

// Se puede usar el resultado de una función en la aritmética
$text = 'hexlet';
$double = strlen($text) * 2;
print_r($double); // => 12
```

Aquí las llamadas `strlen($name)` y `strlen($text)` son expresiones de pleno derecho. Devuelven valores que se pueden combinar con números, variables y otras operaciones.
