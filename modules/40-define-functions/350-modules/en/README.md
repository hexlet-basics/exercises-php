While a program is small, all the code can be kept in a single file. This approach is convenient for simple examples and small tasks. But over time the program starts to grow. When there is a lot of code, it becomes hard to navigate a single file. Meanwhile, real applications consist of tens of thousands of lines (at the very least) and hundreds of files.

To split a program into separate logical parts, the code is spread across files. In many languages such files are called modules. In PHP a module is just an ordinary file with code and the `.php` extension. And the language provides a mechanism for accessing functions and constants from other files — file inclusion.

## How to include a file

The `require` statement includes the specified file and makes its contents available:

```php
<?php
// helpers.php

function sayHi(): void
{
    print_r('Hi!');
}
```

```php
<?php
// Solution.php

require 'helpers.php';

sayHi(); // => Hi!
```

After inclusion, all functions from the `helpers.php` file are available as if they had been defined right in the current file.

By the way, you have already seen this mechanism in action. The automated tests in this course include the file with your solution using the line `require 'Solution.php';` — and after that they can call the functions you defined.

## require, include, and require_once

`require` has a twin — the `include` statement. The difference shows up when the included file is not found: `include` will print a warning and the program will keep running, while `require` will halt execution with an error. If the program makes no sense without the included code, you use `require`.

There is also a third option — `require_once`. It includes a file only once, even if the statement appears multiple times in the program. This is important for files with functions: redefining a function with the same name leads to an error.

## Built-in functions are available without inclusion

PHP's standard library is arranged more simply than in many other languages: built-in functions are available anywhere in the program right away, without any inclusion. For example, the rounding functions: `floor()` rounds a number down to the nearest integer, and `ceil()` rounds up:

```php
<?php

print_r(floor(7.9)); // => 7
print_r(ceil(7.1));  // => 8
print_r(ceil(7.0));  // => 7
```

The difference is noticeable when the number is not an integer. `floor(7.9)` gives 7, not 8, because 7 is the nearest integer below.

Built-in functions are, of course, also available inside the body of your own functions:

```php
<?php

// Calculates the number of trips needed to transport all the items
function tripsNeeded(int $items, int $capacity): int
{
    return (int) ceil($items / $capacity);
}

print_r(tripsNeeded(10, 3)); // => 4
```

Note that `ceil()` returns a value of type `float`, so the result is cast to `int` — just as we did in the lesson about type conversion.

## Name conflicts

In large programs, different parts of the code may contain functions with the same names. In PHP you cannot define two functions with the same name in one space — the program will terminate with a `Cannot redeclare function` error.

To fight name conflicts, PHP has **namespaces**. You have seen them at the beginning of every task in this course — the line `namespace HexletBasics\...;` is exactly what declares a namespace. Thanks to them, we can create as many functions with the same names as we want, the main thing is that they reside in different namespaces. This works even with built-in functions:

```php
<?php

namespace App\Custom;

function floor(float $number): string
{
    return 'custom floor';
}

print_r(floor(3.7));  // => custom floor
print_r(\floor(3.7)); // => 3
```

Inside the `App\Custom` namespace, the name `floor` refers to our function. The built-in function has not gone anywhere — it is available by its full name `\floor()`, where the backslash means the global namespace. This is especially important when using third-party libraries, because different developers may choose the same names for functions. Namespaces are studied in detail further on at Hexlet.
