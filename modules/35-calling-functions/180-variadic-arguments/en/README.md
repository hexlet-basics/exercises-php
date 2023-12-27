
An interesting feature of some functions is that they can accept a varying number of arguments. We're not talking about default values. Check out this example:

```php
<?php

max(1, 10, 3); // 10
```

The `max()` function finds the maximum value among the passed arguments. How many arguments do you think it expects to receive? This function's documentation shows something interesting:

  ```
  max ( mixed $value1 [, mixed $... ] ) : mixed
  ```

  This means that this function accepts any number of arguments as input (and can even be called without them). Passed arguments that are optional are shown with _[]_, which is the same as how optional parameters that have default values are described. The ability to pass any number of parameters is encoded with _[, ...]_.

  ```php
  <?php

  max(1, -3, 2, 3, 2); // 3
  ```
