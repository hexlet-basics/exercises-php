Programming exists to perform all kinds of operations. Sometimes these are simple actions, like adding numbers or joining strings. But more often they are complex processes, like transferring money between accounts, placing an order in an online store, calculating taxes, or preparing a report.

Such operations cannot be expressed with a single command. Behind an action like "transfer money" there can be dozens, hundreds, or even thousands of lines of code. This includes checking the balance, withdrawing the amount, accounting for the commission, updating the database, and sending a notification to the user.

To manage this code and not get lost in the details, programmers use functions. A function combines a block of code into a single whole, hides its implementation, and lets you focus on the meaning. For a programmer, it is enough to call the function and trust it to do all the internal work.

![Function](./assets/function.png)

Let's imagine a function that transfers money from one account to another. In reality, there might be hundreds of lines of code inside it, but we don't see this. From the outside, everything looks like a single simple command:

```php
<?php

transferMoney('Alice', 'Bob', 100);
```

This line calls the `transferMoney()` function. It receives the sender `Alice`, the recipient `Bob`, and the amount `100`.

Here are a few more examples of function calls that we could implement. Each function has its own name and its own set of data to work with.

```php
<?php

// Yes, print_r is a function too
print_r('Hexlet!');

// Sending an email to a user
sendEmail('bob@example.com', 'Welcome!');

// Calculating tax on a given amount
calculateTax(5000, 'Florida');

// Checking whether a user is in the system
isRegistered('Alice');

// Getting a random number from 1 to 10
randomNumber(1, 10);

// Creating a database backup
backupDatabase();

// Calculating the length of a string
strlen('Hexlet'); // Result: 6
```

In a function call, you first write its **name**, then the **parentheses**. The parentheses show that this is indeed a call. This is how we understand that we are dealing with a function and not a variable.

Inside the parentheses you specify **arguments**, that is, the data the function receives to work with. There can be several of them, one, or none at all.

## Where do functions come from?

Some functions are built into the language (built-in), others are created by programmers themselves.

**Built-in functions** are functions that ship with the PHP language. You can use them right away, without any extra steps. An example would be the `print_r()` function. As they say, it is available globally.

**Functions defined by programmers** are created when you need to wrap your own logic into a separate block. You can give such a function any name and use it in your code just like the built-in ones. We will learn how to do this later.

In addition, there are functions that live in separate libraries. To use them, the library has to be installed and connected to the program. We won't go into this mechanism in detail yet. For now, it is enough to know that it lets you connect an external set of functions and make them available in the program.

## A function with one parameter

One of the most frequently used built-in functions is `strlen()`. It returns the number of characters in a string.

```php
<?php

$message = 'Hello!';
$count = strlen($message);
print_r($count); // => 6
```

Here the string `'Hello!'` has six characters, so the call `strlen($message)` will return the number `6`.

```text
Arguments          Function        Result
┌──────────┐     ┌──────────┐     ┌──────────┐
│ 'Hello!' │ ──→ │ strlen() │ ──→ │    6     │
└──────────┘     └──────────┘     └──────────┘
```

## Returning a value

Returning a value is one of the key principles of how functions work. Thanks to it, we can combine the results of different actions and build more complex logic. If a function returns a value, we can save it in a variable, pass it to another function, or use it in calculations. This is exactly how `strlen()` works. It counts the number of characters and hands the result back out.

```php
<?php

$message1 = 'Hello!';
$length1 = strlen($message1); // save the result

$message2 = 'World!';
$length2 = strlen($message2);

$combinedLength = $length1 + $length2; // use the result in an expression
print_r($combinedLength); // => 12
```

If `strlen()` printed the result to the screen right away (the way `print_r()` does), we would see the number but wouldn't be able to use it:

```php
<?php

// an imaginary function that only prints the result
fakeStrlen('Hello!'); // prints 6

// but after that the number is no longer accessible
// we can't add it, save it, or compare it
$result = fakeStrlen('Hello!'); // here $result holds nothing
```

This is why returning a value is such an important concept. It lets us link functions together. Some return data, others use it in their work. This is exactly how big and complex programs are built out of small steps.

## A function with several parameters

Some functions accept several pieces of data to work with at once. A good example is the built-in `pow()` function, which raises a number to the required power. The first parameter takes the base of the power, the second sets the exponent.

```php
<?php

// raise 2 to the 3rd power: 2 * 2 * 2
$result = pow(2, 3);
print_r($result); // => 8

// 5 to the 2nd power: 5 * 5
print_r(pow(5, 2)); // => 25
```

In terms of structure, a call with several parameters is no different from a call with one. The same function name, parentheses, and arguments separated by commas inside.

## Parameters and arguments

In discussions about functions, the words **parameters** and **arguments** come up again and again. They are related, but they are not the same thing.

We talk about **parameters** when creating a function. A parameter is a variable inside the function into which the passed value lands. We talk about **arguments** when calling. An argument is what we pass into the function. It can be a number, a variable, or any expression.

```php
<?php

// numbers as arguments
print_r(pow(2, 3)); // => 8

$x = 2;
// an argument can be an expression, it gets evaluated before being passed to the function
print_r(pow($x + 1, 3)); // => 27
```

You don't have to memorize this, but it will come in handy when reading English-language literature.
