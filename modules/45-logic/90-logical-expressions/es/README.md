En las expresiones lógicas se pueden usar no solo valores de tipo `bool`. Los números y las cadenas también pueden ser operandos de operaciones lógicas. En esta lección veremos cómo PHP los maneja y cuál será el resultado de tales expresiones.

## Valores falsy y truthy

Cuando un valor entra en un contexto lógico, PHP lo convierte en `true` o `false`. PHP tiene un conjunto fijo de valores que se consideran **falsos** (falsy). Estos son `false`, el número `0` (y `0.0`), la cadena vacía `''`, la cadena `'0'` y el valor especial `null` — la «ausencia de valor».

Todos los demás valores se consideran **verdaderos** (truthy). Por ejemplo, cualquier número distinto de cero (`1`, `-3.5`) y cualquier cadena no vacía (`'hi'`, `'hello'`).

Se puede comprobar con la doble negación `!!`, que convierte cualquier valor a tipo `bool`: la primera negación convierte el valor en booleano (y lo invierte), y la segunda lo devuelve de nuevo:

```php
<?php

var_dump(!!'hello'); // => bool(true)  — una cadena no vacía es truthy
var_dump(!!'');      // => bool(false) — una cadena vacía es falsy
var_dump(!!0);       // => bool(false) — cero es falsy
var_dump(!!-3.5);    // => bool(true)  — un número distinto de cero es truthy
var_dump(!!'0');     // => bool(false) — la cadena '0' es falsy, una particularidad de PHP
```

Este truco se usa para cambiar explícitamente el tipo de dato: el resultado de la doble negación siempre será un valor de tipo `bool`.

## Cómo funcionan las expresiones lógicas

En algunos lenguajes, los operadores «Y» y «O» devuelven uno de sus operandos, por lo que el resultado puede ser una cadena o un número. PHP funciona de otra manera: los operadores lógicos `&&` y `||` siempre devuelven un valor de tipo `bool` — `true` o `false`:

```php
<?php

var_dump('hello' && 'world'); // => bool(true)  — ambos operandos son truthy
var_dump('' && 'world');      // => bool(false) — el primer operando es falsy
var_dump(0 || 1);             // => bool(true)  — el segundo operando es truthy
var_dump('' || 0);            // => bool(false) — ambos operandos son falsy
```

El orden de evaluación depende de la precedencia de los operadores:

```text
Precedencia (de mayor a menor):

  ()          paréntesis
   ↓
  !           negación
   ↓
  &&          Y lógico
   ↓
  ||          O lógico
```

## Comparación no estricta

La conversión de tipos también ocurre con la comparación no estricta. Recuerda los operadores `==` y `!=` de la lección sobre el tipo lógico: comparan los valores después de convertir primero los tipos. Por eso, desde el punto de vista de `==`, una cadena vacía y `false` son iguales:

```php
<?php

var_dump('' === false); // => bool(false)
var_dump('' == false);  // => bool(true)
```

Una cadena vacía y `false` son valores diferentes, por lo que el operador estricto `===` dice «¡Falso! ¡No son iguales!». Pero el operador `==` convierte los operandos y los considera iguales. Esta conversión es implícita, así que evita los operadores `==` y `!=` siempre que sea posible.

## Error de elección

Imaginemos una tarea en la que necesitamos comprobar que un valor es igual a una cosa o a otra. Por ejemplo, la variable `$value` debe contener uno de dos valores: `'first'` o `'second'`. Los desarrolladores principiantes a veces escriben esta expresión así:

```php
<?php

$value === ('first' || 'second');
```

En nuestra cabeza lo imaginamos más o menos así, pero los lenguajes funcionan de otra manera, así que ese código lleva a un resultado incorrecto. ¿Cómo leerlo correctamente? Primero se evalúa todo lo que está entre paréntesis, es decir, `'first' || 'second'`. Ambas cadenas son no vacías, es decir, truthy, por lo que el resultado será `true`. Ahora podemos reemplazar la expresión original por la parcialmente evaluada:

```php
<?php

$value === true;
```

No es para nada lo que esperábamos: la cadena `'first'` no es igual a `true` en una comparación estricta, por lo que la expresión siempre es falsa. Ahora volvamos al principio y escribamos la comprobación correctamente:

```php
<?php

// No es obligatorio poner paréntesis,
// porque la precedencia de === es mayor que la precedencia de ||
$value === 'first' || $value === 'second';
```
