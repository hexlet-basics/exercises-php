La globalización se manifiesta en muchos aspectos, incluyendo un sistema de medidas unificado: tiempo, tamaños y distancias, temperaturas, fechas y mucho más.

Por supuesto, hay países que se desvían de la corriente general. Por ejemplo, Estados Unidos es prácticamente el único país en el que se mantiene y prevalece el [sistema de medidas inglés](https://es.wikipedia.org/wiki/Sistema_imperial_de_medidas). Estados Unidos utiliza millas en lugar de kilómetros y libras en lugar de kilogramos. En muchos países orientales, los calendarios están organizados de manera diferente, y en algún lugar se encuentra el año cuatro mil. Pero en general, todo está estandarizado.

A pesar de esta estandarización, cada país tiene sus propias particularidades en cuanto a la forma de escribir, comparar y otros aspectos. Por ejemplo, en Estados Unidos es común colocar el mes primero y luego el día en las fechas. En algunos países, se utiliza el punto para representar números decimales, mientras que en otros se utiliza la coma: `1,234`.

Estas particularidades no necesariamente están vinculadas a un país en su totalidad. Dentro de un mismo país puede haber múltiples divisiones adicionales. Cada conjunto de estas particularidades se llama **localización**, y el proceso de adaptación a las particularidades de una localización específica se llama **localización**.

La localización es importante en el software. Los usuarios siempre esperan que cualquier software o sitio web funcione de manera predecible. Esto incluye la localización. Es comprensible que resolver esta tarea por sí mismo sea demasiado costoso. Afortunadamente, no es necesario hacerlo. La localización generalmente está incorporada en el propio lenguaje o en bibliotecas especiales.

En PHP, la función [setlocale()](https://secure.php.net/manual/es/function.setlocale.php) se utiliza para gestionar la localización. Esta función configura la localización de forma global. Su llamada afecta a todas las funciones posteriores que dependen de la localización:

```php
<?php

setlocale(int $category, string $locales, string ...$rest): string|false
```

El primer parámetro de esta función es el nombre de la categoría (como una constante) a la que se debe aplicar la localización, que se pasa como argumento en los parámetros siguientes:

* LC_ALL — todo lo siguiente
* LC_COLLATE — funciones de comparación de cadenas `strcoll()`
* LC_CTYPE — funciones de conversión y clasificación de cadenas, como `strtoupper()`
* LC_MONETARY — para la función `localeconv()`
* LC_NUMERIC — establece el símbolo de separación decimal `localeconv()`
* LC_TIME — formato de fecha y hora con la función `strftime()`

Veamos un ejemplo de cómo la localización establecida afecta la visualización de los datos:

```php
<?php

print_r(1.234); // => 1.234
setlocale(LC_NUMERIC, 'ru_RU');
print_r(1.234); // => 1,234
```

Intentemos pasar `0` como segundo argumento en lugar de una localización: `setlocale(LC_ALL, 0)`. En este caso, la función devolverá la localización actual establecida para la categoría.
