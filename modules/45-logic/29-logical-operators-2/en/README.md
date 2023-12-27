
Logical operators are an important topic, so it's worth reinforcing them with some more examples and practice.

Let's try to implement a function that checks a year to see if it's a leap year. A year is a leap year if it's a multiple of 400, or if it's both a multiple of 4 and not a multiple of 100. As you can see, the definition already contains all the required logic, all we need to do is to put it into code:

```php
<?php

function isLeapYear($year)
{
    return $year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0);
}

isLeapYear(2018); // false
isLeapYear(2017); // false
isLeapYear(2016); // true
```

Let's break it down piece by piece:

- the first condition, `$year % 400 === 0`: means the remainder of division by 400 is 0, so the number is a multiple of 400
- `||` **OR**
- second condition `($year % 4 === 0 && $year % 100 !== 0)`
    - `year % 4 === 0`: means the remainder of division by 4 is 0, so the number is a multiple of 4
    - `&&` **AND**
    - `$year % 100 !== 0`: means the remainder of division by 100 is not 0, so the number is not a multiple of 100
