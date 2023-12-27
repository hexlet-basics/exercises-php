
Let's remember one of the previous lessons:

```php
<?php

$eurosCount = 1000;
$dollarsCount = $eurosCount * 1.25; // 1250
$rublesCount = $dollarsCount * 60;  // 75000

print_r($rublesCount);
```

From the developer's point of view, such code "smells". This describes code that doesn't conform to so-called best practices. And here's the reason. If you're looking at the numbers `60` and `1.25`, you'll probably be wondering, "What are those numbers? Imagine reading a month from now! How could a new programmer who hasn't seen the code before understand it? In our example, the context is restored through proper naming, but real life code is much more complicated, and therefore it's often impossible to guess the meaning of the numbers.

This "smell" is caused by magic numbers. They're numbers that you can't explain the origin of, unless you dig deeper into the code.

The way out is simple: just create variables with the right names and everything will be as they need to be.

```php
<?php

$dollarsPerEuro = 1.25;
$rublesPerDollar = 60;

$eurosCount = 1000;
$dollarsCount = $eurosCount * $dollarsPerEuro;   // 1250
$rublesCount = $dollarsCount * $rublesPerDollar; // 75000

print_r($rublesCount);
```

Note the following details:

* lowerCamelCase naming
* The two new variables are separated from the following computations by an empty string. These variables are meaningful even without any computation involved, which is why separating them here is good, it makes it easier to read.
* The code is well named and structured, but it's longer than the previous version. This is often the case, but it's fine, because the code needs to be readable.
