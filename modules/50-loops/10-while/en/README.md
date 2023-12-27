
Our code is getting more and more complex and extensive. It's still quite far from real applications, which contain tens or hundreds of thousands (sometimes millions) of lines of code. However, our code is already complex enough to make inexperienced programmers feel a bit nervous. Starting with this lesson, we move on to one of the most difficult of the basic topics in programming: *loops*.

All applications serve very pragmatic purposes. They help manage employees, finances, and entertain, after all. Despite the differences, all these programs contain and execute similar algorithms. What's an algorithm? An algorithm is a sequence of actions (statements) which lead us to an expected result. This description fits any program in general, but with algorithms, we usually mean something more specific.

Imagine we have a book, and we want to find a particular phrase within it. We remember the phrase itself, but we don't know what page it is on. How do we find the right page? The easiest (and longest) way is to look through the pages one by one until we find the right one. In the worst case, we'll have to look through all the pages, but we still get the result we want. This very process is called an algorithm. It includes a logical verification (if the phrase is found) and an exhaustive page search. The number of pages you'll have to look through isn't known in advance, but the process itself is repeated again and again in exactly the same way. This is why we need loops to perform repetitive actions. In this case, each repetition is called an iteration.

Let's say we want to write a function that prints all numbers between 1 and a given number (via arguments):

```php
<?php

printNumbers(3);
// => 1
// => 2
// => 3
```

This function cannot be implemented with the tools we've already learned to use, because the number of outputs on the screen is not known in advance. But with loops this won't be a problem:

```php
<?php

function printNumbers($lastNumber)
{
    // i means index
    // used as a loop counter by common agreement
    // in many languages
    $i = 1;

    while ($i <= $lastNumber) {
        print_r($i);
        print_r("\n");
        $i = $i + 1;
    }
    print_r('finished!');
}

printNumbers(3);
```

https://replit.com/@hexlet/php-basics-while

<pre class='hexlet-basics-output'>
1
2
3
finished!
</pre>

Here we use a `while` loop in the function. It has three elements:

* The key word here is `while`. It's not a function call, although it resembles it.
* Predicate. A condition given in parentheses after `while`. This condition is computed at each iteration.
* Loop body. Block of code in curly brackets.

The construction reads like this: "do what's specified in the body of the loop as long as the condition (predicate) `$i <= $lastNumber`». Let's look at how this code works to `printNumbers(3)`:

```php
<?php

// Initializes the i variable
$i = 1;

// Predicate is true, so execute loop body
while (1 <= 3)
// print_r(1);
// $i = 1 + 1;

// The loop body is executed, so we return to the beginning
while (2 <= 3)
// print_r(2);
// $i = 2 + 1;

// The loop body is executed, so we return to the beginning
while (3 <= 3)
// print_r(3);
// $i = 3 + 1;

// Predicate is false, so execution goes beyond loop
while (4 <= 3)

// print_r('finished!');
// At this point, i is 4, but we don't need it anymore
// function terminates
```

The main purpose of a loop is to end it (exit from a loop). The process which generates the loop must eventually stop. It's up to the programmer to stop it. Usually this comes down to introducing a variable called a loop counter.  The counter should first be initialized, that is, you must assign it an initial value.  In our example, it's the instruction `$i = 1`, which is executed before entering the loop. Then the loop condition checks to see if the counter has reached its limiting value. Finally, the counter changes its value `$i = $i + 1`.

This is where beginners make the most mistakes. For example, accidentally forgetting to increment the counter or having an incorrect predicate check can lead to an infinite loop. This is a situation in which the loop runs indefinitely and the program never stops. We then have to end it forcibly (it may sometimes be the case that when real applications freeze, there's an infinite loop running inside them).

```php
<?php

function printNumbers($lastNumber)
{
    $i = 1;

    // This loop will never stop
    // and will always print one value
    while ($i <= $lastNumber) {
        print_r($i);
    }
    print_r('finished!');
}
```

In some cases, infinite loops are useful. We won't deal with those cases here, but it's useful to see what it looks like:

```php
<?php

while (true) {
    // Doing something
}
```

To summarize. When do we need loops, and when can we do without them? It's physically impossible to do without loops when a problem-solving algorithm requires actions to be repeated, like with the example with the book, and the number of times you'll need to perform these operations can't be known in advance.
