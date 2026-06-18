A veces, el texto de un programa debe constar de varias líneas. Por ejemplo, al generar un correo, crear una plantilla, formatear un mensaje de error o simplemente trabajar con textos largos.

Por supuesto, se puede usar el carácter de salto de línea `\n`, como hicimos antes:

```php
<?php

$text = "Ejemplo de texto,\nque consta de\nvarias líneas";
```

Al imprimirse, la cadena se verá así:

```text
Ejemplo de texto,
que consta de
varias líneas
```

Pero esta forma se vuelve incómoda, especialmente si la cadena es larga o si hay que añadir nuevos saltos con frecuencia. Cada `\n` hay que insertarlo a mano, y esto empeora la legibilidad del código.

## Heredoc como alternativa

En PHP hay una forma más cómoda de escribir texto en varias líneas: la sintaxis heredoc. Después del operador `<<<` se indica un identificador con un nombre arbitrario, luego un salto de línea y el texto en sí. Al final, en una línea aparte, se añade el mismo identificador, que cierra la cadena:

```php
<?php

$text = <<<EOT
Ejemplo de texto,
que consta de
varias líneas
EOT;
```

Ahora en el código todo se ve igual que en la salida:

```text
Ejemplo de texto,
que consta de
varias líneas
```

## El identificador de cierre

El identificador de cierre, en nuestro caso `EOT`, debe estar en una línea aparte. A partir de PHP 7.3 se puede desplazar a la derecha con espacios — entonces esa misma sangría se elimina de cada línea del texto.

El salto de línea antes del identificador de cierre no se incluye en el resultado. Por eso la cadena de arriba termina con la palabra `líneas` sin una línea vacía al final — a diferencia de algunos otros lenguajes, donde mover las comillas de cierre a una nueva línea añade un salto de línea adicional.

## Ventajas de heredoc

- Legibilidad del código: el texto en el código se ve casi como en la pantalla.
- Comodidad al editar: es fácil añadir, eliminar y cambiar líneas.
- No hay que escapar las comillas:

```php
<?php

$quote = <<<EOT
Aquí no hay que escapar ni las comillas 'simples' ni las "dobles"
EOT;
```

## Interpolación dentro de heredoc

Heredoc funciona como una cadena entre comillas dobles: dentro se pueden sustituir valores de variables mediante interpolación:

```php
<?php

$a = 'А';
$b = 'B';

$text = <<<EOT
{$a} и {$b}
сидели на трубе
EOT;
```

Salida:

```text
А и B
сидели на трубе
```

Esto es especialmente cómodo para plantillas, correos, mensajes de error y descripciones multilínea.

## Nowdoc

Heredoc tiene un «hermano» — nowdoc. La diferencia es que el identificador después de `<<<` se encierra entre comillas simples. Nowdoc se comporta como una cadena entre comillas simples: la interpolación y los caracteres especiales no funcionan dentro, el texto se muestra tal cual:

```php
<?php

$name = 'Joffrey';

$text = <<<'EOT'
Hello, {$name}!
EOT;

print_r($text); // => Hello, {$name}!
```

## La computadora y el humano perciben el código de forma diferente

PHP puede procesar tanto las cadenas con `\n` como heredoc. Para el intérprete es lo mismo. Pero para una persona que lee el código, heredoc es mucho más cómodo y claro.
