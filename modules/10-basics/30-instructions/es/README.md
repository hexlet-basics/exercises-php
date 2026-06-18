Podemos llamar instrucción al comando `print_r('Hexlet')`; le indica al intérprete de PHP qué debe hacer. Puede haber tantas instrucciones como se quiera. Cada una de ellas se ejecuta después de que haya terminado la anterior, y así, a partir de elementos simples, obtenemos un programa arbitrariamente grande y complejo.

```text
Instrucción 1: print_r('Hello')   →  ejecutada
        ↓
Instrucción 2: print_r('World')   →  ejecutada
        ↓
Instrucción 3: print_r('!')       →  ejecutada
```

El código en PHP es un conjunto de instrucciones separadas entre sí por el símbolo `;`. Aquí tienes un ejemplo de código con dos instrucciones. Estas líneas le indican a la computadora que muestre frases en pantalla.

```php
<?php

print_r('Mother of Dragons. '); // Primera instrucción
print_r('Dracarys!'); // Segunda instrucción
```

Resultado de la ejecución:

```text
Mother of Dragons. Dracarys!
```

Ten en cuenta: las frases se mostraron una tras otra en la misma línea. El comando `print_r()` muestra el texto y no añade nada por su cuenta, por eso no aparece ningún salto de línea.

## El orden importa

El intérprete de PHP ejecuta el código estrictamente en el orden en que lo escribiste. Si intercambias las líneas:

```php
<?php

print_r('Dracarys!');
print_r('Mother of Dragons. ');
```

en pantalla también se intercambiarán:

```text
Dracarys!Mother of Dragons. 
```

## Forma alternativa de escritura

Normalmente las instrucciones se escriben en líneas separadas, pero como las instrucciones en PHP se separan con el símbolo `;`, el salto de línea no es obligatorio. Varias instrucciones se pueden escribir en una sola línea:

```php
<?php

print_r('Mother of Dragons. '); print_r('Dracarys!');
```

Ambas versiones funcionan de la misma manera, pero la segunda es más difícil de leer. Por eso las instrucciones casi siempre se escriben una por línea.

## Para qué sirve esto

Ahora escribimos programas muy simples, pero con el tiempo empezarán a complicarse, y una de las habilidades más importantes que te ayudará a entenderlos es la capacidad de descomponer (mentalmente) un programa en instrucciones independientes. Solo así se puede comprender lo que ocurre en el código. A continuación, un ejemplo para llamar tu atención; todavía no necesitas entenderlo:

```php
<?php

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $divider = 2;

    while ($divider <= $number / 2) {
        if ($number % $divider == 0) {
            return false;
        }

        $divider = $divider + 1;
    }

    return true;
}
```
