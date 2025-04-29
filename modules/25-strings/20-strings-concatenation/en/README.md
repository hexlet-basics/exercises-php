
In web development, programs use strings all the time. Everything we see on websites, in one way or another, is presented as text. This text is most often dynamic, it's made up of different connected pieces. The operation of joining strings in programming is called concatenation.

We already know about addition in mathematics. This sort of program:

```php
<?php

print_r(5 + 3);
```

will display `8` — the result of the binary operator `+` with operands `5` and `3`.

You can add two strings. This sort of program:

```php
<?php

print_r('Dragon' . 'stone');
```


will display `Dragonstone` — the result of the binary operator `.` with the operands 'Dragon' and 'stone'.

Strings are always concatenated in the order in which the operands are written. The left operand becomes the left part of the string, and the right one becomes the right part.

Here are a few more examples:

```php
<?php

print_r('Kings' . 'wood');     // => Kingswood

print_r('Kings' . 'road');     // => Kingsroad

print_r("King's" . 'Landing'); // => King'sLanding
```

As you can see, strings can be concatenated even if they're written in different quotes.

In the last example, the name of the city has been misspelled: *King's Landing* should be spelled with a space! But there were no spaces in our initial lines, and the spaces in the code itself to the left and right of the `.` character don't matter, because they're not part of the strings.

There are two ways to fix this:

```php
<?php

// Put space at the end of the left part
print_r("King's " . 'Landing'); // => King's Landing

// Put a space at the start of the right part
print_r("King's" . ' Landing'); // => King's Landing
```

Space is a character like any other, so however many spaces you put in the string is how many you'll get:

```php
<?php

print_r("King's " . ' Landing');   // => King's  Landing

print_r("King's  " . '  Landing'); // => King's    Landing
```
