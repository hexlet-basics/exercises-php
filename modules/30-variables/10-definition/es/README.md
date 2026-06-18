Imagina que necesitas imprimir la frase Father! dos veces:

```php
<?php

print_r('Father!');
print_r("\n");
print_r('Father!');
```

Este enfoque funciona bien si la frase aparece solo un par de veces. Pero, ¿qué pasa si se usa con frecuencia, en distintas partes del programa? Entonces tendrías que copiar la misma expresión una y otra vez.

¿Y qué ocurre si hay que cambiar la frase, por ejemplo, reemplazar _Father!_ por _Mother!_? Tendrías que buscar y corregir todas las apariciones manualmente. Esto es incómodo y propenso a errores.

## Variables

Para no duplicar la misma cadena, se puede guardar en una variable e imprimir su contenido:

```php
<?php

$greeting = 'Father!';

print_r($greeting);
print_r("\n");
print_r($greeting);
```

Resultado:

```text
Father!
Father!
```

Una **variable** es un nombre detrás del cual se almacena un valor. En nuestro ejemplo, creamos una variable con el nombre `$greeting` y guardamos en ella la cadena `'Father!'`.

```text
$greeting = 'Father!';

Variable         Valor
┌───────────┐    ┌──────────┐
│ $greeting │ ──→│ 'Father!'│
└───────────┘    └──────────┘
```

La línea `$greeting = 'Father!'` se lee así: "toma el valor `'Father!'` y asígnalo a la variable con el nombre `$greeting`". El signo `=` aquí es el operador de asignación, no un símbolo de igualdad como en matemáticas. Coloca un valor dentro de una variable.

Cuando escribimos `print_r($greeting)`, el intérprete sustituye el nombre `$greeting` por el valor que se almacena en ella. Como resultado, en la pantalla se imprime la cadena `'Father!'`.

```text
print_r($greeting)
        |
        v
print_r('Father!')
```

## Nombres de las variables

El nombre de las variables lo inventa el propio programador. En PHP, el nombre de una variable siempre comienza con el signo `$`, y a continuación se puede usar:

- Letras latinas (a-z, A-Z),
- dígitos (pero no al principio),
- guion bajo _.

Ejemplos de nombres válidos: `$greeting`, `$name1`, `$helloWorld`. PHP distingue entre letras minúsculas y mayúsculas. Las variables `$greeting`, `$Greeting` y `$GREETING` son tres variables diferentes.

## Variables y literales

En el código es importante distinguir dónde usamos una variable y dónde escribimos un valor directamente. Esto se nota especialmente en el ejemplo con `print_r()`:

```php
<?php

$greeting = 'Mother!';
print_r($greeting);  // => Mother!
print_r('greeting'); // => greeting
```

En el primer caso se usa la **variable** `$greeting`, y el programa sustituye su valor. En el segundo caso, `'greeting'` está entre comillas, por lo que es un **literal de cadena**, es decir, un valor listo escrito directamente en el código. Aquí el signo `$` ayuda a distinguirlos, pero desde el punto de vista del intérprete, en cualquier caso son cosas absolutamente diferentes.

Los literales son datos escritos de forma explícita (por ejemplo, `'Hello'`, `42`, `3.14`). Los identificadores son los nombres de variables y funciones (por ejemplo, `$greeting`, `print_r`) que apuntan a valores o comandos ya existentes.

## Orden de uso

Una variable primero hay que crearla (asignarle un valor) y solo después usarla. Si intentas acceder a una variable antes de crearla, el programa emitirá una advertencia y, en lugar del valor, sustituirá un "vacío" — `null`:

```php
<?php

print_r($name); // Advertencia: la variable aún no está definida
// Warning: Undefined variable $name
$name = 'Alice';
```

Este error se llama "acceso a una variable no declarada". Es bastante fácil de corregir, porque el texto de la advertencia indica claramente qué variable se está usando antes de su declaración. Los errores tipográficos en el nombre de una variable provocan las mismas advertencias — un editor configurado correctamente resalta los nombres que se usan sin declaración.

Y en el orden correcto todo funciona:

```php
<?php

$name = 'Alice';
print_r($name); // => Alice
```

## Varias variables en un programa

En un mismo programa se pueden crear todas las variables que quieras. Cada una almacena sus propios datos y no interfiere con las demás:

```php
<?php

$greeting1 = 'Father!';
print_r($greeting1);
print_r($greeting1);

$greeting2 = 'Mother!';
print_r($greeting2);
print_r($greeting2);
```

¿Cómo saber cuándo se necesitan varias variables? La cantidad de variables depende de la lógica del programa. Este tema se aborda en detalle más adelante, cuando nos encontremos con funciones y construcciones condicionales.

## Dónde crear las variables

Los programadores intentan crear las variables lo más cerca posible del lugar donde se utilizan. Esto hace que el código sea más legible. Esto es especialmente importante en programas grandes, donde puede haber decenas y cientos de miles de variables.
