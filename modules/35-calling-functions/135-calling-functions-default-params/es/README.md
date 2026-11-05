Algunas funciones en PHP tienen **parámetros opcionales**. Esto significa que para ellos se establece de antemano un valor por defecto, y al llamar a la función ese parámetro se puede omitir.

Veamos la función incorporada `round()`, que redondea un número:

```php
<?php

$result = round(10.25, 0); // 10
```

Le pasamos dos valores:

- El número que hay que redondear.
- La precisión del redondeo; `0` significa que el redondeo será al número entero.

Como en la mayoría de los casos se necesita precisamente el redondeo al número entero, los creadores de la función `round()` hicieron el segundo parámetro opcional y le dieron el valor por defecto `0`. Por eso el resultado será el mismo, incluso si no se indica el segundo parámetro:

```php
<?php

$result = round(10.25); // 10
```

Si se necesita otra precisión, se puede indicar explícitamente:

```php
<?php

// redondeo a un decimal
$result = round(10.25, 1); // 10.3
```

```text
round(10.25, 1)  →  argumentos: 10.25, 1    →  10.3
round(10.25)     →  argumentos: 10.25, (0)  →  10
                                       └── valor por defecto
```

En la firma de `round()` el parámetro obligatorio `$num` va antes del opcional `$precision`. Otra función puede tener otra cantidad de parámetros y otros valores por defecto.

## Cómo leer la documentación de una función

La documentación describe qué datos recibe una función y qué resultado devuelve. Cada función tiene su propia página en el [manual de PHP](https://www.php.net/manual/es/). A continuación se muestra un fragmento de la [referencia de `round()`](https://www.php.net/manual/es/function.round.php), con parte del texto omitida.

```text
Descripción

round(int|float $num, int $precision = 0, int|RoundingMode $mode = RoundingMode::HalfAwayFromZero): float

Devuelve el valor redondeado de num a la precisión precision (número de
dígitos después del punto decimal).
...

Parámetros

num
    El valor a redondear.
precision
    El número opcional de decimales a redondear.
    ...
mode
    ...

Valores devueltos

El valor redondeado a la precision dada como float.
```

La página se lee de arriba abajo, paso a paso.

1. La sección «Descripción» empieza con la firma, que indica el nombre de la función, los parámetros en orden y el tipo del resultado.
2. La primera frase dice brevemente qué hace la función.
3. La sección «Parámetros» explica cada parámetro por su nombre en la firma. Las explicaciones largas y las tablas de modos se pueden saltar en la primera lectura.
4. La sección «Valores devueltos» describe el resultado. Aquí la función devuelve un número de tipo `float`, incluso cuando redondea a entero.

El último parámetro, `$mode`, controla el modo de redondeo. Se necesita pocas veces, por lo que de momento no lo analizamos. Sin él, la firma se ve así.

```php
round(int|float $num, int $precision = 0): float
```

Los nombres `$num` y `$precision` designan parámetros. En la llamada se sustituyen por valores concretos, por ejemplo `round(10.25, 1)`. Delante de cada nombre se indica el tipo del valor que espera la función.

La tabla relaciona las partes de la firma con los argumentos de esa llamada.

| Parte de la firma | Qué significa | En la llamada `round(10.25, 1)` |
| --- | --- | --- |
| `round` | Nombre de la función | Llamamos a `round()` |
| `int\|float $num` | Parámetro obligatorio, número entero o fraccionario que se redondea | Pasamos `10.25` |
| `int $precision = 0` | Parámetro opcional, número entero con valor por defecto `0` | Pasamos `1` en lugar del valor por defecto |
| `: float` | Tipo del resultado | Obtenemos un número fraccionario |

El signo `=` en `$precision = 0` indica el valor por defecto. Esta notación muestra que el segundo argumento se puede omitir. Cómo usa la función ese `0` lo explica la sección «Parámetros». En `round()`, la precisión `0` significa redondear a un número entero.

Comprobemos los dos casos en la [consola interactiva de PHP](https://psysh.org/). En la consola no se escribe la línea `<?php`, la llamada se teclea directamente. El signo `>` marca la línea de entrada, y debajo de cada llamada, después del signo `=`, la consola imprime el resultado.

```console
> round(10.25, 1)
= 10.3
> round(10.25)
= 10.0
```

La primera llamada pasa la precisión `1` y obtiene el número `10.3`. La segunda deja `$precision` con su valor por defecto y obtiene `10.0`. La consola muestra la parte decimal porque el resultado es de tipo `float`, tal como indica la sección «Valores devueltos». Así relacionamos la firma, la explicación de la documentación y el resultado de la ejecución.

## Notación en la referencia

En la firma aparecen marcas auxiliares. Ayudan a leer la firma y no se pasan a la función en la llamada.

| Notación en la referencia | Cómo leerla |
| --- | --- |
| `int $precision = 0` | `$precision` tiene valor por defecto, el argumento se puede omitir |
| `int\|float $num` | El parámetro acepta un valor de cualquiera de los tipos indicados |
| `round(float $val [, int $precision = 0])` | Así marcan los argumentos opcionales algunas referencias y artículos de terceros. Los corchetes no forman parte de la llamada |

Por ejemplo, la notación `int|float $num` describe un solo parámetro. La llamada `round(7)` le pasa el número entero `7` y devuelve `7.0`. Ni el tipo, ni el nombre `$num`, ni el signo `|` se copian en esa llamada.

Si el navegador traduce la página, hay que comparar los nombres de funciones y parámetros y los símbolos de la firma con el original. En la versión en español del manual las descripciones están traducidas, pero la firma sigue en inglés. En el código se usan los nombres originales de la documentación.

## Trabajar con una función desconocida

La lectura de la referencia empieza por la tarea. Por ejemplo, para redondear un precio a un decimal, en la firma de `round()` buscamos el número y la precisión, en la lista de parámetros comprobamos qué significa la precisión y después probamos la llamada `round(10.25, 1)`. Si el resultado coincide con la descripción, la llamada se puede usar en el programa.

Otra función tendrá sus propios parámetros y reglas. Con su firma decidimos qué argumentos pasar, con la descripción conocemos el resultado y las limitaciones, y con un ejemplo pequeño comprobamos lo que hemos entendido.
