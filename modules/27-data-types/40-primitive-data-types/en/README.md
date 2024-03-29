
There are different ways to represent data in programs.

There are **strings** — sets of characters in quote marks, like `"Hello, World!"`. There are **integers** — for example, `7`, `-198`, `0`. These are two different categories of information — two different **types of data**.

The multiplication operation makes sense for integers, but it makes no sense for strings; why would you want to multiply the word "mom" by the word "notepad"?

**The data type defines what can be done with the elements from a particular set of elements**

PHP recognizes types. Therefore, it won't allow us to multiply a string by a string ("text by text"). But it will allow you to multiply an integer by another integer. The existence of types and these restrictions in the language protects programs from accidental errors.

Unlike strings, numbers don't need to be wrapped in quotes. To print the number 5, all you have to do is write:

```php
<?php

print_r(5);
```

Note that the number `5` and the string `'5'` are completely different things, although `print_r`s output for this data is identical.

Integers (`1`, `34`, `-19` etc.) and rational numbers (`1.3`, `1.0`, `-14.324` etc.) are two separate **data types**. This division is due to the peculiarities of how computers are set up. **There are other types**, which we'll get to know later.

Here's another example, but with a rational number:

```php
<?php

print_r(10.234);
```

The data types "string", "integer" and "rational number" are primitive types and are built into the PHP language itself. Some composite data types are also built into the language, but for now we'll only work with the primitive ones. Programmers can also create their own data types.

For example, in the code above, there are three lines and no strings.
