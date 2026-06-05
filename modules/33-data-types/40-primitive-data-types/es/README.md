## Tipos de datos disponibles

Hay diferentes formas de representar datos en los programas:

* **Cadenas de texto** - conjuntos de caracteres entre comillas, como `"Hola, Mundo!"`
* **Números enteros** - por ejemplo, `7`, `-198`, `0`

Estas son dos categorías diferentes de información, dos **tipos de datos** diferentes.

La operación de multiplicación tiene sentido para los números enteros, pero no tiene sentido para las cadenas de texto. Multiplicar la palabra "mamá" por la palabra "cuaderno" no tiene sentido. El tipo de dato determina qué se puede hacer con los elementos de un conjunto específico.

El lenguaje de programación reconoce los tipos. Por lo tanto, PHP no nos permitirá multiplicar texto por texto, pero sí permitirá multiplicar un número entero por otro número entero. La presencia de tipos y de tales restricciones en el lenguaje protege a los programas de errores accidentales.

A diferencia de las cadenas de texto, los números enteros no necesitan estar entre comillas. Para imprimir el número 5, simplemente escriba:

```php
<?php

print_r(5);
```

El número `5` y la cadena `'5'` son cosas diferentes, aunque la salida de `print_r()` para estos datos es idéntica.

Los números enteros, como `1`, `34`, `-19`, y los números racionales, como `1.3`, `1.0`, `-14.324`, son dos tipos de datos separados. Esta separación está relacionada con las características de los ordenadores. Hay otros tipos, los cuales conoceremos más adelante.

Ejemplo con un número racional:

```php
<?php

print_r(10.234);
```

Los tipos de datos "cadena de texto", "número entero" y "número racional" son tipos primitivos. Están incorporados en el propio lenguaje PHP.

También hay tipos de datos compuestos incorporados en el lenguaje, pero por ahora solo trabajaremos con los primitivos. Los programadores también pueden crear sus propios tipos de datos.

En inglés, las cadenas de texto en programación se llaman **strings**, y las líneas de texto en archivos se llaman **lines**. Por ejemplo, en el código anterior hay tres lines y no hay strings.
