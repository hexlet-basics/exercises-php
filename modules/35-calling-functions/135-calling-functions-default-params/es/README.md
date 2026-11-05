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

La documentación describe qué datos recibe una función y qué resultado devuelve. La página de una función en el [manual de PHP](https://www.php.net/manual/es/) se divide en secciones. La sección «Descripción» contiene la firma, es decir, el nombre de la función, sus parámetros y su orden. La sección «Parámetros» explica para qué sirve cada parámetro, y la sección «Valores devueltos» describe el resultado. Para escribir una llamada hacen falta las tres secciones.

Veamos la [referencia de `round()`](https://www.php.net/manual/es/function.round.php). Si la simplificamos un poco, la firma se ve así.

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

La sección «Valores devueltos» precisa el resultado. La referencia de `round()` dice que la función devuelve un número de punto flotante (`float`) redondeado a la precisión indicada. Por eso, incluso al redondear a entero, el resultado sigue siendo un número fraccionario.

En la firma completa de la documentación hay un parámetro opcional más, `$mode`, que controla el modo de redondeo. Se necesita pocas veces, por lo que de momento no lo analizamos.

Comprobemos los dos casos en la consola interactiva de PHP, que se inicia con el comando `php -a`. La línea `php >` es el indicador de la consola. La consola no imprime el resultado por sí sola, así que lo mostramos con la función `var_dump()`, que enseña el tipo y el valor.

```console
php > var_dump(round(10.25, 1));
float(10.3)
php > var_dump(round(10.25));
float(10)
```

La primera llamada pasa la precisión `1` y obtiene el número `10.3`. La segunda deja `$precision` con su valor por defecto y obtiene `10` de tipo `float`, tal como indica la sección «Valores devueltos». Así relacionamos la firma, la explicación de la documentación y el resultado de la ejecución.

## Notación en la referencia

En la firma aparecen marcas auxiliares. Ayudan a leer la firma y no se pasan a la función en la llamada.

| Notación en la referencia | Cómo leerla |
| --- | --- |
| `int $precision = 0` | `$precision` tiene valor por defecto, el argumento se puede omitir |
| `int\|float $num` | El parámetro acepta un valor de cualquiera de los tipos indicados |
| `?string $decimal_separator` | El signo `?` permite pasar el valor `null` en lugar de una cadena |
| `round(float $val [, int $precision = 0])` | Así se marcaban los argumentos opcionales en versiones antiguas del manual. Los corchetes no forman parte de la llamada |

Por ejemplo, la notación `int|float $num` describe un solo parámetro. La llamada `round(-5.5)` le pasa el número `-5.5` y devuelve el número `-6`. Ni el tipo, ni el nombre `$num`, ni el signo `|` se copian en esa llamada.

Si el navegador traduce la página, hay que comparar los nombres de funciones y parámetros y los símbolos de la firma con el original. En la versión en español del manual las descripciones están traducidas, pero la firma sigue en inglés. En el código se usan los nombres originales de la documentación.

## Trabajar con una función desconocida

La lectura de la referencia empieza por la tarea. Por ejemplo, para redondear un precio a un decimal, en la firma de `round()` buscamos el número y la precisión, en la lista de parámetros comprobamos qué significa la precisión y después probamos la llamada `round(10.25, 1)`. Si el resultado coincide con la descripción, la llamada se puede usar en el programa.

Otra función tendrá sus propios parámetros y reglas. Con su firma decidimos qué argumentos pasar, con la descripción conocemos el resultado y las limitaciones, y con un ejemplo pequeño comprobamos lo que hemos entendido.
