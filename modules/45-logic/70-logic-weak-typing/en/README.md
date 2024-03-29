
In the Arithmetic module, we touched on the topic of weak typing.

PHP is a **weakly typed** language. It recognizes different data types (numbers, strings, etc.), but doesn't use them too strictly, it tries to convert data when it seems reasonable.

A particularly large number of automatic transformations take place when working with logical operations.

In PHP there are two simple rules by which conversions take place:

* `0`, `'0'`, `''` (empty string), `null` are set to `false`. These values are called *falsy*.
* Everything else becomes `true`.

This works the other way as well: `true` and `false` are converted to other data types, depending on the situation:

```php
<?php

print_r(true);
```

<pre class='hexlet-basics-output'>1</pre>

```php
<?php

print_r(false);
```

<pre class='hexlet-basics-output'></pre>

*(an empty string has been printed)*

Another example:

```php
<?php

print_r(0 || 1);
```

<pre class='hexlet-basics-output'>1</pre>

What happened here:

The **OR** operator only works with the *bool* type, but it's also given the numbers `1` and `0`.

1. `0` is converted to `false` and `1` is converted to `true`.
2. The result `false || true` is `true`.
3. Now `print_r()` gets `true`,  but it only works with strings (not *bool*).
4. `true` is converted to `1`.
5. And the screen displays `1`.

---

In one of our lessons, we looked at the comparison operators `===` and `!==` and mentioned that PHP also has the operators `==` and `!=`, but we shouldn't use them. The difference lies in type conversion:

```php
<?php

var_dump('' === false); // => false
var_dump('' == false);  // => true
```

An empty string and `false` are different values, so the `===` operator says "false! they're not equal!

But the `==` operator converts types, making an empty string and `false` equivalent from its point of view. This conversion is implicit, so avoid the `==` and `!=` operators whenever possible.

---

Remember the negation operator:

```php
<?php

$answer = true;
var_dump(!$answer); // => false
```

When you use double negation `!!` the result value is equal to the initial value:

```php
<?php

$answer = true;
var_dump(!!$answer); // => true
```

However, this is where type conversions also take place. Therefore, the result of a double negation will always be a _bool_. This trick is used to change the data type.

---

Different programming languages have different transformation rules. Some languages don't convert types themselves at all. Many features of PHP aren't really the best, but this is the historical legacy of the language. If it were created from scratch today, many of the rules and nuances would probably be quite different.
