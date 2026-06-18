Implement a function `getHiddenCard()` that takes a credit card number (consisting of 16 digits) as a string and returns a hidden version of it, which can be used on a website for display. If the original card had the number *2034399002125581*, then the hidden version looks like this: *\*\*\*\*5581*. In other words, the function replaces the first 12 characters with asterisks. The number of asterisks is controlled by a second, optional parameter. The default value is 4.

```php
<?php

// The credit card is passed in as a string
// The second parameter isn't passed, so there will be 4 asterisks
getHiddenCard('1234567812345678'); // "****5678"

getHiddenCard('1234567812345678', 2); // "**5678"
getHiddenCard('1234567812345678', 3); // "***5678"

// Or using variables
$cardNumber = '2034399002121100';
getHiddenCard($cardNumber); // "****1100"
getHiddenCard($cardNumber, 1); // "*1100"
```

To complete this task, you'll need the [str_repeat()](https://www.php.net/manual/en/function.str-repeat.php) function, which repeats a string a specified number of times:

```php
<?php

str_repeat('+', 5); // "+++++"
str_repeat('o', 3); // "ooo"
```
