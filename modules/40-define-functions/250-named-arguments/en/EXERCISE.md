The program prepares notification text: it removes unnecessary characters from the beginning and repeats the message the required number of times. Finish the `trimAndRepeat()` function, which takes three parameters:

* A string
* `offset` — the number of characters to cut off the string from the left
* `repetitions` — how many times to repeat the string before returning the resulting string

The number of characters to cut is 0 by default, and the number of repetitions is 1 by default. The function signature with these values is already defined in the template, you only need to finish the body.

The function must return the resulting string.

```php
<?php

$text = 'python';

trimAndRepeat($text, offset: 3, repetitions: 2); // honhon
trimAndRepeat($text, repetitions: 3); // pythonpythonpython
trimAndRepeat($text); // python
```

## Hints

* The `substr()` function will help cut the string from the left, and `str_repeat()` will help repeat it
* From the checking system's point of view, it does not matter which way the `trimAndRepeat()` function is implemented internally. The main thing is that it performs the given task
