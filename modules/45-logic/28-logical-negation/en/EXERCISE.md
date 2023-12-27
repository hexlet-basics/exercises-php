
In this lesson, you'll need to implement the two functions `isPalindrome()` and `isNotPalindrome()`

1. The `isPalindrome()` function determines whether a word is a palindrome or not. A palindrome is a word that reads the same backwards as it does forwards.

    ```php
    <?php

    isPalindrome('wow'); // true
    isPalindrome('mom'); // true
    isPalindrome('hexlet'); // false

    // You can pass upper and lower-case letters to the function
    // Therefore, you must first convert the word to lowercase strtolower()
    isPalindrome('Wow'); // true
    ```

    To flip a word, use the `strrev()` function.

2. The `isNotPalindrome()` function checks that the word is NOT a palindrome:

    ```php
    <?php

    isNotPalindrome('wow'); // false
    isNotPalindrome('mom'); // false
    isNotPalindrome('hexlet'); // true
    ```

    All you need is to negate the `isPalindrome()` function call within the `isNotPalindrome()` function's body.
