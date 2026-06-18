When we write programs, we need to connect actions with one another. Adding numbers, joining strings, and working with variables are examples of how simple steps can be combined to produce more complex behavior.

```php
<?php

$rate = 10;
$hours = 5;
$salary = $rate * $hours + 100;
print_r($salary); // => 150
```

In programming, the concept of an **expression** is used for this. It denotes a construct that is evaluated and produces a result. In the example above, `$rate * $hours + 100` is an expression made up of variables (`$rate`, `$hours`), a numeric literal (`100`), and arithmetic operations. Together it returns a result that can be saved in a variable or used further.

What does this knowledge give us? We understand that expressions can be combined endlessly, gradually building up more complex logic. Each new expression becomes part of a larger one:

```php
<?php

$bonus = 50;
// An expression made of many operations
$salary = ($rate * $hours + $bonus) * 12 - 500;
print_r($salary);
```

Here several expressions are combined into one, and the result has become even more complex. This is exactly how programs are built. Small steps add up into large constructs. That's why in programming it's impossible to memorize all the combinations in advance. It's much more important to understand how expressions connect with one another into the result you need.

## Expressions as function arguments

A function argument is always some value. But a value can not only be written directly, it can also be computed. And that means any expression can be substituted into a function's arguments.

```php
<?php

// Here the argument of the print_r function is the number 150
print_r(150);

// And here the argument is an expression that is evaluated first
print_r(10 * 15); // => 150

// You can combine things in even more complex ways
$rate = 10;
$hours = 15;
$bonus = 50;
print_r($rate * $hours + $bonus); // => 200
```

The `print_r()` function simply receives a ready value and prints it to the screen. The function doesn't care how this value was obtained. That is exactly why function calls combine perfectly with any expressions.

## Calling a function inside a function

Since a function call is itself an expression, its result can be passed directly to another function. This lets you build even more complex constructs.

```php
<?php

$name = 'python';

// The call strlen($name) returns 6
// This result is immediately used as the argument of print_r()
print_r(strlen($name)); // => 6
```

Here `strlen($name)` is evaluated first and returns the number 6. Then this value is substituted into the call `print_r()`. Such a combination can be as deep as you like. The result of one function can be passed to another, then to the next.

To read such constructs correctly, you need to remember the order of the calls.

1. First the function that is "inside" runs, in our case `strlen($name)`.
2. Then its result is substituted in place of the call.
3. After that the outer function runs, in this case `print_r()`.

Thus, the code `print_r(strlen($name))` can be mentally broken down like this:

```text
print_r(strlen('python'))

Step 1:  strlen('python')  →  6
Step 2:  print_r(6)        →  prints 6
```

1. `strlen($name)` → `6`
2. `print_r(6)`
3. `6` appears on the screen.

This principle always works. First the nested calls are evaluated, then the outer one.

## Using functions as part of expressions

Functions return values, which means their calls can be used as arguments of other functions and as part of any other expressions.

```php
<?php

$name = 'python';

// The call strlen($name) returns 6
// We subtract 1 to get the index of the last character
$lastIndex = strlen($name) - 1;
print_r($lastIndex); // => 5

// You can use the result of a function in arithmetic
$text = 'hexlet';
$double = strlen($text) * 2;
print_r($double); // => 12
```

Here the calls `strlen($name)` and `strlen($text)` are full-fledged expressions. They return values that can be combined with numbers, variables, and other operations.
