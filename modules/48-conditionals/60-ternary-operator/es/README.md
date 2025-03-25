Echa un vistazo a la definición de una función que devuelve el módulo de un número:

```php
<?php

function abs($number)
{
    if ($number >= 0) {
        return $number;
    }

    return -$number;
}

abs(10);  // 10
abs(-10); // 10
```

¿Se puede escribir de forma más concisa? Algo como `return RESPUESTA DEPENDIENDO DE LA CONDICIÓN`. Para esto, la expresión a la derecha de `return` debe ser una expresión. Pero hay un problema: `if` es una instrucción, no una expresión.

En PHP existe una construcción que tiene un efecto similar a la construcción *if-else*, pero es una expresión. Se llama **operador ternario**, y es lo que vamos a estudiar en esta lección.

El **operador ternario** es el único operador de su tipo que requiere tres operandos:

```php
<?php

function abs($number)
{
    return $number >= 0 ? $number : -$number;
}
```

El patrón general se ve así:

```text
<predicado> ? <expresión si verdadero> : <expresión si falso>
```

![Operador ternario](../assets/ternary-operator.png)

Vamos a reescribir la función `getTypeOfSentence()` de la misma manera. Veamos cómo era antes:

  ```php
  <?php

  function getTypeOfSentence($sentence)
  {
      $lastChar = substr($sentence, -1);

      if ($lastChar === '?') {
          return 'question';
      }

      return 'normal';
  }
  ```

  Y ahora, cómo quedó:

  ```php
  <?php

  function getTypeOfSentence($sentence)
  {
      $lastChar = substr($sentence, -1);

      return ($lastChar === '?') ? 'question' : 'normal';
  }

  getTypeOfSentence('Hodor');  // normal
  getTypeOfSentence('Hodor?'); // question
  ```

Es posible anidar operadores ternarios dentro de otros operadores ternarios. Sin embargo, no es recomendable hacerlo. Este tipo de código es difícil de leer y depurar, por lo que los operadores ternarios anidados se consideran una mala práctica.
