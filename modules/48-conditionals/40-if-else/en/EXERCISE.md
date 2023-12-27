
Write a function, `normalizeUrl()`, that normalizes data passed to it. It takes a site address and returns it with `https://` at the beginning.

The function accepts addresses as `ADDRESS` or `http://ADDRESS`, but always returns the address as `https://ADDRESS`

There are two possible solutions:

1. You can compare the first 7 characters of the argument string with the string `http://`.
2. You can use the [strpos](https://www.php.net/manual/en/function.strpos.php), function to check if the string-argument contains the substring `http://`.

And then it'll either add or not add `https://` accordingly.

Call examples:

```php
<?php

normalizeUrl('google.com');   // 'https://google.com'
normalizeUrl('http://ai.fi'); // 'https://ai.fi'
```
