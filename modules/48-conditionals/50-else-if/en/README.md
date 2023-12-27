
The `getTypeOfSentence()` function from the previous lesson only distinguishes between questions and normal sentences. Let's try to extend it to exclamation sentences:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    return "Sentence is {$sentenceType}";
}

getTypeOfSentence('Who?'); // 'Sentence is question'
getTypeOfSentence('No');   // 'Sentence is normal'
getTypeOfSentence('No!');  // 'Sentence is exclamation'
```

We've added one more check. Technically, the function works, but there are semantics issues.

- It checks for a question mark in any case, regardless of whether an exclamation point was found or not.
- The `else` branch is defined for the first condition, not for the second.

It would be better to use another conditional construction:

```php
<?php

function getTypeOfSentence($sentence)
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
```

Now all the conditions are lined up in a single construction. `elseif` is "if the previous condition is not satisfied, but the current condition is satisfied". This is the scenario we get:

- If the last character is `?`, then it's a `'question'`
- otherwise, if the last character is `!`, then it's an `'exclamation'`
- otherwise `'normal'`

Only one of the code blocks belonging to the entire `if` construct will be executed.
