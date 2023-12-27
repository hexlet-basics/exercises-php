
Remember the `isInfant()` function from the last lesson?

```php
<?php

function isInfant($age)
{
    return $age < 1;
}

var_dump(isInfant(3));
```

<pre class='hexlet-basics-output'>bool(false)</pre>

This kind of function is called a predicate. Predicate functions answer a question and always (without exception!) return either `true` or `false`.

Predicates usually have handy names in every language so that they're easily analyzed. In PHP, predicates usually begin with, but are not limited to, the prefixes `is`, `has` or `can`. Examples:

  * `isInfant()` — «is an infant?»
  * `hasChildren()` — «does they have children?»
  * `isEmpty()` — «is it empty?»
  * `hasErrors()` — «are there any errors?»

A function can only be considered a predicate **if** it returns a bool.

---

Let's write one more predicate function. It takes a string and checks if it's the word  `'Castle'`:

```php
<?php

function isCastle($type)
{
    return $type === 'Castle';
}

var_dump(isCastle('Sea'));
```

<pre class='hexlet-basics-output'>bool(false)</pre>
