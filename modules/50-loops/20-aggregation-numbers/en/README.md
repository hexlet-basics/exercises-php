A separate class of tasks that can't be done without loops is called **data aggregation**. Such tasks include finding the maximum or minimum value, the sum, and the arithmetic mean. In their case, the result depends on the entire set of data. In this lesson, we'll look at how aggregation applies to numbers and strings.

![Loop iterations](./assets/iterations.png)

Let's say we need to find the sum of a set of numbers. We'll implement a function that adds the numbers in a given range, including the bounds. A **range** is a series of numbers from a specific beginning to a specific end. For example, the range [1, 10] includes the integers from one to ten.

```php
<?php

sumNumbersFromRange(5, 7); // 5 + 6 + 7 = 18
sumNumbersFromRange(1, 2); // 1 + 2 = 3

// [1, 1] A range with the same beginning and end is also a range
// It includes exactly one number – the boundary of the range itself
sumNumbersFromRange(1, 1); // 1
sumNumbersFromRange(100, 100); // 100
```

To implement this code, we'll need a loop, because adding numbers is an iterative process, that is, it's repeated for each number. The number of iterations depends on the size of the range. Here's the code for this function:

```php
<?php

function sumNumbersFromRange(int $start, int $finish): int
{
    // Technically you can change $start
    // But input arguments should be left at their original value
    // This makes the code easier to analyze
    $i = $start;
    $sum = 0; // Initializing the sum

    while ($i <= $finish) { // Moving to the end of the range
        $sum = $sum + $i; // Calculate the sum for each number
        $i = $i + 1; // Move to the next number in the range
    }

    // Return the resulting value
    return $sum;
}
```

The general structure of the loop here is standard. It has three components:

* A counter, which is initialized with the initial value of the range
* The loop itself, with a stop condition when the end of the range is reached
* Changing the counter at the end of the loop body

The number of iterations in such a loop equals `$finish - $start + 1`. So for the range from 5 to 7, it's 7 - 5 + 1, that is, three iterations.

The main differences from ordinary processing are related to the logic of calculating the result. In aggregation tasks, there's always some variable that stores the result of the loop. In the code above, that's `$sum`. On each iteration of the loop, it gets changed by adding the next number in the range: `$sum = $sum + $i`.

The whole process looks like this:

```php
<?php

// For the call sumNumbersFromRange(2, 5);
$sum = 0;
$sum = $sum + 2; // 2
$sum = $sum + 3; // 5
$sum = $sum + 4; // 9
$sum = $sum + 5; // 14
// 14 – the result of adding the numbers in the range [2, 5]
```

Visually, the process of accumulating the sum looks like this:

```text
sumNumbersFromRange(2, 5):

i=2: sum = 0 + 2 = 2
i=3: sum = 2 + 3 = 5
i=4: sum = 5 + 4 = 9
i=5: sum = 9 + 5 = 14
                    └── result
```

The `$sum` variable has an initial value equal to 0. Why set a value at all? Any repeating operation starts with some value. You can't just declare a variable and start working with it inside a loop. This can lead to errors:

```php
<?php

// the initial value is not set
// PHP automatically makes it equal to NULL
$sum;

// the first iteration of the loop
$sum = $sum + 2; // ?
```

As a result of such a call, `$sum` will hold the correct result, but the interpreter will print a warning: `PHP Warning:  Undefined variable $sum`. It occurs because of an attempt to use an undefined variable. So some value is needed after all. Why is 0 chosen in the code above? It's very easy to verify that all other options will lead to the wrong result. If the initial value is 1, then the result will be 1 greater than needed.

In mathematics, every operation has a **neutral element of that operation**. An operation with this element doesn't change the value on which the operation is performed:

* Zero for addition: any number + zero = the number itself
* Zero for subtraction: any number - zero = the number itself
* The empty string for concatenation: `'' . 'string'` will be `'string'`

Therefore, if we were multiplying, instead of `0` we would use `1`.
