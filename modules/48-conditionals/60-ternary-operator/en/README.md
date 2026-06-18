Look at the definition of a function that returns the modulus of a given number:

```php
<?php

function abs(int $number): int
{
    if ($number >= 0) {
        return $number;
    }

    return -$number;
}

print_r(abs(10) . "\n");  // => 10
print_r(abs(-10) . "\n"); // => 10
```

But it can be written more concisely. PHP has a construct that works like *if-else*, but is at the same time an expression — its result can be returned from a function right away. It's called the **ternary operator** and is the only operator in PHP that requires three operands:

```php
<?php

function abs(int $number): int
{
    return $number >= 0 ? $number : -$number;
}
```

The general pattern looks like this:

```text
<predicate> ? <expression on true> : <expression on false>
```

![Ternary operator](../assets/ternary-operator.png)

Let's rewrite the initial version of `getTypeOfSentence()` in the same way. Here is how it was:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}
```

And now — how it became:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    return $lastChar === '?' ? 'question' : 'normal';
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => question
```

You may already have guessed that a ternary operator can be nested inside a ternary operator. This is possible, but it's better not to do so. Such code is hard to read and debug, so nested ternary operators are considered very bad practice.
