The `getTypeOfSentence()` function distinguishes only between questions and normal sentences. Let's add support for exclamation sentences to it:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is normal
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

We've added a check for exclamation sentences. Technically this function works, but it treats questions incorrectly. It also has problems from the standpoint of semantics. The exclamation mark is checked in any case, even if a question mark has already been found. The `else` branch is described for the second condition, but not for the first. That's why a question sentence becomes `normal`.

To fix the situation, let's use one more feature of the conditional construction:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } elseif ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is question
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

Now all the conditions are lined up in a single construction. The `elseif` keyword means "if the previous condition is not satisfied, but the current one is".

```text
  ┌─────────────────┐
  │ condition 1?    │
  └────┬────────┬───┘
 true │        │ false
       ↓        ↓
┌──────────┐  ┌─────────────────┐
│ if body  │  │ condition 2?    │
└──────────┘  └────┬────────┬───┘
              true │        │ false
                    ↓        ↓
         ┌─────────────┐ ┌──────────┐
         │ elseif body │ │ else body│
         └─────────────┘ └──────────┘
```

The logic of the function works like this. If the last character is `?`, then `'question'` is returned. If the last character is `!`, then `'exclamation'` is returned. In all other cases, `'normal'` is returned.

Only one of the code blocks belonging to the entire `if` construction will be executed.
