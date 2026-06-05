The `switch` construct from the previous lesson is not the only specialized version of `if` in PHP. Starting with PHP 8, the language has the `match` expression. It should also be used where there is an `if else` chain with equality checks:

```php
<?php

if ($status === 'processing') {
    $statusText = 'Order is being processed';
} elseif ($status === 'paid') {
    $statusText = 'Order is paid';
} elseif ($status === 'new') {
    $statusText = 'New order';
} else {
    $statusText = 'Unknown status';
}
```

This compound check has one distinctive feature. Each branch here is a check of the `$status` variable's value. The `match` expression allows you to write this code in a shorter and more expressive way:

```php
<?php

$statusText = match ($status) {
    'processing' => 'Order is being processed', // $status === 'processing'
    'paid' => 'Order is paid',                  // $status === 'paid'
    'new' => 'New order',                       // $status === 'new'
    default => 'Unknown status',                // else
};
```

```text
match (value) {
  │
  ├── 'a' → result 1
  ├── 'b' → result 2
  ├── 'c' → result 3
  └── default → default result
}
```

In terms of the number of elements, `match` is a complex construct. The outer description includes the `match` keyword and the variable whose values `match` uses to choose the behavior. Inside, there are arms, each describing the result for one of the variable's values. Each arm corresponds to an `if` in the example above. The `default` arm is a special case that corresponds to the `else` branch in conditional constructs.

The main difference between `match` and both `switch` and a regular `if` is that it is an **expression**. The whole construct evaluates to a value, so its result can be directly assigned to a variable or returned from a function. No `break` is needed: exactly one arm is executed, and fall-through is impossible here.

Only the syntax shown above is allowed inside `match`. To the left of the `=>` arrow is the value to compare, and to the right is the expression that becomes the result. If several values lead to the same result, they are listed separated by commas:

```php
<?php

$type = match ($size) {
    'xs', 's' => 'small',
    'm' => 'medium',
    'l', 'xl' => 'large',
};
```

There are other differences from `switch`:

* `match` compares values strictly, like the `===` operator. Meanwhile, `switch` uses loose comparison `==`, which performs automatic type conversion.
* If no arm matches and `default` is not specified, the program terminates with an `UnhandledMatchError`. In the same situation, `switch` would simply do nothing.

Often the result of `match` needs to be returned from the function that contains it. To do this, a regular `return` is placed before `match`:

```php
<?php

function countItems(int $count): ?string
{
    return match ($count) {
        1 => 'one',
        2 => 'two',
        default => null,
    };
}

print_r(countItems(2)); // => two
```

Although the `match` expression appears in code, technically you can always do without it. Its key benefit is that it better expresses the programmer's intent when specific values of a variable need to be checked. Such code is easier to read than `elseif` blocks.
