Two operations are carried over from C to PHP:

* Increment `++`
* Decrement `--`

They are very common with loops. These unary operations increment and decrement by one the number written in a variable:

```php
<?php

$i = 0;
$i++; // 0
$i++; // 1

$i--; // 2
$i--; // 1
```

When using the prefix form, it's the other way around. First the variable is changed, and then the new value is returned:

```php
<?php

$i = 0;
++$i; // 1
++$i; // 2

--$i; // 1
--$i; // 0
```

It seems there's no difference between postfix and prefix forms. But this is where it gets complicated. All other operations have no side effects and simply return a new value. Unlike them, increment and decrement not only return a value but also **change** the value of the variable.

When using prefix notation, the variable is changed first, and then it's returned. When using postfix notation, it's the other way around: first it's returned, and then the variable is changed.

The rule works exactly the same for both increment and decrement. For simplicity, let's consider only increment:

```php
<?php

$x = 5;

echo ++$x; // => 6
echo $x;   // => 6

echo $x++; // => 6
echo $x;   // => 7
```

Let's discuss what happens step by step in the code:

1. We printed `++$x` — this is a prefix increment, so first the value of the variable is increased by 1, then the result is returned and printed to the screen
2. The value has changed, so `echo $x` printed 6
3. Now we print `$x++` — this is a postfix increment, so first the value is returned and printed to the screen, and then the variable is increased by 1
4. The value has changed, so `echo $x` printed 7

Increment and decrement can significantly complicate the code. It's especially difficult when we insert increment inside other operations: `$x = $i++ - 7 + --$h`.

It's impossible to understand such code, so it's better not to use such constructions. For example, in JavaScript, when checking the code, the linter immediately starts to complain when it sees the use of increment and decrement.

We advise using these constructions as follows:

* Within a single expression, never mix functions without side effects with functions with side effects (the same applies to operations)
* Use increment and decrement only where there's no difference between the prefix and postfix variant: separately from everything, on its own line of code
