Imagina que tenemos una serie de números del 0 al 9. Queremos sumar estos números. Podríamos hacerlo así:

```php
<?php

$sum = 0;
$i = 0;

while ($i < 10) {
    $sum += $i;
    $i += 1;
}

print_r($sum); // => 45
```

Podemos reescribir este código usando el bucle `foreach` y la función `range()`:

```php
<?php

$sum = 0;

foreach (range(0, 9) as $i) {
    $sum += $i;
}

print_r($sum); // => 45
```

La función `range()` crea una secuencia de números dentro de un rango determinado. La llamada `range(0, 9)` devuelve un conjunto de números del 0 al 9. El bucle `foreach` recorre este conjunto: en cada iteración escribe el siguiente número en la variable indicada después de la palabra clave `as` y ejecuta el cuerpo del bucle.

No se necesita ningún contador. El bucle `foreach` sabe por sí mismo cuándo detenerse: cuando se acaban los números del conjunto. Por eso aquí es imposible olvidarse de cambiar el contador y obtener un bucle infinito.

La función `range()` admite varias formas de llamada. La forma `range(start, end)` crea una secuencia desde `start` hasta `end`. Ten en cuenta que en PHP el valor final está **incluido** en el rango — en muchos otros lenguajes no es así. La forma `range(start, end, step)` crea una secuencia con el paso `step`.

Las variantes de `range()` se ven así:

```text
range(1, 5)     →  1, 2, 3, 4, 5
range(0, 3)     →  0, 1, 2, 3
range(0, 10, 2) →  0, 2, 4, 6, 8, 10
                    └── ambos extremos incluidos
```

El ejemplo de la suma lo vimos arriba. Veamos otro: imprimir los números del 1 al 3:

```php
<?php

foreach (range(1, 3) as $i) {
    print_r("{$i}\n");
}

// => 1
// => 2
// => 3
```

Ahora intentemos mostrar los números en orden inverso. Si el inicio del rango es mayor que el final, `range()` construye por sí mismo una secuencia descendente:

```php
<?php

foreach (range(3, 1) as $i) {
    print_r("{$i}\n");
}

// => 3
// => 2
// => 1
```

La estructura `foreach` con la función `range()` es la forma más corta de recorrer un rango de números. Cuando se necesita control total sobre el contador, por ejemplo para cambiarlo según una regla compleja, los bucles `for` y `while` acuden al rescate.
