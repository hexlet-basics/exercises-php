
Syntactic sugar operators are especially handy when you need to build up a final value step by step.

Implement the function `buildProgressBar()`, which takes the number of completed steps and the total number of steps, and then returns a progress indicator string.

Completed steps are marked with the `#` character, and the remaining ones with the `-` character. Try not to use built-in string functions in your solution.

```php
<?php

buildProgressBar(0, 5); // '-----'
buildProgressBar(3, 5); // '###--'
buildProgressBar(5, 5); // '#####'
```

You will find the `.=` operator useful for gradually building the new string inside a `while` loop. And the `+=` operator will help you control the loop condition.
