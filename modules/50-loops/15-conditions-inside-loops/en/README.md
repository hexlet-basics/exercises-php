The loop body, just like the function body, is a place where statements are executed. This means we can use everything we've learned earlier inside it, for example, conditional constructs. This way the program repeats one action several times, but makes a decision on each repetition.

Suppose we need to go through the numbers from `1` to `10` and print only the even ones. The loop iterates over all the numbers in turn, and the condition inside the loop decides which of them make it to the screen.

We need a counter to iterate. It stores the current number and increases after each repetition. We should print a number only when it passes the check:

```php
<?php

$number = 1;
while ($number <= 10) {
    if ($number % 2 === 0) {
        print_r("{$number}\n");
    }
    $number = $number + 1;
}

// => 2
// => 4
// => 6
// => 8
// => 10
```

The `while` loop iterates over the numbers from `1` to `10`. The condition inside the loop checks the current number. If `$number % 2 === 0`, the number is divisible by `2` without a remainder, and the program prints it to the screen.

The counter increases after the check in any case. This is important. If you increase `$number` only inside `if`, the loop will stop on the first odd number and will run forever.

## Working step by step

Before the first repetition, `$number` equals `1`.

**Step 1.** The loop condition `$number <= 10` is true, so the program enters the loop body. The number `1` is odd, the `if` block doesn't execute. Then `$number` increases to `2`.

**Step 2.** The loop condition is true again. The number `2` is even, so the program prints `2`. Then `$number` increases to `3`.

After that, the loop keeps checking each number. It skips the odd numbers and prints the even ones to the screen. When `$number` becomes equal to `11`, the condition `$number <= 10` becomes false, and the loop ends.

## Conditions change the action, not the movement

In such loops it's convenient to separate the two parts. The counter moves the program to the next value, and `if` decides what to do with the current value.

```php
<?php

$number = 1;
while ($number <= 10) {
    if ($number > 5) {
        print_r("{$number}\n");
    }
    $number = $number + 1;
}
```

Here the loop goes through the same range from `1` to `10`, but the condition inside is different. So the program prints only the numbers greater than `5`.

The condition inside the loop can check anything. For example, whether a number is even, whether a character matches, the length of a string, or the value of a variable. The main thing is that the counter keeps changing so the loop can end.
