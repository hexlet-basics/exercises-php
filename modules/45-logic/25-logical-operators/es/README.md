Las expresiones lógicas pueden combinarse entre sí para crear verificaciones más complejas.

Un buen ejemplo es la verificación de contraseñas. Como sabes, algunos sitios web requieren contraseñas de entre 8 y 20 caracteres de longitud.

En matemáticas, escribiríamos `8 >= x <= 20`, donde `x` es la longitud de una contraseña específica. Pero en PHP, este truco no funciona.

Tendremos que hacer dos expresiones lógicas separadas y combinarlas con el operador especial "Y":

```php
<?php

function tieneCaracteresEspeciales($str)
{
    // Verifica si la cadena contiene caracteres especiales
}

// La función recibe una contraseña y verifica si cumple con las condiciones
function esContraseñaCorrecta($contraseña)
{
    $longitud = strlen($contraseña);
    // Los paréntesis establecen la prioridad para mostrar a qué se refiere cada parte
    return ($longitud >= 8 && $longitud <= 20) && tieneCaracteresEspeciales($contraseña);
}

esContraseñaCorrecta('qwerty'); // false
esContraseñaCorrecta('qwerty1234'); // true
esContraseñaCorrecta('zxcvbnmasdfghjkqwertyui'); // false
```

El operador `&&` significa "Y" - en lógica matemática esto se llama **conjunción**. La expresión completa se considera verdadera solo si cada operando es verdadero, es decir, cada una de las expresiones compuestas. En otras palabras, `&&` significa "y esto, y aquello". La prioridad de este operador es menor que la de los operadores de comparación, por lo que la expresión funciona correctamente sin paréntesis.

Además de `&&`, se utiliza frecuentemente el operador `||` - "O" (**disyunción**). Significa "o esto, o aquello, o ambos". Los operadores se pueden combinar en cualquier cantidad y en cualquier secuencia, pero cuando se encuentran `&&` y `||` al mismo tiempo, es mejor establecer la prioridad con paréntesis.

El área de las matemáticas que estudia los operadores lógicos se llama álgebra booleana. A continuación, verás las **tablas de verdad** - a partir de ellas se puede determinar el resultado al aplicar los operadores:

### Y `&&`

| A     | B     | A `&&` B |
| ----- | ----- | -------- |
| TRUE  | TRUE  | **TRUE** |
| TRUE  | FALSE | FALSE    |
| FALSE | TRUE  | FALSE    |
| FALSE | FALSE | FALSE    |

### O `||`

| A     | B     | A `‖` B  |
| ----- | ----- | -------- |
| TRUE  | TRUE  | **TRUE** |
| TRUE  | FALSE | **TRUE** |
| FALSE | TRUE  | **TRUE** |
| FALSE | FALSE | FALSE    |
