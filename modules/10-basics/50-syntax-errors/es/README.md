Si un programa en PHP está escrito incumpliendo las reglas, el intérprete detendrá la ejecución y mostrará un mensaje de error. En este mensaje se indica:

- el tipo de error,
- el archivo y la línea en la que se produjo,
- y (a menudo) una pista sobre qué esperaba el intérprete.

## ¿Qué es un error de sintaxis?

Un error de sintaxis (Parse error) es una violación de las reglas de escritura de código (reglas gramaticales) en un lenguaje de programación concreto. Estos errores surgen cuando el código está escrito con una desviación del formato esperado: un punto y coma `;` olvidado, una cadena sin cerrar, un paréntesis omitido, etc.

A diferencia de los lenguajes naturales, donde un texto con errores se puede entender por el contexto, en la programación incluso la mínima desviación hace que el código no funcione.

```text
Código con error       Intérprete           Resultado
┌────────────────┐     ┌─────────────┐     ┌─────────────────┐
│ print_r('Hi')  │ ──→ │     PHP     │ ──→ │ Parse error:    │
└────────────────┘     └─────────────┘     │ unexpected EOF  │
                                           └─────────────────┘
```

Veamos un ejemplo sencillo con un error de sintaxis:

```php
<?php

// La versión correcta es: print_r('Hodor');
print_r('Hodor')
```

En este código se ha olvidado el punto y coma `;` al final de la instrucción, lo que hace que el programa sea incorrecto desde el punto de vista de la sintaxis. Intentemos ejecutar el programa y el intérprete producirá un error:

```bash
php index.php
PHP Parse error:  syntax error, unexpected end of file, expecting "," or ";" in /tmp/index.php on line 4
```

El texto puede resultar incomprensible al principio, pero eso es normal: cuanto más te enfrentes a este tipo de errores, más rápido aprenderás a entender qué ha ocurrido. Fíjate: al final del mensaje se indica la ruta del archivo y el número de la línea donde, según el intérprete, se produjo el error.

## ¿Por qué se consideran sencillos estos errores?

Los errores de sintaxis:

- son fáciles de detectar: el código a menudo se resalta en el editor;
- son fáciles de corregir: basta con devolver el carácter omitido o corregir la estructura.

Pero hay un pero. El intérprete no siempre señala exactamente el lugar donde se cometió el error. A veces el problema se encuentra varias líneas más arriba. Por ejemplo, un paréntesis abierto pero no cerrado en una línea puede «romper» todo el código siguiente.

## ¿Qué hacer ante un error de sintaxis?

- Lee el mensaje de error. Casi siempre contiene información útil.
- Revisa la línea indicada en el mensaje y la línea anterior: a veces el error está «escondido» un poco antes.
- Usa [un editor con resaltado de sintaxis](https://code.visualstudio.com/): te ayudará a detectar los problemas de inmediato (por ejemplo, comillas o paréntesis sin cerrar).
