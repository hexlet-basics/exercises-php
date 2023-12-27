The functions we defined in the previous lessons ended up printing some data on the screen:

```php
<?php

function greeting()
{
    print_r('Hello, Hexlet!');
}
```

These functions aren't super useful since the results can't be used inside the program. Let's look at an example.

Let's say we're processing an email address. When a user registers on any site, they can enter an email in any way they want:

* They might accidentally add spaces at the beginning or end `_support@hexlet.io__`
* Or use letters in different cases `SUPPORT@hexlet.io`

If we save it to the database in this way, the user most likely won't be able to log into the site because they'll enter the address without spaces and with a different character case. To avoid this, the email should be prepared to be written to the database, it should be brought to lower case, and the spaces should be trimmed from either side of the string.. The whole problem can be solved in a couple of lines:

```php
<?php

function saveEmail()
{
    $email = "  SuppORT@hexlet.IO";
    // trimming whitespace characters
    $trimmedEmail = trim($email);
    $preparedEmail = strtolower($trimmedEmail);
    print_r($preparedEmail);
    // the database entry goes here
}
```

This code was made possible only by us returning a value The `trim()` and `strtolower()` functions don't print anything to the screen (in the console), they return the result of their work, so we can write it into variables. If they printed to the screen instead, we wouldn't be able to assign the result of their work to a variable. Which we can't do with the `greeting()` function defined above:

```php
<?php

$message = greeting();
// To see null, use var_dump()
var_dump($message); // => NULL
```

Let's change the `greeting()` function so that it starts returning data instead of printing it. To do this, we need to return instead of printing to the screen

```
<?php

function greeting()
{
    return 'Hello, Hexlet!';
}
```

`return` is a special instruction that takes the expression written on the right and passes it outside to the code that called the method. As soon as PHP encounters `return`, the function is terminated.

```php
<?php

// Now we can use the result of the function
$message = greeting();
print_r($message); // => 'Hello, Hexlet!'
// And even perform some actions on the result
print_r(strtoupper($message)); // => 'HELLO, HEXLET!'
```

Any code after return isn't executed:

```php
<?php

function greeting()
{
    return 'Hello, Hexlet!';
    print_r('I will never be executed');
}
```

Even if the function returns data, this doesn't limit what it prints. In addition to returning data, we can also print:

```php
<?php

function greeting()
{
    print_r('I will appear in the console');
    return 'Hello, Hexlet!';
}
// And it prints the text on the screen and return the value
$message = greeting();
```

You can print more than just a specific value. Since `return` works with expressions, almost anything can appear to the right of it. Here we should stick to the principles of code readability:

```php
<?php

function greeting()
{
    $message = 'Hello, Hexlet!';
    return $message;
}
```

Here we don't return a variable, we always return the value that's in that variable. Below is an example with calculations:

```php
<?php

function doubleFive()
{
    // or return 5 + 5
    $result = 5 + 5;
    return $result;
}
```

Self-check. What will this code print?

```php
<?php

// Definition
function run()
{
    // or return 5 + 5
    return 5;
    return 10;
}

// Usage
run(); // => ?
```
