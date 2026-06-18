Some functions have a special feature: they accept a variable number of arguments. This isn't related to default values, as it was with `round()`. The point is that the amount of data passed isn't limited to a fixed number.

Let's look at the `max()` function. It finds the largest value among the passed data.

```php
<?php

print_r(max(1, 10, 3)); // => 10
print_r(max(1, -3, 2, 3, 2)); // => 3
```

Let's open the [documentation](https://www.php.net/manual/en/function.max.php) and look at the signature of `max()`:

```php
max(mixed $value, mixed ...$values): mixed
```

This means:

- the function requires at least one value (`$value`);
- after that you can pass any number of additional values (`...$values`) — a variable number of arguments is denoted by the ellipsis `...`;
- the function will return the largest of those passed.

The `mixed` type in the signature means "any type": the function can compare not only numbers, but other values as well.

If there are several identical maximum values among the arguments, the first of them is returned.

```php
<?php

print_r(max(5, 5, 2)); // => 5
```

The `min()` function works in the same way, only it looks for the smallest value:

```php
<?php

print_r(min(1, 10, 3)); // => 1
print_r(min(1, -3, 2, 3, 2)); // => -3
```
