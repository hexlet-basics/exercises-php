
In a word game, players check whether a word is a palindrome. Implement two functions `isPalindrome()` and `isNotPalindrome()` that take a string as input

1. The `isPalindrome()` function determines whether a word is a palindrome or not. A palindrome is a word that reads the same in both directions.

    ```php
    <?php

    isPalindrome('wow'); // true
    isPalindrome('mom'); // true
    isPalindrome('hexlet'); // false

    // Words can be passed to the function in any case
    // Therefore, you must first convert the word to lowercase with strtolower()
    isPalindrome('Wow'); // true
    ```

    To reverse a word, use the `strrev()` function.

2. The `isNotPalindrome()` function checks that a word is NOT a palindrome:

    ```php
    <?php

    isNotPalindrome('wow'); // false
    isNotPalindrome('mom'); // false
    isNotPalindrome('hexlet'); // true
    ```

    To do this, call the `isPalindrome()` function inside `isNotPalindrome()` and apply negation.
