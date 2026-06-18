Up to this point we have only used ready-made functions: `print_r()`, `strlen()`, `round()`, and others. But in PHP you can create your own functions, and now it is time to learn how to do that.

## Why define functions

Suppose we have several similar pieces of code:

```php
<?php

print_r("Hello, Hexlet!\n");
print_r("Hello, world!\n");
print_r("Hello, PHP!\n");
```

To avoid repeating the same template, we can wrap it in our own function that takes one parameter and prints the needed line to the screen:

```php
<?php

function sayHello($name)
{
    print_r("Hello, {$name}!\n");
}
```

Now we can call it with different arguments:

```php
<?php

sayHello('Hexlet'); // => Hello, Hexlet!
sayHello('world');  // => Hello, world!
sayHello('PHP');    // => Hello, PHP!
```

It may seem that the amount of code did not get smaller, but something else appeared. If this function is used in different places, then when we need to change the text, it is enough to fix only the function definition. And the more complex the task is and the more often it is used in different places, the more important it is to extract the logic into your own functions.

Defining your own functions greatly simplifies maintaining programs, also because it lets you combine complex operations into a single one. For example, sending an email on a website is a fairly complex process that includes interaction with external systems. But all that complexity can be hidden behind one simple function `send($email, $title, $body)`. One small call, and a lot of logic inside.

## Definition syntax

```php
function functionName(parameters)
{
    body
}
```

```text
function greet($name)             ← keyword, function name, and parameter
{
    return 'Hello, ' . $name;     ← function body
}
```

The keyword `function` begins the definition. In `functionName`, any name is allowed, like a variable (but without the `$` sign); the parentheses list the parameters separated by commas. The function body is enclosed in curly braces, and inside you write ordinary PHP code.

Unlike ordinary data, functions perform actions, so their names should almost always be verbs: "build something", "draw something", "open something".

Curly braces show which code belongs to the function body. Look at the example:

```php
<?php

function sayHi()
{
    print_r('Hi!');
}

print_r('The program continues…');
```

Here the function `sayHi()` is defined, but **`print_r('The program continues…')`** does not belong to the function, since it is outside the curly braces. It will be executed right away when the program starts, regardless of whether `sayHi()` is called. The definition itself does not call or execute the function; we only say that such a function now exists.

For `sayHi()` to run, it must be called explicitly:

```php
<?php

function sayHi()
{
    print_r('Hi!');
}

sayHi(); // => Hi!
print_r('The program continues…');
```

The body is executed at the moment the function is run. Moreover, each function call runs the body independently of other calls. The body can even be empty:

```php
<?php

// Minimal definition of a function that does nothing
function noop() {}

noop(); // There is a call, but no point
// Such a function can also be useful,
// but that belongs to advanced topics
```

## Example: a function that prints the arithmetic mean

Now we will implement a simple function that **computes and prints the arithmetic mean** of two numbers. The arithmetic mean is the sum of the numbers divided by their count. For example, the mean of 6 and 4 is computed like this: `(6 + 4) / 2 = 5`.

```php
<?php

function printAverage($a, $b)
{
    $total = $a + $b;
    $average = $total / 2;
    print_r($average);
}

printAverage(6, 4); // => 5
```

Here `$a` and `$b` are the input parameters, `$total` holds their sum, `$average` is obtained by dividing the sum by 2, and `print_r()` outputs the result.

When `printAverage(6, 4)` is called, `5` is printed to the screen.

## Reuse and readability

Functions help avoid duplication and make programs more understandable. The name of a function by itself tells you what it does. This is especially important in large projects, where the code is read by other programmers (or by you a month later).

By the way, creating a function is also called realization, definition, and implementation. Such words are often encountered in practice.
