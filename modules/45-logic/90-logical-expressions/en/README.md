Logical expressions can use more than just `bool` values. When a value gets into a logical context, PHP converts it to `true` or `false`.

There is a fixed set of **falsy** values: `false`, `0` (and `0.0`), the empty string `''`, the string `'0'`, and `null`. Everything else is **truthy**. You can check this with the double negation `!!`, which converts any value to `bool`:

```php
<?php

var_dump(!!'hello'); // => bool(true)
var_dump(!!'');      // => bool(false)
var_dump(!!'0');     // => bool(false) — a PHP peculiarity
```

Unlike many languages where `&&` and `||` return one of their operands, in PHP logical operators always return a `bool`:

```php
<?php

var_dump('hello' && 'world'); // => bool(true)
var_dump(0 || 1);             // => bool(true)
```

Type conversion also happens with loose comparison. The `==` operator converts operands before comparing, so an empty string equals `false` from its point of view. This conversion is implicit, so avoid `==` and `!=` whenever possible:

```php
<?php

var_dump('' === false); // => bool(false)
var_dump('' == false);  // => bool(true)
```

A common beginner mistake is writing `$value === ('first' || 'second')`. The parentheses evaluate first: both strings are truthy, so the result is `true`, and the whole expression becomes `$value === true` — always false for strings. The correct check is:

```php
<?php

$value === 'first' || $value === 'second';
```
