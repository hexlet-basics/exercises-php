In programming, an expression is something that returns a usable output value. We already know a lot about expressions and how they're made. Math operations (addition, subtraction, etc.) and string operations (concatenation) are all expressions:

```php
<?php

1 + 5 * 3
'He' . 'Let'
// Variables can be a part of an expression
$rate * 5
```

One feature of expressions is that they return a result that can be assigned to a variable or printed. For instance:

```php
<?php

// Here the expression is 1 + 5
$sum = 1 + 5;
print_r(1 + 5);
```

But not just any code can be an expression. The definition of a variable is a statement, it can't be part of an expression. And doing so will lead to an error:

```php
<?php

// Useless code that won't work
10 + $sum = 1 + 5;
```

Why is this important to know? You can combine expressions to get more and more complex behavior in the most unexpected places and the most surprising ways, as you will see. You'll get a better understanding of how you can combine pieces of code to get the desired results.

Let's talk about functions. Is a function call an expression or not? We know that functions return results, which means that, yes, they're expressions. This leads to a lot of interesting possibilities. For example, we can call functions directly in math operations. This is how we can get the last character index in a word:

```php
<?php

$name = 'php';
// Indexes start with zero
// Method call and subtraction together!
$last_index = strlen($name) - 1;
print_r($last_index); // 2
```

This code has no new syntax. We've just combined what we already know. We could go even further:

```php
<?php

$name = 'php';
print_r(strlen($name) - 1); // => 2
```

All of this applies for any function, e.g., string functions:

```php
<?php

$name = 'php';
// Interpolation
print_r("Last character: {$name[strlen($name) - 1]}");
// => 'Last character: p'
```
