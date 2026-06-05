PHP supports **type declarations** (also known as type hints): you can specify the types of parameters and the return value of a function. Parameter types are written before the parameter name, the return type goes after the parameter list, separated by a colon:

```php
<?php

function add(int $a, int $b): int
{
    return $a + $b;
}

print_r(add(2, 3)); // => 5
```

Unlike many languages, PHP checks types at runtime. An incompatible value causes a `TypeError`, while compatible values are coerced automatically (`add('2', 3)` returns `5`).

At this stage, the simple types are enough: `int`, `float`, `string`, `bool`. If a function returns nothing, the return type is `void`:

```php
<?php

function printGreeting(string $name): void
{
    print_r("Hello, {$name}!");
}
```

Type declarations are optional, but they make the code clearer for people, editors, and static analysis tools. Using them is considered good practice.
