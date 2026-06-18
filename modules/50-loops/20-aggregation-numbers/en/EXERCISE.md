Implement a function `calculateElectricityBill()` that takes the number of consumed kilowatt-hours and returns the amount of the electricity bill.

In this task, a tiered tariff applies. The first `100` kWh cost `5` rubles each, the next `100` kWh cost `7` rubles each, and all kWh above `200` cost `10` rubles each.

Go through the consumption with a loop and gradually accumulate the total amount.

```php
<?php

calculateElectricityBill(80);  // 400
calculateElectricityBill(150); // 850
calculateElectricityBill(250); // 1700
```
