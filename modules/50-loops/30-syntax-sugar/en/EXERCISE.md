
Write a function, `filterString()`, which takes a string and a character as input and returns a new string, wherein the character passed to it is wholly removed from the word.

```php
<?php

$str = 'If I look back I am lost';
filterString($str, 'I'); // 'f  look back  am lost'
filterString($str, 'o'); // 'If I lk back I am lst'
```
