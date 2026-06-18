Sometimes you need to get a single character from a string. For example, if a website knows the user's first name and last name and needs to display them in a shortened format like A. Ivanov. To do this, you'll need to take the first letter of the name.

![Extracting characters from a string](./assets/symbols.png)

In PHP, indexing is used to access characters of a string. Indexing means that each character in a string has its own number, that is, an index. Indexing starts from zero: the first character has index `0`, the second has `1`, and so on. Let's imagine we have a string:

```php
<?php

$firstName = 'Alexander';
```

To get the first letter, we specify its position (index) in square brackets:

```php
<?php

print_r($firstName[0]); // => A
```

Square brackets with an index inside are a special operator for extracting a character from a string. Indexes in PHP (and in many languages) start from zero:

```text
Character	A	l	e	x	a	n	d	e	r
Index   	0	1	2	3	4	5	6	7	8
```

The length of the string `Alexander` is `9`, so the index of the last character is `8`, that is, `9 - 1`.

To get the last character, for example, you can write:

```php
<?php

print_r($firstName[8]); // => r
```

If the length of the string changes, the last element will shift too, and you'll have to specify the new index where this character is located.

And if you go beyond the bounds of the string, PHP will report a problem:

```php
<?php

print_r($firstName[9]);
// Warning: Uninitialized string offset 9
```

That's why in programming it's customary to check the length of a string and access its characters only when it's safe. We'll get to that in future lessons.

## Shortened extraction from the end

To get elements from the end, it's better to use negative indexes. In that case, counting starts from the end.

```php
<?php

$firstName = 'Alexander';

print_r($firstName[-1]); // => r, the last character
print_r($firstName[-2]); // => e, the second-to-last character
```

```text
String:  'H' 'e' 'x' 'l' 'e' 't'
Index:    0   1   2   3   4   5
From end:-6  -5  -4  -3  -2  -1
```

Negative indexes work like this:

- -1 corresponds to the last character
- -2 corresponds to the second-to-last
- and so on

This is convenient and safe, because it works correctly even if the string changes its length.

An index can be stored in a variable:

```php
<?php

$firstName = 'Alexander';
$index = 0;

print_r($firstName[$index]); // => A
```

This approach is useful when the index is computed somewhere in the code and then used to access the needed character.

## Special characters

When indexing, ordinary letters, signs, and special characters are all taken into account. They all occupy a position in the string and have their own index, even if they "aren't visible" on the screen.

For example, in the string `"\nyou"` the first character is `\n` (a line break), and the letter `y` already comes at index 1. So accessing `$magic[1]` will return exactly `y`. Note the double quotes: in single quotes `\n` would remain two separate characters — a backslash and the letter `n`.

## Think about it: what will this code print?

```php
<?php

$magic = "\nyou";
print_r($magic[1]); // => ?
```

The output will be:

```text
y
```
