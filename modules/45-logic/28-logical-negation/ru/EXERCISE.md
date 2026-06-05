
В игре со словами участники проверяют, является ли слово палиндромом. Реализуйте две функции `isPalindrome()` и `isNotPalindrome()`, принимающие строку на вход

1. Функция `isPalindrome()` определяет, является ли слово палиндромом или нет. Палиндром — это слово, которое читается одинаково в обоих направлениях.

    ```php
    <?php

    isPalindrome('wow'); // true
    isPalindrome('mom'); // true
    isPalindrome('hexlet'); // false

    // Слова в функцию могут быть переданы в любом регистре
    // Поэтому сначала нужно привести слово в нижний регистр strtolower()
    isPalindrome('Wow'); // true
    ```

    Для того чтобы развернуть слово задом наперёд используйте функцию `strrev()`.

2. Функция `isNotPalindrome()` проверяет что слово НЕ является палиндромом:

    ```php
    <?php

    isNotPalindrome('wow'); // false
    isNotPalindrome('mom'); // false
    isNotPalindrome('hexlet'); // true
    ```

    Для этого, вызовите функцию `isPalindrome()` внутри `isNotPalindrome()` и примените отрицание.
