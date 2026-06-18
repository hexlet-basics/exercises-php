Logical expressions let you check different conditions. But on their own, they only return `true` or `false`. So that a program can perform different actions depending on the result, PHP has a special `if` construct:

```php
<?php

if (5 > 3) {
    print_r('Yes, it is true');
}
```

Here the string `'Yes, it is true'` is printed, because the condition `5 > 3` is true.

```text
┌───────────┐
│ condition?│
└─────┬─────┘
 true │
      ↓
┌───────────┐
│ if body   │
└───────────┘
```

## Code blocks

After the word `if`, the condition is written in parentheses, and then a block of code is described in curly brackets. All the instructions inside the curly brackets belong to a single block:

```php
<?php

if (10 === 10) {
    print_r("First\n");
    print_r("Second\n");
}

print_r('Goodbye!');
```

Here `First` and `Second` are printed, because the condition was satisfied. And `Goodbye!` is printed in any case, since this instruction is already outside the block. The principle is the same as in function definitions.

## Using if inside a function

Let's look at a function that determines the type of a sentence passed to it. If it ends with a question mark, the function returns `'question'`, otherwise it returns `'normal'`:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    // A simple way to extract the last character
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        return 'question';
    }

    return 'normal';
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => question
```

Here two `return` statements are used at once. If the condition inside `if` is satisfied, `return 'question';` fires and the function ends. If the condition isn't satisfied, control passes to the next line with `return 'normal';`.

So the function has several possible exit points. This is a common practice. Depending on the conditions, the function can end in different ways.

Even though the `getTypeOfSentence()` function uses `if`, it returns strings, which means it isn't a predicate. As a predicate, let's look at a function that checks whether there's enough money for a purchase:

```php
<?php

function hasEnoughMoney(int $balance, int $price): bool
{
    if ($balance >= $price) {
        return true;
    }

    return false;
}

var_dump(hasEnoughMoney(100, 50)); // => bool(true)
var_dump(hasEnoughMoney(30, 50));  // => bool(false)
```

## if and logical expressions

We wrote the `hasEnoughMoney()` function using `if`. But in this form it could do without it, because the result of the comparison is itself already a logical expression:

```php
<?php

function hasEnoughMoney(int $balance, int $price): bool
{
    return $balance >= $price;
}
```

In simple cases, it's better to return such an expression right away. `if` is needed where additional actions are performed inside the block besides returning the result. The more complex the programs we write, the more often such situations will come up.
