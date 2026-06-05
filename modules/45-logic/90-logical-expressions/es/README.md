En las expresiones lógicas se pueden usar no solo valores de tipo `bool`. Cuando un valor entra en un contexto lógico, PHP lo convierte en `true` o `false`.

Hay un conjunto fijo de valores **falsy**: `false`, `0` (y `0.0`), la cadena vacía `''`, la cadena `'0'` y `null`. Todo lo demás es **truthy**. Se puede comprobar con la doble negación `!!`, que convierte cualquier valor a `bool`:

```php
<?php

var_dump(!!'hello'); // => bool(true)
var_dump(!!'');      // => bool(false)
var_dump(!!'0');     // => bool(false) — una particularidad de PHP
```

A diferencia de muchos lenguajes donde `&&` y `||` devuelven uno de sus operandos, en PHP los operadores lógicos siempre devuelven un `bool`:

```php
<?php

var_dump('hello' && 'world'); // => bool(true)
var_dump(0 || 1);             // => bool(true)
```

La conversión de tipos también ocurre con la comparación no estricta. El operador `==` convierte los operandos antes de comparar, por lo que una cadena vacía es igual a `false` desde su punto de vista. Esta conversión es implícita, así que evita `==` y `!=` siempre que sea posible:

```php
<?php

var_dump('' === false); // => bool(false)
var_dump('' == false);  // => bool(true)
```

Un error común de principiante es escribir `$value === ('first' || 'second')`. Primero se evalúan los paréntesis: ambas cadenas son truthy, el resultado es `true`, y toda la expresión se convierte en `$value === true` — siempre falsa para cadenas. La comprobación correcta es:

```php
<?php

$value === 'first' || $value === 'second';
```
