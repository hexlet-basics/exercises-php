In real programs, a situation often arises where data of one type needs to be turned into another. This is especially relevant, for example, when processing user input or data from web forms. There everything comes in the form of strings, even if you entered a number.

PHP can convert types automatically — we saw this in the lesson about weak typing. But relying on implicit conversions is dangerous. When you know exactly which type you want to get, it's better to convert the value **explicitly**. For this, PHP has a special syntax: the desired type is specified in parentheses before the value. This operation is called type casting. Explicit code is clearer and more predictable.

## Converting a string to a number

Imagine we received the string `'345'` from a form, and we need to add this number to another one:

```php
<?php

$number = (int) '345';
print_r($number + 5); // => 350
```

The `(int)` operator takes a string and turns it into an integer.

```php
<?php

$value = '0';
$convertedValue = (int) $value;
print_r($convertedValue); // => 0

print_r((int) '10'); // => 10
print_r((int) 3.5);  // => 3 (the fractional part is dropped)
```

```text
'123'  ──(int)──→  123  ──(float)──→  123.0
                    │
                (string)
                    ↓
                  '123'
```

## Converting to a string with (string)

If you need to turn a number into a string, use the `(string)` operator:

```php
<?php

print_r((string) 10);  // => '10'
print_r((string) 3.5); // => '3.5'
```

This is useful, for example, when building texts, messages, and output:

```php
<?php

$age = 42;
print_r('Age: ' . (string) $age); // => Age: 42
```

## Converting to a floating-point number with (float)

If you need a number with a decimal point, use `(float)`:

```php
<?php

print_r((float) '2.7'); // => 2.7
```

The expression `(float) 5` will also work: you'll get the fractional number `5.0`, although `print_r()` will output it without the fractional part — as `5`.

## Multiple conversions

Type casting can also be used inside compound expressions. In more complex situations, you'll come across multiple conversions: `(string) (5 + ((int) '4'))`. The order of evaluation of this expression is as follows:

```php
<?php

(int) '4';  // 4
5 + 4;      // 9
(string) 9; // '9'
```

At the moment we're familiar with only a few types, but casting works for any type.
