When working with strings, we often face the task of extracting part of a string. For example, getting the year from a date, the first name from a full name, or the first few characters from an email address. For such cases, PHP has a convenient tool: the built-in `substr()` function.

## What is a substring?

A substring is a part of a string. It's what's contained inside another string. For example, in the string `'12-08-2034'` a substring could be `'2034'`, `'12'`, or even `'-'`. It all depends on what information we need to extract.

Let's say we have a string with a date `'12-08-2034'`. We want to get just the year `'2034'` from it. In this string, each character has an index (position), starting from zero:

```text
'1' '2' '-' '0' '8' '-' '2' '0' '3' '4'
 0   1   2   3   4   5   6   7   8   9
```

So the year starts at index 6 and consists of four characters. To extract it, we use `substr()`:

```php
<?php

$value = '12-08-2034';
$year = substr($value, 6, 4);
print_r($year); // => 2034
```

The notation `substr($value, 6, 4)` means: take four characters from the string `$value`, starting at index 6. The format:

```text
substr(string, start, length)
```

Note: the third parameter specifies not the index of the end, but the number of characters to take.

```php
<?php

// The last character has index 10, and there are 11 characters in total
$value = 'code-basics';

print_r(substr($value, 5, 6)); // => basics (6 characters from index 5)
print_r(substr($value, 0, 7)); // => code-ba (7 characters from the start)
print_r(substr($value, 2, 4)); // => de-b
```

How do we count all this? If we're working with a specific string, it's almost always done by eye.

## A substring is a string

```php
<?php

$value = '01-12-9873';

substr($value, 1, 1); // => 1
substr($value, 3, 2); // => 12
```

`substr()` always returns a string, even if it contains only digits. This means the result can be used like an ordinary string: concatenated, printed, interpolated, and so on. Including extracting a new substring from it:

```php
<?php

$value = '01-12-9873';

$part = substr($value, 3, 4); // => 12-9
print_r(substr($part, 0, 2)); // => 12
```

First we got the substring `'12-9'`, and then extracted a new substring `'12'` from it.

## Substring to the end or from the start

Sometimes you need to take part of a string up to the end or from the start. Such situations are also easy to handle:

```php
<?php

$value = 'Hexlet';

print_r(substr($value, 3));    // => let (from index 3 to the end)
print_r(substr($value, 0, 3)); // => Hex (from the start, three characters)
```

If you don't specify the length, PHP will take all the characters from the start index to the end of the string.

## Negative indexes

PHP lets you count not only from left to right, but also from the end of the string. Negative values are used for this:

```php
<?php

$value = 'Hexlet';

print_r(substr($value, -1));    // => t (the last character)
print_r(substr($value, -3));    // => let (the last three characters)
print_r(substr($value, 1, -1)); // => exle (from index 1 to the second-to-last character)
```

A negative start means counting from the end of the string: `-1` corresponds to the last character, `-2` to the second-to-last, and so on. A negative length means "take everything except the specified number of characters from the end".

This is convenient when the length of the string isn't known in advance, but you need to take the "tail" or the "middle" of the string relative to the end.

## Reversing a string

In some languages, such as Python, string slices have a "step" parameter, which lets you take every second character or reverse a string. `substr()` has no step, but PHP has a separate built-in function `strrev()` for reversing a string:

```php
<?php

$value = 'Hexlet';

print_r(strrev($value)); // => telxeH
```

## Substring with variables

The parameters of `substr()` don't have to be hard-coded as numbers. You can use variables:

```php
<?php

$start = 1;
$length = 4;

$value = 'Hexlet';
print_r(substr($value, $start, $length)); // => exle
```

This is especially useful when the boundaries are computed while the program is running.

## Be careful: Cyrillic

The `substr()` function works with bytes, not characters. For Latin letters these are the same thing, but Cyrillic characters and those of other non-Latin alphabets take up more than one byte. For such strings, the `mb_substr()` function is used — we'll talk more about working with encodings at the end of the course.

## Quick cheat sheet

```php
<?php

$value = 'Hexlet';

substr($value, 0);     // Hexlet — the whole string
substr($value, 5);     // t
substr($value, 0, 5);  // Hexle
substr($value, -1);    // t — the last character
substr($value, -3);    // let — the last three characters
substr($value, 2, -1); // xle — from the third character to the second-to-last
strrev($value);        // telxeH — the string in reverse order
```

Don't worry if you don't remember all the combinations right now: you'll quickly start using them in practice. The main thing is to understand how the basic structure `substr(string, start, length)` works.
