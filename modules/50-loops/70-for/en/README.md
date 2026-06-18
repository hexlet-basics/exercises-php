With a `while` loop you can solve any element-iteration task, but it stands out for its verbosity. For `while` you need to introduce a counter in advance, set the stopping condition, and remember to change the counter inside the loop body. When there are only a few loops, this is fine, but in real code loops appear at every turn. So managing the counter by hand is tiresome, especially when the pattern is always the same.

For such situations PHP has the `for` loop. It gathers all the counter management in one place — inside the parentheses:

```text
while:                      for:

$i = 0;                     for ($i = 0; $i < 5; $i += 1) {
while ($i < 5) {                ...
    ...                     }
    $i += 1;
}
│                           │
└── management scattered    └── all management on a single line
```

Let's look at what's inside the parentheses:

1. The initial counter value — this code runs exactly once before the first iteration
2. The predicate (the loop repetition condition) — runs on each iteration, just like in `while`
3. The description of how the counter changes — this code runs at the end of each iteration

In every other respect the principle of operation is exactly the same as the `while` loop.

Let's see how to implement a string-reversal function using a `for` loop. Such a task comes up in interviews:

```php
<?php

function reverseString(string $str): string
{
    // Initial value
    $result = '';

    for ($i = 0; $i < strlen($str); $i += 1) {
        $currentChar = $str[$i];
        // Concatenate in reverse order
        $result = "{$currentChar}{$result}";
    }

    // The loop ends when the whole string has been traversed
    return $result;
}

print_r(reverseString('go!')); // => !og
```

You can read this code like this:

> The loop with index `$i` repeats while the condition `$i < strlen($str)` holds, and after each step `$i` increases by 1

Let's go through in detail how the loop in the example above works at each iteration step:

```text
reverseString('go!')

before the loop: result = ''

iteration 1: currentChar = 'g'
result = currentChar . result
       = 'g' . ''
       = 'g'

iteration 2: currentChar = 'o'
result = currentChar . result
       = 'o' . 'g'
       = 'og'

iteration 3: currentChar = '!'
result = currentChar . result
       = '!' . 'og'
       = '!og'
```

Now let's count how many times a character appears in a string, ignoring case:

```php
<?php

// $text - arbitrary text
// $char - the character to count
function charsCount(string $text, string $char): int
{
    // Since we're looking for a sum, the initial value is 0
    $result = 0;

    for ($i = 0; $i < strlen($text); $i += 1) {
        // We bring everything to lowercase
        // so as not to depend on the current case
        if (strtolower($text[$i]) === strtolower($char)) {
            $result += 1;
        }
    }

    return $result;
}

charsCount('hexlet!', 'e'); // 2
charsCount('hExlet!', 'e'); // 2
charsCount('hExlet!', 'E'); // 2
charsCount('hexlet!', 'a'); // 0
```
