Imagine we have a series of numbers from 0 to 9. We want to add these numbers together. We could do it like this:

```php
<?php

$sum = 0;
$i = 0;

while ($i < 10) {
    $sum += $i;
    $i += 1;
}

print_r($sum); // => 45
```

We can rewrite this code using the `foreach` loop and the `range()` function:

```php
<?php

$sum = 0;

foreach (range(0, 9) as $i) {
    $sum += $i;
}

print_r($sum); // => 45
```

The `range()` function creates a sequence of numbers within a specific range. The call `range(0, 9)` returns a set of numbers from 0 to 9. The `foreach` loop iterates over this set: on each iteration, it writes the next number into the variable specified after the `as` keyword and executes the loop body.

No counter is needed. The `foreach` loop knows when to stop by itself — when the numbers in the set run out. So it is impossible to forget to change the counter and get an infinite loop here.

The `range()` function supports several call variants. The form `range(start, end)` creates a sequence from `start` to `end`. Note that in PHP the end value is **included** in the range — in many other languages it is not. The form `range(start, end, step)` creates a sequence with the step `step`.

The `range()` variants look like this:

```text
range(1, 5)     →  1, 2, 3, 4, 5
range(0, 3)     →  0, 1, 2, 3
range(0, 10, 2) →  0, 2, 4, 6, 8, 10
                    └── both ends are included
```

We covered the sum example above. Let's look at another one — printing the numbers from 1 to 3:

```php
<?php

foreach (range(1, 3) as $i) {
    print_r("{$i}\n");
}

// => 1
// => 2
// => 3
```

Now let's try to print the numbers in reverse order. If the start of the range is greater than the end, `range()` builds a descending sequence on its own:

```php
<?php

foreach (range(3, 1) as $i) {
    print_r("{$i}\n");
}

// => 3
// => 2
// => 1
```

The `foreach` construct with the `range()` function is the shortest way to walk over a range of numbers. When full control over the counter is needed, for example changing it by a complex rule, the `for` and `while` loops come to the rescue.
