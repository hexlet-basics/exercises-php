
One particular type of task that can't be done without loops is data aggregation. These tasks can include searching for the maximum or minimum number in an array, and finding sums and arithmetic means. Their main thing is that the result depends on the whole set of data. To calculate the sum, you need to add all the numbers together, to calculate the maximum you need to compare **all** the numbers.

Anyone who deals with numbers, such as accountants or marketers, will be familiar with these tasks. They're usually done in a spreadsheet like Microsoft Excel or Google Spreadsheets.

Let's look at the simplest example: finding the sum of a set of numbers. We'll implement a function that adds numbers in the specified range, including bounds. A range in this case is a series of numbers from a certain beginning to a certain end. For example, the range [1, 10] includes all integers from 1 to 10.

```php
<?php

sumNumbersFromRange(5, 7); // 5 + 6 + 7 = 18
sumNumbersFromRange(1, 2); // 1 + 2 = 3

// [1, 1] - a range with the same beginning and end is also a range
// it includes exactly one number - the range boundary itself
sumNumbersFromRange(1, 1); // 1
sumNumbersFromRange(100, 100); // 100
```

To implement this code, we need a loop, because adding numbers is an iterative process (it is repeated for each number), and the number of iterations depends on the size of the range. Before you look at the code, try answering the questions below:

* What value should I initialize the counter with?
* How will it change?
* When should the loop stop?

Try thinking about these questions first and then look at the code below:

```php
<?php

function sumNumbersFromRange ($start, $finish)
{
    // Technically, you can change $start
    // But the input arguments must be left at their original value
    // This will make the code easier to analyze
    $i = $start;
    $sum = 0; // Initializing the sum

    while ($i <= $finish) { // Moving to the end of the range
        $sum = $sum + $i; // Calculate the sum for each number
        $i = $i + 1; // Move to the next number in the range
    }

    // Return the result
    return $sum;
};
```

  The general structure of the loop here is standard. There's a counter which is initialized with the initial value of the range, there's the loop itself with the condition to stop when the end of the range is reached, and, finally, the counter changes at the end of the loop body. The number of iterations in such a loop is `$finish - $start + 1`. So for a range of 5 to 7, it's 7 - 5 + 1, i.e., 3 iterations.

The main differences from normal processing are related to the logic of calculating the result. With aggregation tasks, there's always a variable that stores the result of the loop. In the code above, it's sum. With each iteration of the loop, it gets changed by adding the next number in the range:  `$sum = $sum + $i`. The whole process looks like this:

```php
<?php

// To call sumNumbersFromRange(2, 5);
$sum = 0;
$sum = $sum + 2; // 2
$sum = $sum + 3; // 5
$sum = $sum + 4; // 9
$sum = $sum + 5; // 14
// 14 - result of adding numbers in the range [2, 5]
```

The `$sum` variable has an initial value of 0. Why set a value at all? Any operation that repeats needs to start with a value. You can't just declare a variable and start working with it inside a loop. This can lead to errors:

```php
<?php

// the initial value isn't set
// PHP automatically sets it to NULL
$sum;

// the first iteration of the loop
$sum = $sum + 2; // ?
```

The result of this call will be a valid result inside `$sum` but the interpreter will print the following error: `PHP Notice:  Undefined variable: sum`. It occurs because of an attempt to use an undefined variable. So a value is needed after all. Why is 0 selected in the code above? It's very straightforward to check that all other options will lead to the wrong result. If the initial value is 1, then the result will be 1 more than necessary.

In mathematics, there's a concept of a neutral or identity element of an operation (each operation has its own element). This concept has a very simple meaning. An operation with this element doesn't change the value on which the operation is performed. In addition, any number plus zero gives the number itself. This is the same for subtraction. Even concatenation has a neutral element, which is an empty string:  `'' + 'one'` will be  'one'.

Self-check. What is the neutral element of the multiplication operation?
