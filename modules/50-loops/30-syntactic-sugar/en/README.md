Repetitive constructions come up often in programming. PHP, like many other languages, lets you write them more concisely. Such simplifications are called **syntactic sugar**, because they make the process of writing code a bit easier and more pleasant, "sweetening" it :)

## Compound assignment forms

You often need to change the value of a variable by adding or subtracting something, or by multiplying or dividing it by a number. The basic version looks like this:

```php
<?php

$index = $index + 1;
$count = $count * 2;
$total = $total - 5;
$price = $price / 3;
```

PHP lets you write this more concisely using compound operators:

```php
<?php

$index += 1; // the same as $index = $index + 1
$count *= 2; // the same as $count = $count * 2
$total -= 5; // the same as $total = $total - 5
$price /= 3; // the same as $price = $price / 3
```

It is important to understand that the difference is solely in the way it is written. The interpreter turns the shortened construction into the expanded one.

In loops these shortcuts come up especially often. Inside them we usually change a counter and accumulate a result:

```php
<?php

$sum = 0;
$index = 1;

while ($index <= 5) {
    $sum += $index;   // the same as $sum = $sum + $index
    $index += 1;      // the same as $index = $index + 1
}

print_r($sum); // => 15
```

Without the shortcuts, the body of the loop would be longer:

```php
<?php

while ($index <= 5) {
    $sum = $sum + $index;
    $index = $index + 1;
}
```

## Other operations

This notation works with numbers and with other data types.

For strings, the concatenation operator is used:

```php
<?php

$text = 'Hello';
$text .= ' World'; // the same as $text = $text . ' World'
```

## Supported shortcuts

There is a shortened form for almost every operator: `+=`, `-=`, `*=`, `/=`, `%=`, `**=`, `.=`. They all work the same way: they take the current value of the variable, apply the operation, and store the result back in the same variable.
