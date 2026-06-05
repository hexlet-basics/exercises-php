
Let's look at the `round()` function. It rounds up the number passed to it:

```php
<?php

$result = round(10.25, 0); // 10
```

We passed two arguments to it: the number and the rounding accuracy. `0` means that the rounding will be to an integer value.

We usually need to round to a whole number (and not to 1 decimal point, for example), so the creators of the `round` function made the second argument **optional** and set the **default value within the function to `0`**. So you can leave out the second argument and the result will be the same:

```php
<?php

$result = round(10.25); // 10
```

And if you need to round it to a number of decimal places, then you can pass the required argument as well:

```php
<?php

$result = round(10.25, 1); // 10.3
```

If a function in PHP takes optional arguments, they'll alway come after the required ones. Their number varies depending on the function itself, but they always go one after another and at the end of the list of arguments.
