
You've come across this code, which prints the total number of rooms owned by the present king:

```php
<?php

$king = 'King Balon the 6th';
print_r($king . ' has ' . (6 * 17) . ' rooms.');
```

As you can see, there are some magic numbers here: it's unclear what 6 is and what 17 is. If you know the history of the royal family, you can guess: each new king inherits all his ancestors' castles and builds a new one, an exact copy of his parents'.

This strange dynasty simply breeds identical castles…

Get rid of the magic numbers by creating new variables and then displaying the text on the screen.

You'll get this:

<pre class='hexlet-basics-output'>
King Balon the 6th has 102 rooms.
</pre>

Variable names should convey the meaning of numbers, but should remain short and succinct enough to be easily read.

Note: The code will work with any name, and we only check the printed result, so the task is up to you.
