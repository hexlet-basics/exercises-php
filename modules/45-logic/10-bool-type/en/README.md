Besides arithmetic operations, math also has comparison operations, such as `5 > 4` or `3 < 1`. They exist in programming, too. Comparisons are often used in real-world tasks involving numbers. For example, when we place an order in an online store, the system checks whether the user has enough money in their account to pay for the item. If the amount in the account is greater than or equal to the price of the item, the order is confirmed. If there aren't enough funds, an appropriate message appears.

## Comparison in programming

Let's start with an example that compares two numbers:

```php
<?php

var_dump(5 > 4); // => bool(true)
var_dump(4 > 4); // => bool(false)
```

The result of a comparison is a value of type `bool`. This type has only two possible options: `true` and `false`. These are special values of the language. They can be used directly:

```php
<?php

var_dump(true);  // => bool(true)
var_dump(false); // => bool(false)
```

Note the new function `var_dump()`. The familiar `print_r()` isn't well suited for printing boolean values: it prints `true` as `1` and `false` as an empty string. The `var_dump()` function outputs both the type and the value, so it's used for values of type `bool`.

In practice, the values `true` and `false` are rarely used directly, but the logic of a program's behavior is built on them. We encounter this literally every day when we enter PIN codes and passwords, when we perform actions that can have different outcomes. All of these outcomes are described inside the program as conditional expressions. The program reasons roughly like this: *if it's this way, do one thing; if it's another way, do something else*.

The following comparison operations are available in PHP:

* `<` and `<=` mean "less than" and "less than or equal to"
* `>` and `>=` mean "greater than" and "greater than or equal to"
* `==` and `!=` mean "equal to" and "not equal to"
* `===` and `!==` mean "strictly equal to" and "strictly not equal to"

Programming languages adopted all the math comparison operations unchanged, except for the equality and inequality operators. In math, the regular equals sign `=` is used for this, but in programming the symbol `=` is most often used to assign values to variables. That's why in PHP comparisons are made using `==` and `===`.

How do these two operators differ? Recall the lesson on weak typing: PHP tries to convert types automatically. The `==` operator compares values after such a conversion, so, for example, `0 == '0'` turns out to be true. The `===` operator compares strictly, without conversion: values are equal only if both the type and the value itself match. Implicit conversions lead to hard-to-catch errors, so in PHP it's customary to use the strict operators `===` and `!==` — that's what we'll do in this course.

A few examples:

```php
<?php

var_dump(5 >= 3);  // => bool(true)
var_dump(7 < 0);   // => bool(false)
var_dump(5 > 5);   // => bool(false)
var_dump(5 >= 5);  // => bool(true)
var_dump(2 === 5); // => bool(false)
var_dump(2 !== 5); // => bool(true)
```

When a comparison uses specific values, the operation seems pointless — we already know the result of the comparison, and it's always the same, because if 3 is greater than 2, that doesn't change. But everything changes when the values can change. Let's try writing a simple function that takes a child's age as input and determines whether they are an infant. Infants are considered children under two years old (two is not included).

```php
<?php

function isInfant(int $age): bool
{
    return $age < 2;
}

var_dump(isInfant(3)); // => bool(false)
var_dump(isInfant(2)); // => bool(false)
var_dump(isInfant(1)); // => bool(true)
var_dump(isInfant(0)); // => bool(true)
```

When functions return the result of a comparison, they usually answer the question "yes" or "no". Such functions are called **predicates**. They're easy to recognize because they return a boolean value `true` or `false`. Their names often contain a question or a statement that can be checked. In PHP, predicates usually start with the prefix `is`, `has`, or `can`, but aren't limited to these words. Examples:

* `isInfant()` — "is it an infant?"
* `hasChildren()` — "does it have children?"
* `isEmpty()` — "is it empty?"
* `hasErrors()` — "are there errors?"

Here's a function that checks whether a number is negative:

```php
<?php

// Check whether the number is less than zero
function isNegative(int $number): bool
{
    return $number < 0;
}

var_dump(isNegative(-5)); // => bool(true)
var_dump(isNegative(7));  // => bool(false)
```
