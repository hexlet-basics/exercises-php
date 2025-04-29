
Variables are helpful not only for storing and reusing data, but also for simplifying complex calculations. Consider an example: you need to convert euros into yuans through dollars. Banks often do this kind of conversion via an intermediate currency when shopping abroad.

First, convert 50 euros into dollars. Let's assume that one euro equals $1.25:

```php
<?php

$dollarsCount = 50 * 1.25;
print_r($dollarsCount);
```

Last lesson, we assigned a specific value to a variable. And here, in `$dollarsCount = 50 * 1.25;` there's an **expression** to the right of the equals sign. The interpreter calculates the result, `62.5`, and records it in a variable. The interpreter doesn't care about what's in front of it: `62.5` or `50 * 1.25`, both are expressions to compute. Calculating either of them will give `62.5`.

Any string is an expression. Concatenating strings is also an expression. The interpreter processes whatever expression it encounters and produces, as a result, **the value of the expression**. Here are some sample expressions with comments on the right containing the resulting value:

```php
<?php

62.5             // 62.5
50 * 1.25        // 62.5
120 / 10 * 2     // 24
(int) '100'      // 100

"hello"          // "hello"
"Good" . "will"  // "Goodwill"
```

The rules of code construction (or the grammar of the language) are such that in those places where an expression is expected, you can put any calculation (not only mathematical, but also, for example, string operations, e.g. concatenation) and the program will remain workable. For this reason, it's impossible to describe and show all use cases of all operations.

Programs consist of numerous combinations of expressions and understanding this concept is a major step on your journey.

Based on the above, consider whether this code will work.

```php
<?php

$who = "dragon's" . 'mother';
print_r($who);
```

Now, back to our currency program. We'll record the dollar value in yuans as a separate variable. Let's calculate the price of 50 euros in dollars by multiplying it by `1.25`. Let's say that 1 dollar is 6.91 yuans:

```php
<?php

$yuansPerDollar = 6.91;
$dollarsCount = 50 * 1.25; // 62.5
$yuansCount = $dollarsCount * $yuansPerDollar; // 431.875

print_r($yuansCount);
```

Now, let's merge our output with some text via concatenation:

```php
<?php

$yuansPerDollar = 6.91;
$dollarsCount = 50 * 1.25; // 62.5
$yuansCount = $dollarsCount * $yuansPerDollar; // 431.875

print_r('The price is ' . $yuansCount . ' yuans');
```

<pre class='hexlet-basics-output'>
The price is 431.875 yuans
</pre>

Any variable can be part of any expression. At the moment of calculation, its value is substituted for the variable name.

The interpreter calculates the value  of `$dollarsCount` before this variable is used in other expressions. When it comes time to use a variable, PHP "knows" the value because it's already computed it.
