Finish the `trimAndRepeat()` function. It takes a string, an `offset` — the number of characters to cut off from the left (0 by default), and `repetitions` — how many times to repeat the string (1 by default). The signature is already defined in the template. The function returns the resulting string:

```php
<?php

$text = 'python';

trimAndRepeat($text, offset: 3, repetitions: 2); // honhon
trimAndRepeat($text, repetitions: 3); // pythonpythonpython
trimAndRepeat($text); // python
```

## Hint

* Use `substr()` to cut the string and `str_repeat()` to repeat it
