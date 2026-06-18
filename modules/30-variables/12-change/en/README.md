The very word "variable" hints that its value can change. This is one of the main reasons variables exist at all.

Here is a simple example:

```php
<?php

// greeting
$greeting = 'Father!';
print_r($greeting); // => Father!

$greeting = 'Mother!';
print_r($greeting); // => Mother!
```

Here we first stored one string (_Father!_) in the variable, then another (_Mother!_). The variable name didn't change, but the value inside became different.

```text
Before: $greeting ──→ 'Father!'
                       ╳
After:  $greeting ──→ 'Mother!'
```

## Why change the value at all?

In real programs, variables change all the time. Here are a few reasons:

- The program reacts to user actions. For example, while you enter some data into forms on a website, that data is quite likely constantly changing the variables that hold it.
- Intermediate results. Data often passes through a series of transformations, and at each stage the variable is updated with a new value. A similar mechanism even exists in calculators, when intermediate values are stored using the `m+` or `m-` keys.
- Storing state. If you are writing a game, then the character's position, health, score, and current level are variables that change all the time.

## Variables are created as they are used

In PHP, you don't need to "declare a variable in advance": it appears at the moment you first store a value in it:

```php
<?php

$name = 'Arya'; // the variable is created here
```

If you later write `$name = ...` again, it will overwrite the old value. This is how most modern programming languages work.

## Why this matters

Variables are a flexible way to store data that can change during program execution. Thanks to this, you can write programs that behave differently depending on conditions, user actions, or the results of computations.

But flexibility has a downside too. Sometimes it's hard to tell right away exactly what is stored in a variable at a given moment in time. The developer has to track where and how it changed, especially if the code is long.

This is exactly what is done during debugging: trying to figure out why the program works differently than intended. They check the values of variables, trace the order of code execution, and look for where something went wrong.
