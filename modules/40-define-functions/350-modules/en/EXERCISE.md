Implement the `amountPerPerson()` function. It takes a restaurant bill total, the number of people, and a tip percentage, and returns the amount each person pays. The result is rounded up — no one should underpay.

Use the built-in `ceil()` function for rounding. It is available right away — nothing needs to be loaded.

```php
<?php

// Bill 300, 4 people, 20% tip — 360 in total, everyone pays 90
print_r(amountPerPerson(300, 4, 20)); // => 90

// Bill 350, 3 people, 10% tip — 385 in total, everyone pays 129
print_r(amountPerPerson(350, 3, 10)); // => 129
```

## Hint

* First calculate the total with the tip, then divide it by the number of people and round up
* `ceil()` returns a `float`, while the function must return an `int` — type casting will help
