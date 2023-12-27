El incremento y el decremento no son operaciones muy importantes en PHP y siempre se pueden evitar. La tarea de esta lección no está directamente relacionada con este tema, pero puede utilizar el incremento y el decremento para acostumbrarse a ellos. De lo contrario, este ejercicio es otro entrenamiento para trabajar con bucles, cadenas y condiciones.

Escriba una función `makeItFunny()` que tome una cadena como entrada y devuelva una copia de la cadena en la que cada elemento n-ésimo esté en mayúsculas. n se especifica como entrada a la función.

Para determinar cada elemento n-ésimo, se necesita el resto de la división `%`. Piense en cómo se puede utilizar.

```php
<?php

$text = 'I never look back';
// Cada tercer elemento
makeItFunny($text, 3); // 'I NevEr LooK bAck'
```
