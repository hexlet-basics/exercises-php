In PHP, you can pass any values into a function. Sometimes this makes the code harder to understand: it is not always clear what exactly a function expects and what it returns. To make code clearer, PHP provides **type declarations** (also called type annotations or type hints). With their help, you can explicitly state which values a function accepts and what result it returns. This solves several problems at once:

- We improve the code editor experience, getting hints, better autocompletion, and so on.
- We help AI agents see the structure faster and make more correct decisions, minimizing accidental mistakes.
- It becomes possible to check program correctness without running it, through static analysis. Such a check does not guarantee that the program's logic is written correctly, but at least it will not contain type errors.

## How to specify parameter types

A type declaration describes two elements. Parameter types are specified right in the function definition, before the name of each parameter. The return type is specified after the parameter list, separated by a colon.

Let's look at an example of a function that calculates the sum of two passed values:

```php
<?php

function add(int $a, int $b): int
{
    return $a + $b;
}

print_r(add(2, 3)); // => 5
```

```text
function concat(string $a, string $b): string
                │         │            │
                │         │            └── return type
                │         └── type of parameter $b
                └── type of parameter $a
```

Now the code editor will suggest that the function `add()` accepts two numbers and returns a number. If you try to pass an unsuitable value, the editor will highlight it as a problem and warn you.

By the way, you have already seen such notation. In the lesson about optional parameters, we examined the signature of the `round()` function from the documentation — `round(int|float $num, int $precision = 0): float`. These are type declarations.

## Types are checked at runtime

Unlike many languages, PHP not only suggests types to the editor but also checks them while the program runs. If you pass a value of an incompatible type, the program will terminate with a `TypeError`:

```php
<?php

add('abc', 3);
// TypeError: add(): Argument #1 ($a) must be of type int, string given
```

At the same time, PHP remains a weakly typed language, and it automatically coerces compatible values. The string `'2'` looks like a number, so this call will work:

```php
<?php

add('2', 3); // => 5
```

This is the same behavior we examined in the lesson about weak typing.

## Which types are used in declarations

At this stage, it is enough to know the declarations for simple, primitive data types:

- `int` for integers, `float` for floating-point numbers
- `string` for strings
- `bool` for boolean values (true or false)

```php
<?php

function describe(string $name, int $age, float $height): string
{
    return "{$name}, {$age} years old, height {$height}";
}

print_r(describe('Anna', 25, 1.70));
// => Anna, 25 years old, height 1.7
```

If a function does not return anything, then `void` is specified as the return type. For example, a function may only print text to the screen:

```php
<?php

function printGreeting(string $name): void
{
    print_r("Hello, {$name}!");
}

printGreeting('Anna');
// => Hello, Anna!
```

## An example with default parameters

Type declarations work the same way both for required parameters and for those that have a default value. First comes the type, then the parameter name, and through `=` the default value:

```php
<?php

function greet(string $name, string $greeting = 'Hello'): string
{
    return "{$greeting}, {$name}";
}

print_r(greet('Anna'));         // => Hello, Anna
print_r(greet('Kirill', 'Hi')); // => Hi, Kirill
```

In this example, `$name` is a required parameter, and `$greeting` has a default value. The declarations show the types of both parameters and of the returned result.

## Type declarations and code checking

Besides checking at runtime, there are tools for **static code analysis**, that is, checking performed without running the program. "Static" means the check happens before the program is run. The tool reads the source code and verifies whether the passed values match the specified types. For example, if a function accepts a string and you pass a number, static analysis will show this as an error.

It is especially convenient when such errors are highlighted by the editor right while you are writing code. This lets you see the problem immediately and fix it without waiting for the program to run. Thanks to this, many unexpected errors are caught in advance, and there are fewer of them in working code.

Type declarations are not mandatory. Functions can be written without them, and PHP will still work. But when the declarations are there, the code becomes clearer for people and more convenient for editors. Specifying types in your code is considered a good practice.
