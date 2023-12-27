
Alongside the conjunction (AND) and disjunction (OR) operators, we often use the negation operator, too. It changes the logical value to the opposite one. It's denoted by the unary operator `!` in programming.

If there's a function that checks for even numbers, then negation will allow you to check for odd numbers:

```php
<?php

function isEven($number)
{
    return $number % 2 === 0;
}

isEven(10);  // true
!isEven(10); // false
```

I.e., we can just put a `!` to the left of the function call and get the opposite result. Negation is a powerful tool that allows you to concisely express the desired rules in your code without having to write new functions.

What if you write it like this `!!isEven(10)`? Suddenly, the code will work. Double negation in logic is equivalent to no negation at all.

```php
<?php

isEven(10);   // true
!isEven(10);  // false
!!isEven(10); // true
```
