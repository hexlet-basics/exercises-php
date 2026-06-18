We already know that expressions can be made up of several operations. But if you write the entire calculation in one long line, the code quickly becomes hard to read.

For example, this kind of code works:

```php
<?php

$yuansCount = 50 * 1.25 * 6.91;
print_r($yuansCount); // => 431.875
```

PHP will easily compute this expression. But it's no longer that convenient for a human to read such code. Questions immediately arise:

- What does `1.25` mean?
- What does `6.91` mean?
- Where does one calculation step end and the next one begin?

To make such calculations clearer, variables can be used inside other expressions. First, the program stores an intermediate result in a variable, and then substitutes the value of that variable into the next calculation.

Variables help break down complex calculations into understandable parts and store intermediate results.

## Currency conversion through an intermediate currency

Imagine that we need to convert euros into yuans, but the direct exchange rate isn't available to us. Then we'll do it in two steps: **euros -> dollars -> yuans**. Banks often work this way when paying for purchases abroad.

## Step 1. Euros -> Dollars

Let's say the rate is: 1 euro = 1.25 dollars. We want to convert 50 euros:

```php
<?php

$dollarsPerEuro = 1.25;
$dollarsCount = 50 * $dollarsPerEuro;
print_r($dollarsCount); // => 62.5
```

In this line, `50 * $dollarsPerEuro` is an expression, and `$dollarsCount` is the variable into which the result is written. PHP first computes the expression and only then stores the result in the variable.

The interpreter doesn't care how the expression is written:

```php
$dollarsCount = 62.5;
```

or

```php
$dollarsCount = 50 * $dollarsPerEuro;
```

The result will be the same. But for a human, the second option is more useful: the name `$dollarsCount` immediately makes it clear that at this step we got the amount in dollars.

## Step 2. Dollars -> Yuans

Now let's convert 50 euros into yuans, using the dollar as an intermediate currency. Let's say the exchange rates are: 1 dollar = 6.91 yuans, 1 euro = 1.25 dollars.

```php
<?php

$dollarsPerEuro = 1.25;
$yuansPerDollar = 6.91;

$dollarsCount = 50 * $dollarsPerEuro;
$yuansCount = $dollarsCount * $yuansPerDollar;

print_r($yuansCount);
```

This code is longer than the single line `50 * 1.25 * 6.91`, but it's easier to read:

- you can see that `1.25` is the euro-to-dollar rate
- you can see that `6.91` is the dollar-to-yuan rate
- you can see that `$dollarsCount` is an intermediate result

This becomes especially noticeable if you don't come back to the code for at least a week. Now imagine a project with hundreds of thousands of lines of code. If such projects didn't have intermediate variables and calculations, it would be impossible to make sense of them.

## What to remember

- If an expression turns out too long, it's better to break it into several steps.
- Variables help store intermediate results and make calculations clearer.
- When a variable is used in an expression, PHP substitutes its value and continues the calculation.
