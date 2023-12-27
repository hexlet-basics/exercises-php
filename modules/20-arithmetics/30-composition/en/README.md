Suppose we want to calculate an expression like `3 * 5 - 2`? This is how we'd write it down:

```php
<?php

print_r(3 * 5 - 2); // => 13
```

Note that the interpreter performs arithmetic operations in the right order: first division and multiplication, then addition and subtraction.  Sometimes we want to change the order of operations. We'll dig into this topic in the next lesson.

Or another example:

```php
<?php

print_r(2 * 4 * 5 * 10); // 2 * 4 * 5 * 10 = 8 * 5 * 10 = 40 * 10 => 400
```

We can combine operations, which allows us to calculate even more complex compound expressions. This property of operations is called composition. The composition of arithmetic operations in programming is similar to how it's done in school. As you'll later learn, the composition of operations applies to all operations in general, not just arithmetic operations.

To visualize how calculations are done inside the interpreter, let's look at an example: `2 * 4 * 5 * 10`.

1. First we calculate `2 * 4` and get `8 * 5 * 10`.
1. Then `8 * 5`. The result is `40 * 10`.
3. Finally, we do the last multiplication, and the result is `400`.
