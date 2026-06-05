
Implement a function `calculateDeliveryCost()` that takes a delivery country and a parcel weight in kilograms. The function should return the delivery cost.

Each country has two rates: one for parcels weighing up to and including 1 kg, and another for heavier parcels:

* `'canada'`: 600 for parcels up to 1 kg, 900 for the rest
* `'usa'`: 800 for parcels up to 1 kg, 1200 for the rest
* `'germany'`: 700 for parcels up to 1 kg, 1000 for the rest

If the country is unknown, the function should return `null`.

Function call examples:

```php
<?php

calculateDeliveryCost('canada', 0.5); // 600
calculateDeliveryCost('canada', 2);   // 900
calculateDeliveryCost('usa', 1);      // 800
calculateDeliveryCost('france', 1);   // null
```

Hint: any expression can appear to the right of the `=>` arrow, including the ternary operator.
