
En esta lección, deberás implementar dos funciones: `isPalindrome()` y `isNotPalindrome()`

1. La función `isPalindrome()` determina si una palabra es un palíndromo o no. Un palíndromo es una palabra que se lee igual en ambas direcciones.

    ```php
    <?php

    isPalindrome('wow'); // true
    isPalindrome('mom'); // true
    isPalindrome('hexlet'); // false

    // Las palabras pueden ser pasadas a la función en cualquier caso
    // Por lo tanto, primero debes convertir la palabra a minúsculas con strtolower()
    isPalindrome('Wow'); // true
    ```

    Para invertir una palabra, utiliza la función `strrev()`.

2. La función `isNotPalindrome()` verifica que una palabra NO sea un palíndromo:

    ```php
    <?php

    isNotPalindrome('wow'); // false
    isNotPalindrome('mom'); // false
    isNotPalindrome('hexlet'); // true
    ```

    Para hacer esto, llama a la función `isPalindrome()` dentro de `isNotPalindrome()` y aplica la negación.
