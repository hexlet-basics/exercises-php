Imagine you need to print the phrase Father! twice:

```php
<?php

print_r('Father!');
print_r("\n");
print_r('Father!');
```

This approach is fine if the phrase appears just a couple of times. But what if it's used often, in different parts of the program? Then you'll have to copy the same expression over and over again.

And what happens if the phrase needs to change, for example, replacing _Father!_ with _Mother!_? You'd have to find and fix all the occurrences manually. This is inconvenient and leads to errors.

## Variables

To avoid duplicating the same string, you can store it in a variable and print its contents:

```php
<?php

$greeting = 'Father!';

print_r($greeting);
print_r("\n");
print_r($greeting);
```

Result:

```text
Father!
Father!
```

A **variable** is a name behind which a value is stored. In our example, we created a variable named `$greeting` and wrote the string `'Father!'` into it.

```text
$greeting = 'Father!';

Variable         Value
┌───────────┐    ┌──────────┐
│ $greeting │ ──→│ 'Father!'│
└───────────┘    └──────────┘
```

The line `$greeting = 'Father!'` reads like this: "take the value `'Father!'` and assign it to the variable named `$greeting`". The `=` sign here is the assignment operator, not a symbol of equality as in mathematics. It puts a value into a variable.

When we write `print_r($greeting)`, the interpreter substitutes the value stored in it for the name `$greeting`. As a result, the string `'Father!'` is printed to the screen.

```text
print_r($greeting)
        |
        v
print_r('Father!')
```

## Variable names

The programmer comes up with variable names. In PHP, a variable name always begins with the `$` sign, and after that you can use:

- Latin letters (a-z, A-Z),
- digits (but not at the beginning),
- underscore _.

Examples of valid names: `$greeting`, `$name1`, `$helloWorld`. PHP distinguishes between lowercase and uppercase letters. The variables `$greeting`, `$Greeting`, and `$GREETING` are three different variables.

## Variables and literals

In code, it's important to distinguish where we use a variable and where we write a value directly. This is especially noticeable in the example with `print_r()`:

```php
<?php

$greeting = 'Mother!';
print_r($greeting);  // => Mother!
print_r('greeting'); // => greeting
```

In the first case, the **variable** `$greeting` is used, and the program substitutes its value. In the second case, `'greeting'` is enclosed in quotes, so it's a **string literal**, that is, a ready-made value written directly in the code. Here the `$` sign helps to distinguish them, but from the interpreter's point of view, these are absolutely different things in any case.

Literals are data written explicitly (for example, `'Hello'`, `42`, `3.14`). Identifiers are the names of variables and functions (for example, `$greeting`, `print_r`) that point to already existing values or commands.

## Order of use

A variable must first be created (assigned a value), and only then used. If you try to access a variable before it's created, the program will issue a warning, and instead of a value it will substitute "emptiness" — `null`:

```php
<?php

print_r($name); // Warning: the variable is not defined yet
// Warning: Undefined variable $name
$name = 'Alice';
```

This error is called "accessing an undeclared variable". It's quite easy to fix, because the warning text clearly states which variable is being used before declaration. Typos in a variable name lead to the same warnings — a properly configured editor highlights names that are used without declaration.

And in the correct order, everything works:

```php
<?php

$name = 'Alice';
print_r($name); // => Alice
```

## Several variables in a program

You can create any number of variables in a single program. Each one stores its own data and doesn't interfere with the others:

```php
<?php

$greeting1 = 'Father!';
print_r($greeting1);
print_r($greeting1);

$greeting2 = 'Mother!';
print_r($greeting2);
print_r($greeting2);
```

How do you know when you need several variables? The number of variables depends on the logic of the program. This topic is covered in detail later, when we encounter functions and conditional constructs.

## Where to create variables

Programmers try to create variables closer to the place where they're used. This makes the code more readable. This is especially important in large programs, where there can be tens and hundreds of thousands of variables.
