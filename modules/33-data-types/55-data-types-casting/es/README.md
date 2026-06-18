En los programas reales surge a menudo la situación de que hay que convertir datos de un tipo en otro. Esto es especialmente relevante, por ejemplo, al procesar la entrada del usuario o los datos de los formularios web. Allí todo llega en forma de cadenas, aunque hayas introducido un número.

![Conversión de tipos en PHP](./assets/number-as-string.png)

PHP sabe convertir tipos automáticamente: lo vimos en la lección sobre el tipado débil. Pero confiar en las conversiones implícitas es peligroso. Cuando sabes exactamente qué tipo quieres obtener, es mejor convertir el valor de forma **explícita**. Para ello, PHP tiene una sintaxis especial: antes del valor, entre paréntesis, se indica el tipo deseado. Esta operación se llama conversión de tipos (type casting). El código explícito es más comprensible y predecible.

## Conversión de una cadena en número

Imagina que recibimos de un formulario la cadena `'345'` y necesitamos sumar este número con otro:

```php
<?php

$number = (int) '345';
print_r($number + 5); // => 350
```

El operador `(int)` recibe una cadena y la convierte en un número entero.

```php
<?php

$value = '0';
$convertedValue = (int) $value;
print_r($convertedValue); // => 0

print_r((int) '10'); // => 10
print_r((int) 3.5);  // => 3 (la parte fraccionaria se descarta)
```

```text
'123'  ──(int)──→  123  ──(float)──→  123.0
                    │
                (string)
                    ↓
                  '123'
```

## Conversión en cadena con (string)

Si necesitas convertir un número en cadena, usa el operador `(string)`:

```php
<?php

print_r((string) 10);  // => '10'
print_r((string) 3.5); // => '3.5'
```

Esto es útil, por ejemplo, al formar textos, mensajes y salidas:

```php
<?php

$age = 42;
print_r('Age: ' . (string) $age); // => Age: 42
```

## Conversión en número de punto flotante con (float)

Si necesitas un número con punto decimal, usa `(float)`:

```php
<?php

print_r((float) '2.7'); // => 2.7
```

La expresión `(float) 5` también funcionará: se obtendrá el número fraccionario `5.0`, aunque `print_r()` lo mostrará sin la parte fraccionaria, como `5`.

## Conversiones múltiples

La conversión de tipos también se puede usar dentro de expresiones compuestas. En situaciones más complejas aparecen conversiones múltiples: `(string) (5 + ((int) '4'))`. El orden de evaluación de esta expresión es el siguiente:

```php
<?php

(int) '4';  // 4
5 + 4;      // 9
(string) 9; // '9'
```

Por ahora solo conocemos unos pocos tipos, pero la conversión funciona para cualquier tipo.
