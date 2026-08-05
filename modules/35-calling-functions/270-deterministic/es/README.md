Las funciones en cualquier lenguaje de programación tienen propiedades fundamentales. Estas propiedades ayudan a entender cómo se comportará una función en diferentes situaciones, cómo probarla y dónde aplicarla. Una de estas propiedades es el **determinismo**.

Una **función determinista** siempre devuelve el mismo resultado para los mismos datos de entrada. Por ejemplo, se puede llamar determinista a una función que cuenta la cantidad de caracteres:

```php
<?php

strlen('hexlet'); // 6
strlen('hexlet'); // 6

strlen('wow'); // 3
strlen('wow'); // 3
```

La función `strlen()` se puede llamar infinitamente con el mismo argumento, y siempre devolverá el mismo resultado.

## Funciones no deterministas

Al tipo opuesto pertenecen las **funciones no deterministas**. Pueden devolver resultados diferentes para los mismos datos de entrada o en ausencia de ellos (funciones sin parámetros). Un buen ejemplo es la función `rand()`, que devuelve un número aleatorio:

```php
<?php

rand(); // 827606195
rand(); // 635369726
```

Esta función no tiene argumentos, pero su resultado es diferente cada vez. Si al menos una llamada entre millones da un resultado distinto, la función se considera no determinista.

```text
Determinista:               No determinista:
strlen('abc') → siempre 3   rand() → 827606195
strlen('abc') → siempre 3   rand() → 635369726
strlen('abc') → siempre 3   rand() → 142503087
```

## Por qué esto importa

El determinismo influye en cómo trabajamos con las funciones.

- las funciones deterministas son fáciles de probar y predecir;
- son más fáciles de optimizar y reutilizar;
- las funciones no deterministas son más difíciles de comprobar, porque el resultado cambia.

Por eso, siempre que sea posible, es mejor procurar que una función sea determinista.
