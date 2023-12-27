La suma, la concatenación y otras operaciones que hemos visto son capacidades básicas de los lenguajes de programación. Pero con las cadenas de texto se pueden realizar operaciones más complejas. Se pueden invertir, cambiar el caso de las letras, eliminar caracteres innecesarios.

A un nivel más alto, existe la lógica aplicada a una aplicación específica. Los programas pueden realizar transacciones monetarias, calcular impuestos, generar informes. La cantidad de operaciones similares es infinita y depende de cada programa en particular. Y todas ellas deben estar expresadas en código. Para eso, las funciones nos ayudan, y en esta lección aprenderemos sobre ellas.

## Tipos de funciones

Para expresar cualquier operación arbitraria en programación, existen las **funciones**. Pueden ser funciones incorporadas o agregadas por el programador. Ya estamos familiarizados con una función incorporada: `print_r()`.

Las **funciones** son una de las construcciones clave en programación, sin ellas no se puede hacer prácticamente nada. Primero aprenderemos a utilizar las funciones ya creadas y luego aprenderemos a crear las nuestras propias.

## Cómo trabajar con funciones incorporadas

Comenzaremos con funciones sencillas para trabajar con cadenas de texto. A continuación, se muestra un ejemplo de llamado a la función `strrev()`, que invierte una cadena de texto:

```php
<?php

// Llamado a la función strrev con el argumento '¡Hola!'
$resultado = strrev('¡Hola!');
print_r($resultado); // => '!aloH'
```

Hemos creado la variable `$resultado` y le hemos indicado al intérprete que guarde en ella el resultado que devuelve el llamado a la función `strrev()`. En este sentido, las funciones son similares a las operaciones, siempre devuelven un resultado.

La expresión `strrev('¡Hola!')` significa que se está llamando a la función con el nombre `strrev`, a la cual se le ha pasado el argumento o parámetro `'¡Hola!'`.

Las funciones necesitan argumentos para funcionar, al igual que los operadores necesitan operandos. La función `strrev()` invierte la cadena de texto que se le pasa como argumento.

El llamado a una función siempre se indica con paréntesis `()`. Estos van justo después del nombre de la función. Entre los paréntesis puede haber cualquier cantidad de argumentos, o incluso ninguno. La cantidad depende de la función que se esté utilizando. Por ejemplo, la función `pow()` recibe dos argumentos y eleva el número pasado como primer parámetro a la potencia indicada como segundo parámetro:

```php
<?php

$resultado = pow(2, 3); // 2 * 2 * 2
print_r($resultado); // => 8

// En PHP moderno, hay un operador especial para elevar a una potencia
$resultado = 2 ** 3; // 8
```

Ahora veamos un ejemplo de una función que no recibe argumentos. La función `rand()` genera y devuelve un número aleatorio:

```php
<?php

$resultado = rand();
```

Los operadores y las funciones son lo mismo. La diferencia está en cómo se escriben. Si consideramos la suma como una función, se vería así:

```php
<?php

3 + 5; // 8
sum(3, 5); // 8

// Incluso se puede escribir así
+(3, 5);

// En PHP, esta sintaxis no es posible, pero hay lenguajes (como Lisp)
// donde se ve muy similar
```

Pregunta de autoevaluación. ¿Cómo se puede saber qué devuelve el llamado a `print_r()`? Compruébalo.
