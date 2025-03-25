
In the lesson on concatenation, we had the task of creating a letter header out of two variables and punctuation marks. You most likely did it this way:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r($greeting . ", " . $firstName . "!");
```

It's a pretty simple case, but, and you'll probably agree, it looks a little unseemly. You have to watch out for several quotation marks and spaces, and you can't tell where something starts and ends without paying attention.

There is a more convenient and elegant way to solve the same problem: interpolation. This is what it looks like:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r("{$greeting}, {$firstName}!"); // => Hello, Joffrey!
```

https://replit.com/@hexlet/php-basics-interpolation

We just created one line and inserted variables into it in the right places using curly brackets (`{}`). It's like we have a blank form where we can enter the desired values. And we no longer have to worry about separate strings for punctuation marks and spaces, all of these characters already exist in our template string.

You can make as many bracketed blocks as you want on one line.

**Interpolation only works with double-quoted strings.**

Nearly all languages favor interpolation over concatenation for combining strings. It glues a string together, and spaces and other characters look good in it.
