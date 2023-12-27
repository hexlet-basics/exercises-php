
Two operations are carried over from C to PHP: **Increment** `++` and **Decrement** `--`, which are very common with loops. These unary operations increment and decrement by one the number written in the variable.

```php
<?php

$i = 0;
$i++; // 0
$i++; // 1

$i--; // 2
$i--; // 1
```

When using a prefix, it's the other way around: first you change the variable and then return the new value:

```php
<?php

$i = 0;
++$i; // 1
++$i; // 2

--$i; // 1
--$i; // 0
```

It seems there's no difference between using prefix and postfix notation. But this is where it gets complicated.

Unlike other operators, which have no side-effects and simply return a new value, increment and decrement not only return a value but also change it.

If you use prefix notation, the variable is changed first, and then it's returned.

When using postfix notation, it's the other way around: first it's returned and then the variable is changed.

The rule works exactly the same for both incrementing and decrementing.  For simplicity's sake, we'll only look at increments for now:

```php
<?php

$x = 5;

echo ++$x; // => 6
echo $x;   // => 6

echo $x++; // => 6
echo $x;   // => 7
```

What's going on?

1. We've printed `++$x`.  It's a prefix increment, so first the value is increased by 1, and then the result is returned and printed.
2. Since the value has changed, `echo $x` outputs 6.
3. Now display `$x++`. This is a postfix increment, so first the value was returned and displayed, and then the variable was incremented by 1.
4. Since the value has changed, `echo $x` outputs 7.

Increment and decrement can make code very complex. Things get especially scary when increments are inserted inside other operations: `$x = $i++ - 7 + --$h`. It's impossible to understand such code, and writing it should be considered a serious crime.

For example, in JavaScript, the linter (the program that checks the code) immediately starts to complain when it sees increment and decrement being used.

Usage guidelines:

* Never mix operations/functions that don't have side effects with operations/functions that do have side effects within a single expression.
* Use increment and decrement only if there's no difference between the prefix and postfix version. It should be separate from other expressions and on a separate line of code.
