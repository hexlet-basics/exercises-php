We already know how to write functions that check single conditions. In this lesson, we'll learn how to build compound conditions.

Suppose that on signup, a website requires a password to be longer than eight characters and to contain at least one capital letter. Let's try writing two separate logical expressions and connecting them with the special «AND» operator:

> A password longer than 8 characters **AND** a password that contains at least one capital letter

Here's a function that takes a password and says whether it meets the conditions (`true`) or not (`false`):

```php
<?php

function hasCapitalLetter(string $text): bool
{
    // Checks for at least one capital letter in the string
}

function isCorrectPassword(string $password): bool
{
    $length = strlen($password);
    return $length > 8 && hasCapitalLetter($password);
}

var_dump(isCorrectPassword('Qwerty'));     // => bool(false)
var_dump(isCorrectPassword('Qwerty1234')); // => bool(true)
var_dump(isCorrectPassword('qwerty1234')); // => bool(false)
```

The `&&` operator means «AND». In mathematical logic, this is called conjunction. The whole expression is considered true if every **operand** is true, that is, each of the compound expressions. In other words, `&&` means «both this and that». This operator's priority is lower than that of comparison operators. That's why the expression `hasCapitalLetter($password) && $length > 8` also works correctly without parentheses.

Besides `&&`, the `||` operator, which means «OR» (disjunction), is often used. It means «either this, or that, or both». The expression `$a || $b` is considered true if at least one of the operands is true or when both operands are true. Otherwise, the expression is false.

```php
<?php

function hasDiscount(int $age, bool $isStudent): bool
{
    return $age < 18 || $isStudent;
}

var_dump(hasDiscount(15, false)); // => bool(true)  (younger than 18)
var_dump(hasDiscount(25, true));  // => bool(true)  (student)
var_dump(hasDiscount(15, true));  // => bool(true)  (both conditions)
var_dump(hasDiscount(25, false)); // => bool(false)
```

Operators can be combined in any number and in any sequence. If `&&` and `||` appear together in the code, it's better to set the priority with parentheses. Below is an example of an extended function that determines whether a password is correct:

```php
<?php

function hasCapitalLetter(string $text): bool
{
    // Checks for at least one capital letter in the string
}

function hasSpecialChars(string $text): bool
{
    // Checks for special characters in the string
}

function isStrongPassword(string $password): bool
{
    $length = strlen($password);
    // The parentheses set the priority. It's clear what relates to what.
    return ($length > 8 && hasCapitalLetter($password)) && hasSpecialChars($password);
}
```

Now let's imagine that we want to buy an apartment that meets these conditions: an area of 100 square meters or more on any street **OR** an area of 80 square meters or more, but on the central `Main Street`.

Let's write a function that checks the apartment. It takes two arguments: the area (a number) and the street name (a string):

```php
<?php

function isGoodApartment(int $area, string $street): bool
{
    return $area >= 100 || ($area >= 80 && $street === 'Main Street');
}

var_dump(isGoodApartment(91, 'Queens Street'));  // => bool(false)
var_dump(isGoodApartment(78, 'Queens Street'));  // => bool(false)
var_dump(isGoodApartment(70, 'Main Street'));    // => bool(false)

var_dump(isGoodApartment(120, 'Queens Street')); // => bool(true)
var_dump(isGoodApartment(120, 'Main Street'));   // => bool(true)
var_dump(isGoodApartment(80, 'Main Street'));    // => bool(true)
```

The area of mathematics that studies logical operators is called Boolean algebra. **Truth tables** show what the result will be when each operator is applied.

#### AND `&&`

| A     | B     | A `&&` B |
| ----- | ----- | -------- |
| true  | true  | **true** |
| true  | false | false    |
| false | true  | false    |
| false | false | false    |

#### OR `||`

| A     | B     | A `‖` B  |
| ----- | ----- | -------- |
| true  | true  | **true** |
| true  | false | **true** |
| false | true  | **true** |
| false | false | false    |
