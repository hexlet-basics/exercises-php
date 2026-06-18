
Implement a function, `normalizeUrl()`, that normalizes data. It takes a site address and returns it with `https://` at the beginning.

The function accepts addresses in the form `ADDRESS` or `http://ADDRESS`, but always returns the address in the form `https://ADDRESS`. The function can also receive an address that is already in the normalized form `https://ADDRESS`, in which case nothing needs to be changed.

Call examples:

```php
<?php

normalizeUrl('https://ya.ru'); // 'https://ya.ru'
normalizeUrl('google.com');    // 'https://google.com'
normalizeUrl('http://ai.fi');  // 'https://ai.fi'
```

There are several ways to solve the task. One of them is to use the `str_starts_with()` function to check whether the argument string begins with the string `http://`, and then, based on that, add or not add `https://` to it.

You will also most likely need to drop the unnecessary part at the beginning of the string. Remember, we covered a way to get a piece of a string using the `substr()` function? If not, here is a reminder:

```php
<?php

// Take 2 characters from the beginning
print_r(substr('python', 0, 2)); // => py
```

So, using `substr()` you can also drop a certain number of characters:

```php
<?php

// Drop the first 2 characters
print_r(substr('python', 2)); // => thon
```
