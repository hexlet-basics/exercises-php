Look at the function below. It determines the type of a sentence by its last character: if the sentence ends with a question mark, the function returns `Sentence is question`, otherwise it returns `Sentence is normal`:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => Sentence is normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => Sentence is question
```

We added `else` and a new block in curly brackets. It is executed if the condition in `if` turns out to be false. You can also nest other `if` conditions inside the `else` block. Else means "otherwise", "in the other case".

```text
      ┌───────────┐
      │ condition? │
      └─────┬─────┘
 true │           │ false
      ↓           ↓
┌──────────┐ ┌──────────┐
│ if body  │ │ else body│
└──────────┘ └──────────┘
```

An example of nested blocks:

```php
<?php

$number = 10;

if ($number > 10) {
    print_r('Number is greater than 10');
} else {
    if ($number === 10) {
        print_r('Number is exactly 10');
    } else {
        print_r('Number is less than 10');
    }
}
```

There are two ways to design an `if-else` construct. Using the negation `!==`, you can change the order of the blocks:

```php
<?php

function getTypeOfSentence(string $sentence): string
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

To make the construct easier to design, try to choose a check without negations and adapt the contents of the blocks to it.

The example of using `else` shows how important it is to keep track of which `if` each block belongs to:

```php
<?php

// Wrong
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Number is positive\n");
    }

    if ($number > 10) {
        print_r("Number is greater than 10\n");
    } else {
        print_r("Number is not positive\n");
    }
}

checkNumber(3);
// => Number is positive
// => Number is not positive
```

In the example above, we forgot to nest the second `if` inside the first one, so the `else` now belongs to the second `if`. The program reports that the number is both positive and not positive at the same time.

```php
<?php

// Right
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Number is positive\n");

        if ($number > 10) {
            print_r("Number is greater than 10\n");
        }
    } else {
        print_r("Number is not positive\n");
    }
}

checkNumber(3);
// => Number is positive
```

Now the second `if` is nested inside the first one, and the `else` is at the same level as the first `if` and is contrasted with it.
