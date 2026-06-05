As a program grows, the code is split into separate files. In PHP, a file is connected with the `require` statement — after that, all functions from it become available:

```php
<?php
// index.php

require 'helpers.php';

sayHi(); // => Hi!
```

The tests in this course use the same mechanism: they load your solution with `require 'index.php';`.

`include` differs from `require` in how a missing file is handled: `include` emits a warning and the program keeps running, while `require` stops with an error. `require_once` loads a file only once, which matters for files with functions: redeclaring a function causes an error.

Unlike many languages, PHP's built-in functions are available everywhere without any imports. For example, `floor()` rounds a number down, and `ceil()` rounds it up:

```php
<?php

print_r(floor(7.9)); // => 7
print_r(ceil(7.1));  // => 8
```

To deal with name conflicts, PHP has **namespaces** — you have seen the `namespace HexletBasics\...;` line at the beginning of every exercise. They are studied in detail later, at Hexlet.
