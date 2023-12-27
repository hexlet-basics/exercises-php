
Write a function, `getHiddenCard()`, which takes a credit card number (consisting of 16 digits) as a string and returns a hidden version of it, which can be displayed on the website. If the original card had the number *2034399002125581*,  the hidden version will look like this: *\*\*\*\*5581*. In other words, the function replaces the first 12 digits with asterisks. The number of asterisks is specified by a second optional parameter.  The default value is 4.

```php
<?php

// The credit card number is passed as a string
getHiddenCard("1234567812345678", 2); // "**5678"
getHiddenCard("1234567812345678", 3); // "***5678"
getHiddenCard('1234567812345678'); // "****5678"
getHiddenCard('2034399002121100', 1); // "*1100"
```

To do this task, you need the [str_repeat()](https://www.php.net/manual/en/function.str-repeat.php), function, which repeats the string a specified number of times

```php
<?php

str_repeat('+', 5); // "+++++"
str_repeat('o', 3); // "ooo"
```
