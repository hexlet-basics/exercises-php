We know about two different data types: numbers and strings. We could add numbers together, because the addition operation is an operation for the "number" type. But what if we apply this operation to a number and a string?

```php
<?php

print_r(1 + '7'); // => 8
```

`'7'` is a string, not a number, yet the PHP interpreter returned the answer `8`, as if we were adding two numbers. When PHP sees a type mismatch, it tries to convert the information itself. In this case, it converted the string `'7'` to the number `7`, and then added `1` and `7`.

## Weak typing

Not all languages do this. PHP is a language with **weak typing**. It knows about the existence of different types (numbers, strings, and others), but treats their use loosely and tries to convert data when that seems reasonable to it.

Note that the `+` operator in PHP always means arithmetic, while joining strings has a separate operator — concatenation `.`. That's why in the expression `1 + '7'` PHP turns the string into a number, while in the expression `1 . '7'` it does the opposite, turning the number into a string:

```php
<?php

print_r(1 + '7'); // => 8
print_r(1 . '7'); // => 17
```

```text
1 + '7'  →  8     (the string became a number, addition)
'7' - 1  →  6     (the string became a number, subtraction)
1 . '7'  →  '17'  (the number became a string, concatenation)
```

PHP does have a limit to what it allows, though. If a string can't be understood as a number in any way, modern PHP will stop the program with an error:

```php
<?php

print_r(1 + 'seven');
// TypeError: Unsupported operand types: int + string
```

But if a string starts with a digit, PHP will try to "guess" again: the expression `1 + '7 samurais'` will return `8`, only issuing a warning.

## What about strict languages?

In languages with **strict (strong) typing** you can't add a number to a string — the program will stop with an error. For example, in Python or Ruby the expression `1 + '7'` will lead to a type error: the language requires the programmer to explicitly specify how to convert the data.

At the same time, languages don't split neatly into two camps — "strict" and "weak". It's more correct to say that different languages have a **different degree of strictness**: in some there are almost no implicit conversions, while in others there are many. PHP sits at the "weak" end of this scale, although it becomes stricter with each new version.

## Static and dynamic typing

There is another, separate concept — static and dynamic typing. It describes **when** types are checked. PHP belongs to the dynamically typed languages: types are checked while the program runs. In statically typed languages, the check usually happens earlier, before the code is run, at the compilation stage.

It's important not to confuse two things:

- static/dynamic typing answers the question "**when** are types checked";
- strong/weak typing answers the question "**what will happen** if you mix different types without explicit conversion".

These are independent properties. PHP is a dynamic and weakly typed language.

## Why PHP is like this

PHP was created for the internet, and on the internet all information is strings. Even when we enter a phone number or a birth year on a website, that information arrives at the server not as numbers, but as strings. So the authors of the language decided that automatically converting types was the right and convenient thing to do.

There is convenience, but it comes at a high price. In practice, implicit conversions create many errors and problems that are hard to find: the code may sometimes work and sometimes not. It depends on whether you got "lucky" with the automatic conversion in a particular case. A programmer doesn't notice this right away.

In future tasks we'll encounter this behavior more than once. The question "why doesn't my code work the way I expect?" will often come up. Weak typing runs like a red thread through all PHP development. A bit later in this module we'll learn to convert types explicitly — and to always do it deliberately.
