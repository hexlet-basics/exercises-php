Logical expressions can use more than just `bool` values. Numbers and strings can also be operands of logical operations. In this lesson, we'll look at how PHP handles them and what the result of such expressions will be.

## Falsy and truthy values

When a value gets into a logical context, PHP converts it to `true` or `false`. PHP has a fixed set of values that are considered **falsy**. These are `false`, the number `0` (and `0.0`), the empty string `''`, the string `'0'`, and the special value `null` — the "absence of a value".

All other values are considered **truthy**. These are, for example, any non-zero number (`1`, `-3.5`) and any non-empty string (`'hi'`, `'hello'`).

You can verify this with the double negation `!!`, which converts any value to `bool`: the first negation turns the value into a boolean (and inverts it), and the second one turns it back:

```php
<?php

var_dump(!!'hello'); // => bool(true)  — a non-empty string is truthy
var_dump(!!'');      // => bool(false) — an empty string is falsy
var_dump(!!0);       // => bool(false) — zero is falsy
var_dump(!!-3.5);    // => bool(true)  — a non-zero number is truthy
var_dump(!!'0');     // => bool(false) — the string '0' is falsy, a PHP peculiarity
```

This trick is used to explicitly change the data type: the result of double negation is always a value of type `bool`.

## How logical expressions work

In some languages, the "AND" and "OR" operators return one of their operands, so the result can be a string or a number. PHP works differently: the logical operators `&&` and `||` always return a value of type `bool` — `true` or `false`:

```php
<?php

var_dump('hello' && 'world'); // => bool(true)  — both operands are truthy
var_dump('' && 'world');      // => bool(false) — the first operand is falsy
var_dump(0 || 1);             // => bool(true)  — the second operand is truthy
var_dump('' || 0);            // => bool(false) — both operands are falsy
```

The order of evaluation depends on the operator precedence:

```text
Precedence (from high to low):

  ()          parentheses
   ↓
  !           negation
   ↓
  &&          logical AND
   ↓
  ||          logical OR
```

## Loose comparison

Type conversion also happens with loose comparison. Recall the operators `==` and `!=` from the lesson about the boolean type: they compare values after converting the types first. That's why, from the point of view of `==`, an empty string and `false` are equal:

```php
<?php

var_dump('' === false); // => bool(false)
var_dump('' == false);  // => bool(true)
```

An empty string and `false` are different values, so the strict operator `===` says "False! They are not equal!". But the `==` operator converts the operands and considers them equal. This conversion is implicit, so avoid the operators `==` and `!=` whenever possible.

## A choice error

Imagine a task in which we need to check that a value equals either one thing or another. For example, the variable `$value` should contain one of two values: `'first'` or `'second'`. Beginner developers sometimes write this expression like this:

```php
<?php

$value === ('first' || 'second');
```

In our heads, we picture it roughly like this, but languages work differently, so such code leads to an incorrect result. How do we read it correctly? First, everything inside the parentheses is evaluated, that is, `'first' || 'second'`. Both strings are non-empty, that is, truthy, so the result will be `true`. Now we can replace the original expression with the partially evaluated one:

```php
<?php

$value === true;
```

Not at all what we expected: the string `'first'` is not equal to `true` under strict comparison, so the expression is always false. Now let's go back to the beginning and write the check correctly:

```php
<?php

// The parentheses are not required,
// because the precedence of === is higher than the precedence of ||
$value === 'first' || $value === 'second';
```
