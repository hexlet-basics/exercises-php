Las cadenas de texto se usan con mucha frecuencia en programación y en las situaciones más diversas. Con ellas trabajamos con texto, mostramos mensajes en la pantalla, procesamos la entrada del usuario e interactuamos con sistemas externos.

Desde el punto de vista de PHP, una cadena de texto es simplemente un conjunto de caracteres encerrado entre comillas. Veamos algunos ejemplos:

```php
<?php

'Hello'
'Goodbye'
'G'
' '
''
```

Todas estas opciones son cadenas de texto.

- `'Hello'`, `'Goodbye'` y `'G'` son cadenas de varios caracteres o de un solo carácter
- `' '` es una cadena que consta de un solo espacio
- `''` es una cadena vacía, no contiene ningún carácter. Cumple el mismo papel que el 0 en matemáticas

Es decir, todo lo que está dentro de las comillas se considera una cadena, incluso si es solo un espacio o no hay nada en absoluto.

Si mostramos las cadenas en la pantalla, `'Hello'` y `'Goodbye'` se verán claramente. Pero `' '` y `''` pueden generar confusión, porque mostrar una cadena vacía parece una ausencia total, mientras que una cadena con un espacio muestra un "espacio vacío" que visualmente es difícil de distinguir. Sin embargo, PHP las diferencia con claridad. Una cadena vacía significa la ausencia de caracteres, mientras que una cadena con un espacio contiene un carácter de espacio concreto.

Pregunta de control. ¿Son estas cadenas iguales o no?

```php
<?php

'хекслет'
' хекслет'
```

## Terminología. ¿Cadena o línea?

En programación existe una trampa terminológica.

- Una cadena (string) es un tipo de dato (el que analizamos arriba), por ejemplo `'hello'`.
- Una línea (line) es una línea de texto en un archivo o en el código.

Por ejemplo, en el código de abajo hay una línea, pero no una cadena.

```php
<?php

print_r(5);
```

Para evitar confusiones, en este curso usaremos las siguientes formulaciones.

- Cadena, cuando hablamos del tipo de dato.
- Línea, cuando se trata de líneas de código.

## Comillas simples y dobles

En PHP las cadenas se pueden escribir tanto con comillas simples como con comillas dobles:

```php
<?php

print_r('Hello');
print_r("Hello");
```

Por defecto, se acostumbra usar comillas simples `'`, si dentro de la cadena no se necesitan las capacidades de las comillas dobles. Muchos estándares de estilo de código PHP siguen esta convención.

## El problema con las comillas dentro de una cadena

Imagina que quieres imprimir la cadena *Dragon's mother*. En ella hay un apóstrofe (*'s*), que coincide con el carácter de comilla simple. Intentemos así:

```php
<?php

print_r('Dragon's mother');
// PHP Parse error: syntax error, unexpected 's' (T_STRING), expecting ',' or ')'
```

PHP decidirá que la cadena termina después de la palabra 'Dragon', y no reconocerá el resto como código válido, lo que provocará un error de sintaxis. Para evitar esto, encerraremos la cadena entre comillas dobles:

```php
<?php

print_r("Dragon's mother");
```

Ahora PHP entiende que la comilla simple dentro de la cadena es un carácter común, y la cadena misma comienza y termina con comillas dobles.

Si dentro de la cadena se necesitan comillas dobles y por fuera comillas simples, tampoco habrá problemas:

```php
<?php

print_r('He said "No"');
```

A veces una cadena contiene ambos tipos de comillas:

```text
Dragon's mother said "No"
```

En este caso, para que PHP no confunda las comillas de dentro de la cadena con las externas, se usa el carácter de escape, la barra invertida `\`. Le indica al intérprete que el carácter que le sigue es parte de la cadena, y no un carácter de control:

```php
<?php

print_r("Dragon's mother said \"No\"");
// => Dragon's mother said "No"
```

Aquí escapamos las comillas dobles dentro de la cadena que está encerrada entre comillas dobles.

Fíjate que PHP percibe `\"` como un solo carácter de comilla, y no como dos caracteres. Lo mismo ocurre con `\'`, `\\` y otras secuencias similares. Parecen dos caracteres en el código, pero en la cadena cuentan como uno.

Lo mismo funciona en el caso inverso:

```php
<?php

print_r('Dragon\'s mother said "No"');
// => Dragon's mother said "No"
```

## Cómo imprimir la barra invertida

Para imprimir la propia barra invertida, también hay que escaparla:

```php
<?php

print_r("\\");
// => \
```
