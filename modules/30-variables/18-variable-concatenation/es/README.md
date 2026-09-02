Anteriormente ya unimos cadenas directamente usando la concatenación. Ahora haremos lo mismo, pero con variables. Buenas noticias: la sintaxis sigue siendo la misma. Simplemente se sustituyen los valores de las variables.

## Unimos dos cadenas directamente

```php
<?php

$what = 'Kings' . 'road';
print_r($what); // => Kingsroad
```

Aquí todo es sencillo: dos cadenas se unen en una. Así funciona la concatenación: el operador `.` suma las cadenas, creando una nueva cadena.

## Unimos una cadena y una variable

Si en la variable `$first` está la cadena "Kings", podemos unirla tranquilamente con otra cadena:

```php
<?php

$first = 'Kings';
$what = $first . 'road';
print_r($what); // => Kingsroad
```

PHP sustituye el valor de la variable, realiza la operación y crea la cadena resultante.

## Unimos dos variables

De la misma manera, se pueden combinar los valores de dos variables si ambas contienen cadenas:

```php
<?php

$first = 'Kings';
$last = 'road';
$what = $first . $last;
print_r($what); // => Kingsroad
```

También se pueden añadir espacios:

```php
$full = $first . ' ' . $last;
print_r($full); // => Kings road
```

```text
$first = 'Kings'
$last  = 'road'

$first  .  ' '  .  $last
└─┬──┘            └──┬─┘
'Kings' .  ' '  .  'road'
└─────────┬────────────┘
     'Kings road'
```

## ¿Y qué pasa si una variable contiene un número?

Probemos así:

```php
<?php

$age = 42;
print_r('Age: ' . $age); // => Age: 42
```

En PHP este código funciona: el operador `.` siempre une cadenas, por lo que el número se convierte automáticamente en una cadena. No todos los lenguajes funcionan así — por ejemplo, en Python unir una cadena y un número provoca un error, y el número hay que convertirlo explícitamente.

Lo mismo ocurre con las variables que contienen resultados de cálculos:

```php
<?php

$price = 50 * 1.25 * 6.91; // => 431.875
print_r('Price in yuans: ' . $price); // => Price in yuans: 431.875
```

La conversión automática es cómoda, pero requiere atención: a veces se convierte en cadena algo distinto de lo que esperabas. Hablaremos más sobre este comportamiento en las lecciones sobre tipos de datos.
