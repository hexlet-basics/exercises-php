
In PHP you can "request" and display any ASCII character. For instance:

```php
<?php

print_r(chr(63));
```

Character 63 will be printed - a question mark `?`. You can print any character this way.

Use [the ASCII code table](https://www.ascii-code.com). In this table, we're interested in the decimal code (*dec* or *decimal*), which is used to encode characters.

Using the example above and the table you found, display `~^%`.

(Of course, you could "cheat" the tests and just write `print_r('~^%')`, but that would be no fun at all :)
