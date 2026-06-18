The warehouse received a delivery. You've come across this code, which counts the total number of boxes:

```php
<?php

$label = 'Ящиков на складе:';
print_r($label);
print_r("\n");
print_r(6 * 17);
```

The numbers 6 and 17 here are magic: it's unclear what they mean. Get rid of them by creating variables with meaningful names, and print the result to the screen.

You'll get this:

```text
Ящиков на складе:
102
```

Variable names should convey the meaning of the numbers, but remain short and concise.

Remember: the code will work with any names, and the system only checks the result on the screen — completing the task is your responsibility.
