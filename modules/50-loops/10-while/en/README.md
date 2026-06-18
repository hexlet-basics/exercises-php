Besides conditional constructs, programming is impossible without loops. This is a special mechanism that lets you perform any action multiple times. Almost any computation is built on it — from calculating the average grade in a group to processing incoming requests on websites.

A loop stores a repeating action in one place and runs it again while the condition remains true.

## First example

Suppose a program needs to print the string `Hello!` five times. To stop repeating at the right moment, the program needs a variable that stores the number of the current step. Such a variable is usually called a counter.

In the example, the counter is called `$counter`. Before the loop, it equals `0`. After each output of the string, we increase it by one.

```php
<?php

$counter = 0;
while ($counter < 5) {
    print_r("Hello!\n");
    $counter = $counter + 1;
}

// => Hello!
// => Hello!
// => Hello!
// => Hello!
// => Hello!
```

Now the loop can check the counter value before each repetition. As long as `$counter < 5`, the code in the curly braces after `while` runs. This block is called the loop body.

After the body runs, the interpreter goes back to the condition and checks it again. As long as the condition is true, the loop continues. When the condition becomes false (`false`), the program exits the loop and runs the next code.

Without changing the counter, the condition will never become false, and the loop will turn into an infinite one. From the outside, it looks as if the program has frozen.

## How the loop works step by step

Before the first repetition, `$counter` equals `0`.

**Step 1.** The interpreter checks `$counter < 5`. The value `0` is less than `5`, so the loop body runs.
`Hello!` is printed to the screen, and `$counter` increases to `1`.

**Step 2.** The interpreter checks the condition again. The value `1` is still less than `5`, so the loop body runs once more.
`Hello!` is printed to the screen again, and `$counter` increases to `2`.

This continues until `$counter` becomes equal to `5`. On the next check, the condition `$counter < 5` will be false, so the loop will finish. Then the program runs the code after the loop.

The same sequence in a diagram.

```text
$counter = 0
┌──→ $counter < 5?
│     true │
│          ↓
│    print_r("Hello!\n")
│    $counter = $counter + 1
└──────────┘
      false → exit the loop
```

After the loop finishes, `$counter` equals `5`, and the string `Hello!` is printed five times.

## The loop body and continuing the program

The loop body includes all the lines inside the curly braces after `while`. When the closing brace ends the block, the loop also ends.

```php
<?php

$counter = 0;
while ($counter < 2) {
    print_r("Hello!\n");
    $counter = $counter + 1;
}

print_r("End of loop\n");
```

In this example, `print_r("Hello!\n")` and `$counter = $counter + 1` are inside the loop. The line `print_r("End of loop\n")` is after the closing brace, so it runs once after the loop finishes.

By the curly braces, PHP understands which lines to repeat and which ones come next in the program.

## A loop inside a function

Now let's move the loop into a function. It will print numbers from `1` up to the passed value.

```php
<?php

function printNumbers(int $n): void
{
    $i = 1;
    while ($i <= $n) {
        print_r($i . "\n");
        $i = $i + 1;
    }
    print_r("Finished!\n");
}

printNumbers(3);
// => 1
// => 2
// => 3
// => Finished!
```

The `while` loop prints numbers until `$i` becomes greater than `$n`. After that, the program exits the loop and runs `print_r("Finished!\n")`.

The condition and the change of the counter depend on the task. The counter can be increased by `1`, by `2`, or by `10` at once. It can be decreased if the loop goes from a larger value to a smaller one. You can change the counter not on every repetition, but on every other one or after performing an additional check. The main thing is that the condition eventually becomes false. Otherwise the loop will run forever.
