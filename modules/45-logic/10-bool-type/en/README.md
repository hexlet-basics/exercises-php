
Besides arithmetic operators, you'll also know comparison operators from school.  For example, `5 > 4`. It sounds like a question, "Is 5 greater than 4?" The answer is "yes". In other cases, the answer may be "no" (e.g., for `3 < 1`).

Comparison operators aren't restricted to numbers. You can put them in almost anything, e.g., strings. Every time we visit a website, it compares the username and password we've entered with those in the database. And they'll let us in if we have them (authentication).

Programming languages have borrowed all the comparison operators from math virtually unchanged. The only major change concerns the equality and inequality operators. In math, the usual equal sign is `=`, but this is rare in programming.  In many languages, the symbol `=` is used to assign values to variables, so you need to use `==` or `===` for comparison.

List of comparison operations:

* `<` less than
* `<=` less than or equal to
* `>` more than
* `>=` greater than or equal to
* `===` equal to
* `!==` not equal to

_A tiny note: for equality and inequality, there's also `==` and `!=`, neither of which we'll use because of the possible risks. We'll discuss it later._

A logical operation like `5 > 4` or `$password === $text` is an expression, and its result is a special value, `true` or `false`. This is a new data type for us - bool. It has only these two values.

```php
<?php

$result = 5 > 4;
print_r($result); // => true
print_r('one' !== 'one'); // => false
```

Along with strings and integers and rational numbers, the boolean type is one of the most primitive data types in PHP.

---

Try writing a primitive function that takes a child's age as input and decides whether they are a baby or not. Babies are defined as children under a year old:

```php
<?php

function isInfant($age)
{
    return $age < 1;
}
```

We're taking advantage of the fact that any operation is an expression, so the only line of the function is "return the value that results from comparison `$age < 1`».

Depending on the argument that came in, the comparison will either be (`true`) or (`false`), and `return` will return that result.

Let's call the function and display the result. You should use`var_dump()`, to output bool, not `print_r()`:

```php
<?php

function isInfant($age)
{
    return $age < 1;
}

var_dump(isInfant(3));
```

<pre class='hexlet-basics-output'>bool(false)</pre>

Now, perform the check on a child who's six months old:

```php
<?php

var_dump(isInfant(0.5));
```

<pre class='hexlet-basics-output'>bool(true)</pre>
