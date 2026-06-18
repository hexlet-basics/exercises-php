Earlier we already glued strings together directly using concatenation. Now let's do the same thing, but with variables. Good news: the syntax stays the same. The values of the variables are simply substituted.

## Gluing two strings directly

```php
<?php

$what = 'Kings' . 'road';
print_r($what); // => Kingsroad
```

Everything is simple here: two strings are joined into one. That's how concatenation works: the `.` operator adds strings together, creating a new string.

## Gluing a string and a variable

If the variable `$first` holds the string "Kings", we can safely glue it together with another string:

```php
<?php

$first = 'Kings';
$what = $first . 'road';
print_r($what); // => Kingsroad
```

PHP substitutes the value of the variable, performs the operation, and creates the resulting string.

## Gluing two variables

In exactly the same way, you can combine the values of two variables if both contain strings:

```php
<?php

$first = 'Kings';
$last = 'road';
$what = $first . $last;
print_r($what); // => Kingsroad
```

You can also add spaces:

```php
$full = $first . ' ' . $last;
print_r($full); // => Kings road
```

```text
$first = 'Kings'
$last  = 'road'

$first  .  ' '  .  $last
└─┬──┘            └──┬─┘
'Kings' .  ' '  .  'road'
└─────────┬────────────┘
     'Kings road'
```

## What if a variable contains a number?

Let's try this:

```php
<?php

$age = 42;
print_r('Age: ' . $age); // => Age: 42
```

In PHP this code works: the `.` operator always glues strings, so the number is automatically converted to a string. Not all languages behave this way — for example, in Python gluing a string and a number leads to an error, and the number has to be converted explicitly.

The same applies to variables with the results of calculations:

```php
<?php

$price = 50 * 1.25 * 6.91; // => 431.875
print_r('Price in yuans: ' . $price); // => Price in yuans: 431.875
```

Automatic conversion is convenient, but it requires attention: sometimes it's not what you expect that gets turned into a string. We'll talk more about this behavior in the lessons about data types.
