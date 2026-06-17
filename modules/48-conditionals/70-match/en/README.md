The `match` expression appeared in PHP 8 and solves the same task as `switch`: it picks a result based on a variable's value. The constructs are similar, but `match` is shorter and works as an expression. Let's compare them on one example. Here is how you select a text by an order status with `switch`:

```php
<?php

switch ($status) {
    case 'processing':
        $statusText = 'Order is being processed';
        break;
    case 'paid':
        $statusText = 'Order is paid';
        break;
    case 'new':
        $statusText = 'New order';
        break;
    default:
        $statusText = 'Unknown status';
}
```

The same thing with `match` takes less space, and the result goes straight into the variable:

```php
<?php

$statusText = match ($status) {
    'processing' => 'Order is being processed',
    'paid' => 'Order is paid',
    'new' => 'New order',
    default => 'Unknown status',
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

To the left of the `=>` arrow is the value to compare, and to the right is any expression that becomes the result. The `default` arm fires when no value matches and plays the role of `else`. If several values lead to the same result, they are listed separated by commas:

```php
<?php

$type = match ($size) {
    'xs', 's' => 'small',
    'm' => 'medium',
    'l', 'xl' => 'large',
};
```

The main difference from `switch` is that `match` is an **expression**. The whole construct evaluates to a value, so the result can be assigned to a variable or returned from a function right away. `switch` cannot do this; it needs a separate variable or a `return` inside a `case`. There are other differences too:

* `match` compares values strictly, like the `===` operator, with no automatic type conversion. `switch` compares loosely, with `==`.
* `match` executes exactly one arm, so no `break` is needed. In `switch`, without `break`, control falls through to the next `case`.
* If nothing matches in `match` and there is no `default`, the program terminates with an `UnhandledMatchError`. In the same case, `switch` does nothing.

Since `match` returns a value, its result is often returned straight from the function with `return`:

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

Technically you can always do without `match`, just as without `switch`. But when you need to pick a result by specific values of a variable, `match` expresses that intent most clearly, and such code is easier to read than a chain of `elseif`.
