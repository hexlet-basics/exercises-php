Programs work with different kinds of information: text, numbers, dates, lists, boolean values. Every value in a program has a type.

For example:

- "Hello, World!" is a string (`string`)
- 7, -198, 0 are integers (`int`)
- 3.14, -0.01, 1.0 are rational numbers (`float`)

## What is a data type?

A data type defines:

- which values belong to it;
- which operations can be performed with it.

For example, numbers can be added, divided, and multiplied. Strings, on the other hand, are joined differently: through concatenation. Multiplying a string by a string is meaningless and not allowed:

```php
// Not allowed: 'mom' * 'notepad'
```

A programming language recognizes types. That's why PHP won't let us multiply text by text, but it will let us multiply a number by a number. The presence of types and such restrictions in the language protects programs from accidental errors.

## Numbers and strings belong to different types

Unlike strings, numbers don't need to be wrapped in quotes. Here's an example of printing a number:

```php
<?php

print_r(5);  // => 5
print_r(-5); // => -5
```

Here's an example of printing a string:

```php
<?php

print_r('5');  // => 5
print_r('-5'); // => -5
```

On the screen the result looks the same, but inside the program these are completely different things:

| Value    | Data type           |
|----------|---------------------|
| `5`      | `int` (integer)     |
| `'5'`    | `string` (string)   |

The number `5` and the string `'5'` are different values, and operations with them work differently. That said, when types don't match, PHP often tries to convert one type into another on its own. How convenient this is and what makes it dangerous we'll look at a bit later in this module.

## Integers and rational numbers

PHP distinguishes between two kinds of numbers:

- `int` denotes integers: -3, 0, 7, 100000
- `float` denotes real (rational) numbers: 1.0, -3.14, 2.718

This division is due to the peculiarities of how computers are built — we talked about this in the lesson about floating-point numbers.

Example:

```php
<?php

print_r(10.234); // => 10.234
print_r(-0.4);   // => -0.4
```

They can hold fractional values and be used in calculations:

```php
<?php

print_r(3.5 + 1.2);  // => 4.7
print_r(5.0 / 2.0);  // => 2.5
print_r(2.75 - 0.5); // => 2.25
```

## Primitive types

Types such as:

- string,
- int (integer),
- float (rational number)

are called primitive: they are built right into the PHP language itself.

```text
PHP primitive types
├── int    : integers        (7, -3, 0)
├── float  : fractional numbers (3.14, -0.5)
├── string : strings         ('hello')
└── bool   : boolean type     (true, false)
```

Besides strings and numbers, PHP has the boolean type `bool` with the values `true` and `false`, as well as the special value `null`. We'll encounter them in more detail in the future.

There are also composite types: arrays, objects, and others. We'll get to know them later. Moreover, in PHP you can create your own types (for example, classes), but first it's important to get a good grasp of the primitives.

## Strings and lines

In English, strings in programming are called **strings**, while lines of text files are called **lines**. In Russian there can be confusion, so throughout the lessons we'll say "строка" for the "string" data type and "строчка" for lines in files.
