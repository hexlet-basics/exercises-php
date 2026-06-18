Imagine we have a string and we want to make all the letters in it uppercase. PHP has a built-in function for this, `strtoupper()`:

```php
<?php

$firstName = 'Alexander';
print_r(strtoupper($firstName)); // => ALEXANDER
```

It might seem that the function changed our string. Let's check:

```php
<?php

print_r($firstName); // => Alexander
```

The variable stayed the same. The `strtoupper()` function doesn't change the original string — it returns a **new** string made of uppercase letters. That's how all string functions work in PHP: the value itself cannot be changed after it's created. Programmers say that such values are **immutable**.

## Why are values immutable?

Primitive values in PHP (strings, numbers, boolean values) behave like values in mathematics: the number `5` can't be "edited", you can only derive a new number from it. This provides important benefits:

- Safety: values won't change by accident
- Performance: it's easier for the interpreter to work with immutable values
- Predictability: fewer unexpected effects when passing data into functions

## So how do you change a string then?

If you need to "change" a string, a new string is created and stored in the same variable:

```php
<?php

$firstName = 'Alexander';
$firstName = strtoupper($firstName);

print_r($firstName); // => ALEXANDER
```

The variable `$firstName` now simply holds a different string. The value of the variable is replaced, while the string `'Alexander'` itself stays untouched.

```text
$firstName = 'Alexander'

strtoupper($firstName)  →  'ALEXANDER'   ←  a new string is created
$firstName              →  'Alexander'   ←  the original didn't change

$firstName = strtoupper($firstName)
└──────────────┬───────────────────┘
   the variable now holds a new string
```

It's important to distinguish two things: *changing the value of a variable* and *changing the value itself*. The value of a variable can be replaced without any problem, but the value itself — a string, a number — cannot be changed.

## A new variable or the same one?

You should only reuse a variable when it refers to one and the same entity. If the user entered a new name, that's already a different entity, and it's better to create a separate variable:

```php
<?php

// The same string, we just update it
$name = 'Alexander';
$name = 'Blexander';

// Different entities, better to use different variables
$firstName = 'Alexander';
$correctedFirstName = 'Blexander';
```

Trying to "cram" all strings into a single variable makes the code confusing. The variable stops telling you what's stored in it.

## Conclusion

Primitive data types in PHP (strings string, integers int, real numbers float, and boolean values bool) behave like immutable values. Functions don't change the strings and numbers passed to them, but return new values. Any "changes" happen by creating a new value and reassigning the variable.
