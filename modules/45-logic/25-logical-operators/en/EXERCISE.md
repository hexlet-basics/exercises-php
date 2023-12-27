
Implement the `isLeapYear()` function, which determines whether the year is leap year or not. A leap year is a multiple of 400 (i.e. divisible without a remainder), or is both a multiple of 4 and not a multiple of 100.  As you can see, the definition already contains all the required logic, all we need to do is to put it into code:

```php
<?php

isLeapYear(2018); // false
isLeapYear(2017); // false
isLeapYear(2016); // true
```

You can check if a number is a factor of another number like so:

```php
<?php

// % - returns the remainder of the left operand divided by the right operand
// Checking that the number is a multiple of 10
$number % 10 === 0
// Checking that the number is not a multiple of 10
$number % 10 !== 0
```
