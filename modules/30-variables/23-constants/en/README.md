Sometimes a program contains values that should never change. For example:

- The mathematical constant π (pi).
- The dollar exchange rate on a specific date.
- A fixed service fee.

Such values are called constants, and it's customary to distinguish them from regular variables so that there's no temptation to change them.

## Example: the number π

```php
<?php

const PI = 3.14;
print_r(PI); // => 3.14
```

Here PI is a constant that stores the value of the number π. Creating a constant is different from creating a variable: it starts with the keyword `const`, and the dollar sign before the name is not needed. The point of a constant is that its value doesn't change during the program's execution.

## How is a constant different from a variable?

The concept of constants is common in most programming languages. In PHP, a constant is a separate language entity: unlike a variable, its value can't be changed. An attempt to define a constant again results in an error:

```php
<?php

const PI = 3.14;
const PI = 3.14159; // Error: a constant cannot be defined again
```

At the same time, a constant, like a variable, can be used in any expression.

## How constants are formatted

- All letters uppercase
- Words are separated by an underscore `_`
- The style is called UPPER_SNAKE_CASE (it's also called SCREAMING_SNAKE_CASE)

```php
<?php

const PI = 3.14;
const MAX_USERS = 100;
const DEFAULT_TIMEOUT = 30;
```

PHP has many built-in constants that can be used anywhere in the program. Here are some of them:

- `PHP_VERSION` — the current version of PHP
- `PHP_MAXPATHLEN` — the maximum allowed file name length
- `PHP_INT_MAX` — the maximum possible value of integers (integer)

## Why are constants needed?

Constants make code clearer and safer. They help you immediately see which values in the program are considered fixed and shouldn't change. This is especially important when working with data such as mathematical and physical constants, default settings, or fixed limits. Using constants reduces the risk of errors: the name immediately makes it clear that this is a constant and shouldn't be changed. In addition, if the value does need to be changed (for example, in settings), it's enough to change it in one place, and the change is automatically picked up throughout the program.
