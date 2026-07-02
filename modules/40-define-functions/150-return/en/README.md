The functions we defined in the previous lesson ended their work by printing some data to the screen. Such functions are not very useful, because their result cannot be used inside the program. In this lesson, we will learn how to write functions that **return values**. Such functions answer a question and hand over the result of their work, as if to say: "Here you go, I've done the math."

For example, a function can return a string with processed text or a number computed by a formula. The returned value can be used further. It is stored in a variable, passed to another function, or printed to the screen.

For a function to hand over a result, it uses a special keyword `return`. It ends the function's execution and indicates exactly what should be returned.

Here is an example of a function that makes text uppercase:

```php
<?php

function shout($name)
{
    return strtoupper($name);
}
```

We call `shout()`, pass a name into it, and get a string in uppercase. This string is the result of the function:

```php
<?php

$result = shout('hexlet');
print_r($result); // => HEXLET

$result2 = shout('code-basics');
print_r($result2); // => CODE-BASICS
```

Unlike `print_r()`, `return` does not print anything. It just returns a value. The decision about what to do with it is made by the calling code.

When the function `shout('hexlet')` is called, the expression `strtoupper($name)` is evaluated first. It returns the string `'HEXLET'`. Then `return` hands this value out, to the place from which the function was called. In our case this value is stored in the variable `$result`, and then printed to the screen via `print_r()`.

And what does a function without `return` return? Let's check with the function from the previous lesson that only prints text:

```php
<?php

function greeting()
{
    print_r('Hello, Hexlet!');
}

$message = greeting();
// To see null, you need to use the var_dump() function
var_dump($message); // => NULL
```

A function without a return always returns `null` — a special value that means "there is nothing".

## Returning a Computed Expression

Functions are not required to just return a parameter. Usually, `return` is given an **expression** that is first evaluated, and then the result is handed out.

```php
<?php

function fullName($first, $last)
{
    return ucfirst($first) . ' ' . ucfirst($last);
}
```

In this example, we build the full name from the first and last name. The `ucfirst()` function makes the first letter of a string uppercase. First, both `ucfirst()` calls are executed, then the strings are joined with `.`, and the ready string is returned:

```php
<?php

$name = fullName('aria', 'stark');
print_r($name); // => Aria Stark
```

You can also return the value of a variable. Here you should be guided by the principles of code readability:

```php
<?php

function greeting()
{
    $message = 'Hello, Hexlet!';
    return $message;
}
```

We do not return the variable itself. What is always returned is the value that is in that variable.

## Multiline Functions

Sometimes you need to perform several steps inside the function body before getting the result. In such cases, several lines of code are written, and at the end `return` is used to return the final value.

For example, let's write a function that formats a name: it removes the spaces at the edges and converts all letters to uppercase.

```php
<?php

function formatName($name)
{
    $clean = trim($name);
    $uppercased = strtoupper($clean);
    return $uppercased;
}
```

First we remove the spaces using the `trim()` function, then convert to uppercase using `strtoupper()` and return the final value:

```php
<?php

print_r(formatName('  hexlet  ')); // => HEXLET
```

Code like this is encountered in real programs all the time. For example, when a user registers on a site, they may enter an email with extra spaces or letters in different cases: `  SuppORT@hexlet.IO`. Before writing such an email to the database, it is prepared in exactly the same way: whitespace characters are trimmed and it is converted to lowercase.

## Code After `return`

When PHP reaches the `return` statement, the function's execution stops. Everything written after it inside the function **will not be executed**:

```php
<?php

function greeting()
{
    return 'Hello, Hexlet!';
    print_r('I will never run');
}
```

That is why `return` is always written at the end of the logic. However, there can be many such ends inside a function. We will touch on this in more detail when we get to conditional constructs.

Even if a function returns data, this does not limit it in what it prints. In addition to returning data, we can also print:

```php
<?php

function greeting()
{
    print_r('I will appear in the console');
    return 'Hello, Hexlet!';
}

// It will both print the text to the screen and return the value
$message = greeting();
```

A self-check question. What will this function call return?

```php
<?php

// Definition
function run()
{
    // Return
    return 5;
    return 10;
}

// Usage
run(); // => ?
```
