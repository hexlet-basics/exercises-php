Our site automatically checks your solutions. How does it work?

In the simplest case, the check runs your code and compares the screen output with the expected result. For example, if the task reads: "Display the number 10 on the screen", then your PHP code might look like this:

```php
<?php

print_r(10);
```

The check will run this code and make sure that `10` actually appeared on the screen. If the output matches the expected one, the solution is accepted. Otherwise, you will see an error:

```text
Failed asserting that two strings are equal.
--- Expected
+++ Actual
-'10'
+'9'

FAILURES!
Tests: 1, Assertions: 1, Failures: 1.
```

The line with `+` shows the actual result returned by your code, and the line with `-` shows the expected value.

In the following, more complex lessons, you will write functions. They take data and return a result. In such tasks, the check works a little differently: it calls your function with different arguments and knows in advance what answer should be obtained in each case.

For example, if you need to write a function that adds two numbers, the check will pass it different pairs of numbers and compare the result with the correct sum. If the answers match in all cases, the solution is considered correct.

This approach is called testing, and it is used in real development. Tests help check whether the program works correctly and quickly spot an error after changes.

That is exactly why our site says "Tests passed" when you have solved the task correctly.

## Is It My Mistake or Not?

Sometimes, while solving a task, it will seem that you did everything correctly, but the check does not accept the solution. This happens extremely rarely. Tests run automatically after every change, so a broken check usually does not make it to the site.

In the vast majority of such cases, the error is contained in the solution code. It can be very subtle: instead of an English letter you accidentally typed a Russian one, instead of uppercase you used lowercase, or you forgot to output a comma. There are also more complex situations. For example, the solution works for one set of input data but does not work for another.

So always read the task description and the test output carefully. There is almost certainly an indication of the error there.

If, however, you are sure that the problem is in the task or you have found an inaccuracy, write to our [community](https://t.me/hexletcommunity), in the _'Feedback'_ channel.
