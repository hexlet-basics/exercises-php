
Regardless of the programming language, functions possess certain fundamental properties. Knowing these properties makes it easier to predict the behavior of functions, as well how they can be tested and used. These properties include determinacy. A function is called deterministic when it always returns the same result for the same input arguments. For example, the function that flips a string is deterministic.

```php
<?php

strrev('cat'); // tac
strrev('cat'); // tac
```

No matter how many times we call it with `'cat'`, it will always return `'tac'` (though you could technically write it differently, but that would make no sense and cause more problems). In turn, a function that returns a random number isn't deterministic, because we'll always get different results for the same input (even if it's empty, i.e., no arguments are passed). How it differs doesn't matter, even if at least one in a million calls returns something different, this function is deemed non-deterministic.

```php
<?php

rand(); // 827606195
rand(); // 635369726
```

So what use is knowing that to us? Determinism significantly affects many aspects. Deterministic functions are easy to work with, easy to optimize, and easy to test. If you can make the function deterministic, then you should absolutely do so.
