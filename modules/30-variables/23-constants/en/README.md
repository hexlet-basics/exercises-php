
Some data, such as mathematical constants, never change. Take the number π. It's always approximately `3.14` and cannot change.

It's generally accepted in PHP to use constants to refer to this kind of data.

  ```php
  <?php

  const PI = 3.14;
  print_r(PI); // => 3.14
  ```

Creating a constant is different from creating a variable. It starts with the keyword const followed by the constant name. We don't need the dollar sign. Then we assign it the desired value. Constants are usually named with uppercase letters, with `_` as a separator. A constant, like a variable, can be used in any expression. The only limitation is that the constant can't be changed, which sounds pretty logical.

PHP has a lot of built-in constants that can be used anywhere in the program. Some of them are:

* `PHP_VERSION` — the current version of PHP
* `PHP_MAXPATHLEN` — maximum file name length
* `PHP_INT_MAX` — the maximum possible value of integers
