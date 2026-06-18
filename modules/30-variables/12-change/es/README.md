La propia palabra "variable" sugiere que su valor puede cambiar. Esta es una de las principales razones por las que las variables existen en absoluto.

Aquí tienes un ejemplo sencillo:

```php
<?php

// greeting se traduce como saludo
$greeting = 'Father!';
print_r($greeting); // => Father!

$greeting = 'Mother!';
print_r($greeting); // => Mother!
```

Aquí primero almacenamos una cadena (_Father!_) en la variable, y luego otra (_Mother!_). El nombre de la variable no cambió, pero el valor de su interior pasó a ser diferente.

```text
Antes:    $greeting ──→ 'Father!'
                         ╳
Después:  $greeting ──→ 'Mother!'
```

## ¿Para qué cambiar el valor?

En los programas reales, las variables cambian constantemente. Aquí hay algunas razones:

- El programa reacciona a las acciones del usuario. Por ejemplo, mientras introduces algunos datos en los formularios de un sitio web, es muy probable que en ese momento estén cambiando constantemente las variables que contienen esos datos.
- Resultados intermedios. A menudo los datos pasan por una serie de transformaciones, y en cada etapa la variable se actualiza con un nuevo valor. Un mecanismo similar existe incluso en las calculadoras, cuando los valores intermedios se guardan con las teclas `m+` o `m-`.
- Almacenamiento del estado. Si estás escribiendo un juego, entonces la posición del personaje, su salud, la puntuación y el nivel actual son variables que cambian constantemente.

## Las variables se crean a medida que se usan

En PHP no es necesario "declarar la variable de antemano": aparece en el momento en que almacenas un valor en ella por primera vez:

```php
<?php

$name = 'Arya'; // la variable se crea aquí
```

Si más tarde vuelves a escribir `$name = ...`, esto sobrescribirá el valor antiguo. Así funciona la mayoría de los lenguajes de programación modernos.

## Por qué esto es importante

Las variables representan una forma flexible de almacenar datos que pueden cambiar durante la ejecución del programa. Gracias a esto, se pueden escribir programas que se comportan de manera diferente según las condiciones, las acciones del usuario o los resultados de los cálculos.

Pero la flexibilidad también tiene su lado negativo. A veces es difícil entender de inmediato qué es exactamente lo que está almacenado en una variable en un momento u otro. El desarrollador tiene que rastrear dónde y cómo cambió, especialmente si el código es largo.

Esto es justamente lo que se hace durante la depuración: se intenta averiguar por qué el programa funciona de manera diferente a lo previsto. Se comprueban los valores de las variables, se rastrea el orden de ejecución del código y se busca dónde algo salió mal.
