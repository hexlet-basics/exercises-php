En matemáticas escolares, existe el concepto de "prioridad de la operación". La prioridad determina en qué secuencia deben realizarse las operaciones.

Supongamos que queremos calcular la siguiente expresión: `2 + 2 * 2`:

```php
<?php

print_r(2 + 2 * 2); // => 6
```

El intérprete realiza los cálculos aritméticos en el orden correcto: primero la multiplicación y la división, luego la suma y la resta, y la potenciación tiene una prioridad más alta que todas las demás operaciones aritméticas: `2 ** 3 * 2` se calculará como `16`.

A veces, los cálculos deben realizarse en un orden diferente. En este caso, se utilizan paréntesis para establecer la prioridad, por ejemplo: `(2 + 2) * 2`. Los paréntesis se pueden colocar alrededor de cualquier operación y se pueden anidar tantas veces como sea necesario. Aquí hay algunos ejemplos:

```php
<?php

print_r(3 ** (4 - 2)); // => 9
print_r(7 * 3 + (4 / 2) - (8 + (2 - 1))); // => 14
```

En este caso, es importante cerrar los paréntesis en el orden correcto. Esto a menudo es la causa de errores no solo para principiantes, sino también para programadores experimentados. Para mayor comodidad, se pueden colocar los paréntesis de apertura y cierre de inmediato, y luego escribir la parte interna.

La mayoría de los editores de código hacen esto automáticamente. Por ejemplo, colocamos un paréntesis de apertura y automáticamente se coloca el de cierre. Esto también se aplica a otros caracteres emparejados, como comillas. Hablaremos de ellos en futuras lecciones.

A veces, una expresión puede ser difícil de entender visualmente. En ese caso, se pueden colocar paréntesis sin afectar la prioridad. El código se escribe para las personas, y las máquinas solo lo ejecutarán. Para las máquinas, el código es correcto o incorrecto. No hay código "más" o "menos" comprensible para ellas. La colocación explícita de prioridades facilita la lectura del código para otros desarrolladores.
