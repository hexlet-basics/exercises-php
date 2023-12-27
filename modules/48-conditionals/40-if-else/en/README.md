
Let's try and modify the function from the previous example so that it returns the whole strings of *Sentence is normal* or *Sentence is question* instead of just the sentence type.

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

getTypeOfSentence('Hodor');  // Sentence is normal
getTypeOfSentence('Hodor?'); // Sentence is question
```

We added `else` and a new block with curly brackets. This block is only executed if the condition in `if` is false.

There are two ways to design an *if-else* clause. The negation allows you to change the order of the blocks:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar !== '?') {
        $sentenceType = 'normal';
    } else {
        $sentenceType = 'question';
    }

    return "Sentence is {$sentenceType}";
}
```

Which way is preferable? It's easier for the human brain to reason in a straightforward manner rather than via negation. Try to pick a test that has no negations, and then modify the contents of the code blocks to suit it.
