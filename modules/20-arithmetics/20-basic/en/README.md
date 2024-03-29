At the most basic level, computers only use numbers. Even in high-level language applications, there are many numbers and operations with them. Fortunately, all you need to know to get started is basic arithmetic, so let's start there.

To add two numbers in math we write something like `3 + 4`. The same goes for programming. Here's a program that adds two numbers:

```php
<?php

// Don't forget the semicolon at the end, because every line in the code is an instruction.
3 + 4;
```

_Remember comments? In the code above, after `//` you can see a comment from the teacher_.

Arithmetic in programming is virtually the same as school arithmetic.

The instruction `3 + 4;` will force the interpreter to add the numbers and find the result. This program will work, but it's pointless, because «we're not really giving the interpreter a command, we're just telling it to calculate three plus four». In real life, you need to do more than just tell the interpreter about the mathematical expression on its own. For example, when creating an online store, it's not enough to ask the interpreter to calculate the cost of the goods in their shopping cart, you need to ask it to calculate the cost **AND** show the price to the customer.

We need to ask the interpreter to add `3 + 4` **AND** give it a command to do something with the result. For example, print it:

```php
<?php

// again, don't forget the semicolon at the end of the line
print_r(3 + 4);
```

After we run the program, the result will appear on the screen:

<pre class='hexlet-basics-output'>
7
</pre>

Besides addition, we can also use the following operations:

* `*` — multiplication
* `/` — division
* `-` — subtraction
* `%` — [remainder](https://en.wikipedia.org/wiki/Euclidean_division)
* `**` — exponentiation

Now let’s print the result of a division, and then the result of an exponentiation:

```php
<?php

print_r(8 / 2);  // => 4
print_r(3 ** 2); // => 9
```

Sometimes, for convenience, we'll show the result of running lines of code in the comments like this: `=> RESULT`. For example, `// => 4`.

The first statement will print `4` (since 8 / 2 is 4), and the second statement will print 9 (since 3<sup>2</sup> is 9).
