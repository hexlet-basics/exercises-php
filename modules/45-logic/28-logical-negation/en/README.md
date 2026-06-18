Alongside the logical operators **AND** and **OR**, the "**negation**" operation is also frequently used. It changes a logical value to its opposite. In PHP, negation corresponds to the unary operator `!`:

```php
<?php

!true;  // false
!false; // true
```

For example, if there's a function that checks whether a number is even, then with negation you can perform a check for oddness:

```php
<?php

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

var_dump(isEven(10));  // => bool(true)
var_dump(!isEven(10)); // => bool(false)
```

In the example above, we added `!` to the left of the function call and got the opposite action.

Negation lets you express the intended rules in code without writing new functions. If you write `!!isEven(10)`, the code will work even in such a case:

```php
<?php

var_dump(!!isEven(10)); // => bool(true)
```

In logic, double negation is equivalent to no negation:

```php
<?php

!!true;  // true
!!false; // false

var_dump(!!isEven(10)); // => bool(true)
var_dump(!!isEven(11)); // => bool(false)
```

`!` can be combined with `&&` and `||`. Among the logical operators it has the highest precedence, so it is applied first:

```php
<?php

!true || true;  // (!true) || true   => false || true  => true
!true && false; // (!true) && false  => false && false => false
```

Parentheses change the order of evaluation:

```php
<?php

!(true || true);  // !true  => false
!(true && false); // !false => true
```

A practical example — a function checks whether a driver can get behind the wheel: a license and sobriety are required:

```php
<?php

function canDrive(bool $hasLicense, bool $isDrunk): bool
{
    return $hasLicense && !$isDrunk;
}

var_dump(canDrive(true, false));  // => bool(true)  (has a license, sober)
var_dump(canDrive(true, true));   // => bool(false) (has a license, but drunk)
var_dump(canDrive(false, false)); // => bool(false) (no license)
```

Now you know what the operators **AND**, **OR**, and `!` mean. With their help you'll be able to set compound conditions made of two or more logical expressions.

## De Morgan's Laws

When working with complex logical expressions, you sometimes need to invert them or rewrite them in an equivalent form that's easier to read. For this there are **De Morgan's laws** — two rules that describe how negation distributes over a compound expression:

```text
!(A && B)  is equivalent to  !A || !B
!(A || B)  is equivalent to  !A && !B
```

The first law: the negation of a conjunction equals the disjunction of the negations. Let's check:

```php
<?php

!(true && false); // !false => true
!true || !false;  // false || true => true
```

The second law: the negation of a disjunction equals the conjunction of the negations:

```php
<?php

!(true || false); // !true => false
!true && !false;  // false && true => false
```

In practice, De Morgan's laws help simplify conditions. For example, instead of `!($isAdmin || $isModerator)` you can write `!$isAdmin && !$isModerator` — it reads as "not an administrator and not a moderator".
