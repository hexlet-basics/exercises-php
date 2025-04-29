En esta lección vamos a escribir nuestro primer programa. Aprenderemos qué comandos se necesitan y qué etiquetas se deben utilizar para que el programa que ejecuta el código lo interprete correctamente. También aprenderemos por qué son necesarios los comentarios en el código.

## Cómo escribir un programa simple

Hay dos formas de escribir un programa y mostrar el resultado en la pantalla:

* Usando el comando `echo`
* Usando la función `print_r()`

Veamos cada una en detalle.

### Escribir un programa usando `echo`

Vamos a escribir un programa que muestre "¡Hola, Mundo!" en la pantalla:

```php
<?php

echo '¡Hola, Mundo!';
// => ¡Hola, Mundo!
```


La salida en la pantalla se realiza utilizando el comando especial `echo`. Después de él, se especifica la cadena a mostrar entre comillas simples. Al final, es importante colocar un punto y coma.

Para mayor comodidad, mostraremos el resultado de la ejecución del código de esta manera: `=> RESULTADO`.

### Escribir un programa usando `print_r()`

Otra forma de mostrar una cadena en la pantalla es utilizando la función `print_r()`:

```php
<?php

print_r('¡Hola, Mundo!');
// => ¡Hola, Mundo!
```


En este caso, la cadena se especifica entre paréntesis justo después del nombre de la función. Al final, también es necesario colocar un punto y coma.

En situaciones simples, no hay diferencia entre estas dos construcciones. Puedes usar cualquier método. Sin embargo, cuando necesitas mostrar en la pantalla algo más que números o cadenas, por ejemplo, matrices, `echo` no podrá hacerlo, pero `print_r()` sí.
