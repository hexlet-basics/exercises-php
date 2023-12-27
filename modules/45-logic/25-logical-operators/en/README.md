
Logical expressions can be combined with each other, creating increasingly tricky checks. One good example is password verification. As you'll likely know, many websites want a password of 8 до 20 characters on signup. Frankly, it's a weird restriction, but whatever, it is what it is. In mathematics, we'd write `8 < x < 20` (where `x` is the length of a particular password), but in PHP, this won't work. We would have to make two separate logical expressions and connect them with the special «AND» operator:

```
A password longer than 8 characters **AND** a password shorter than 20 characters.
```

Here's a function that takes a password and says whether it meets the conditions or not:

```php
<?php

function isCorrectPassword($password)
{
    $length = strlen($password);
    return $length > 8 && $length < 20;
}

isCorrectPassword('qwerty'); // false
isCorrectPassword('qwerty1234'); // true
isCorrectPassword('zxcvbnmasdfghjkqwertyui'); // false
```

`&&` means «AND» (called 'conjunction' in mathematical logic). The whole expression is true only when every operand, all of which are part of the compound expression, is true. In other words, `&&` means «both». This operator's priority is lower than that of comparison operators, so the expression works correctly without parentheses. Another widespread operator alongside `&&` is `||` — «OR» (disjunction). It means "one or the other, or both". Operators can be combined in any number and any sequence, but when `&&` and `||`, appear together, you should label priority with parentheses.

Below is an example of an advanced function that validates a password:

```php
<?php

function hasSpecialChars($str)
{
    // checks to see if there are special characters in the string
}

function isStrongPassword($password)
{
    $length = strlen($password);
    // The parentheses set the priority, making it clear how each part is related
    return ($length > 8 && $length < 20) && hasSpecialChars($password);
}
```

Another example. We want to buy an apartment that meets these conditions: an area of 100 square meters or more on any street OR an area of 80 square meters or more, but on `Main Street`.

We'll write a function that checks the apartment. It takes two arguments, the area (a number) and the street name (a string):

```php
<?php

function isGoodApartment($area, $street)
{
    return $area >= 100 || ($area >= 80 && $street === 'Main Street');
}

var_dump(isGoodApartment(91, 'Queens Street'));  // => false
var_dump(isGoodApartment(78, 'Queens Street'));  // => false
var_dump(isGoodApartment(70, 'Main Street'));    // => false

var_dump(isGoodApartment(120, 'Queens Street')); // => true
var_dump(isGoodApartment(120, 'Main Street'));   // => true
var_dump(isGoodApartment(80, 'Main Street'));    // => true
```

The area of mathematics dealing with logical operators is called Boolean algebra. The truth tables are shown below, and they can be used to figure out the result of an operator:

## `&&`

| A     | B     | A `&&` B |
| ----- | ----- | -------- |
| TRUE  | TRUE  | **TRUE** |
| TRUE  | FALSE | FALSE    |
| FALSE | TRUE  | FALSE    |
| FALSE | FALSE | FALSE    |

A couple of examples:

```php
<?php

// true && true;
3 > 2 && str_starts_with('wow', 'w'); // true

// true && false;
'start' === 'start' && 8 < 3; // false
```

## OR `||`

| A     | B     | A `‖` B  |
| ----- | ----- | -------- |
| TRUE  | TRUE  | **TRUE** |
| TRUE  | FALSE | **TRUE** |
| FALSE | TRUE  | **TRUE** |
| FALSE | FALSE | FALSE    |

A couple of examples:

```php
<?php

// true || true;
3 > 2 || str_starts_with('wow', 'w'); // true

// false || false;
'start' === 'Start' || 3 < 3; // false
```
