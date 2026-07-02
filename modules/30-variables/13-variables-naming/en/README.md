Imagine that we have the following program:

```php
<?php

$x = 'Father!';
print_r($x);
```

From a technical point of view, everything works. We have already seen similar examples, but here a variable named `$x` is used. Bad names make it harder to read and understand the code. Here are a few examples of poorly chosen variables:

```php
<?php

$a = "John";
$n = 42;
$ddr = "New York";
```

What are these variables? What is stored in them? To figure this out, you have to read all the rest of the code and guess from context.

The computer doesn't care what a variable is called. To it, `$x`, `$abc`, `$message`, or `$elephantInTheRoom` are just labels for storing data. People care about something else. Programmers read code far more often than they write it. That is why variable names are an important part of communication through code.

## Good examples

```php
<?php

$userName = "Arya Stark";
$unpaidOrdersCount = 3;
$maxAttempts = 5;
```

A good variable name helps you understand what the program does without reading into every single line.
It's especially important to give names whose meaning is clear without context, without the need to read all the code around them.

Here are a few tips:

- Use English. It is the international standard. It's better to write `$ordersCount` instead of `$kolvoZakazov`. If English is still hard for you, use a translator, that's fine. Over time it will get easier.
- Try to make the name reflect the meaning of the variable. Let it be a bit longer, but understandable.
- Don't be afraid to spend time choosing a good name. It is an investment in the readability and maintainability of the code.

There is even a joke among programmers: "Some of the hardest tasks in programming are caching and naming variables." Sometimes coming up with a suitable name really is difficult. Here is an example: what would you call a variable that stores the number of unpaid orders from customers with debt for the previous quarter?

And now a little exercise: Come up with a name for a variable that will store the "number of the king's brothers and sisters". Write it down in a notebook or email it to yourself. Just the name, without explanations. We will come back to this task in a few lessons.
