
Implement a function called `sumOfSeries()`, which counts the sum of [a series of integers](https://en.wikipedia.org/wiki/Series_(mathematics)). A series is given using two numbers, a start number and an end number.

The function takes two number arguments and returns the sum of the series. For example, if you pass `4` and `7` as arguments, the sum will be `4 + 5 + 6 + 7 = 22`.

```php
<?php

sumOfSeries(1, 2); // 3
sumOfSeries(1, 3); // 6
sumOfSeries(4, 7); // 22
```

If the initial and final numbers are equal, the result will be the same number:

```php
<?php

sumOfSeries(1, 1); // 1
```
