When different developers write code in different styles, the code becomes hard to read: an extra space here, different indentation there. To avoid disagreements, programmers agreed to follow a single coding style. This set of rules describes how code should look: spacing, function formatting, and variable naming.

A single style means code that is equally understandable to all team members, regardless of who wrote it. This saves time, reduces the number of errors, and simplifies collaboration.

## Coding Standards

In PHP, the most common standards are the **PSR** standards — PHP Standards Recommendations from [PHP-FIG](https://www.php-fig.org/psr/). This is a set of rules that facilitate development and solve a particular problem.

Currently there are several approved recommendations, each labeled with a number: PSR-1, PSR-2, PSR-3 and [others](https://en.wikipedia.org/wiki/PHP_Standard_Recommendation). You'll become familiar with all the recommendations as you learn and work.
In this lesson, we'll take a closer look at the following:

* PSR-1. [Basic Coding Standard](https://www.php-fig.org/psr/psr-1/) — the basic standard for writing code. This is a set of rules that define how program code should be formatted: how to write PHP tags, and what rules to use for naming classes, methods and class constants. It also touches on encoding, autoloading, namespaces, and sharing responsibility between files
* PSR-12. [Extended Coding Style](https://www.php-fig.org/psr/psr-12/) — the extended coding style standard that replaces and supplements the obsolete PSR-2. This standard requires compliance with PSR-1 rules. It also adds many new requirements: for indentation, files, strings, keywords, classes, control structures, scope and other elements

All PHP developers know and use these standards. It's useful for beginners to look into them from time to time and develop good habits from the very start. However, there's no need to memorize everything at once.

## Linters: Automatic Code Checking

There's no need to memorize all the rules manually. There are special programs that do this for you. They're called linters.

A linter is a tool that analyzes your code and reports violations of standards. It helps you:

- Get rid of extra spaces
- Maintain indentation
- Write readable and elegant expressions

In the PHP world, two tools are widely used: [PHP_CodeSniffer](https://github.com/PHPCSStandards/PHP_CodeSniffer), which checks code for compliance with standards, and [PHP CS Fixer](https://github.com/PHP-CS-Fixer/PHP-CS-Fixer), which can not only find violations but also fix them automatically. This course uses PHP CS Fixer.

Let's look at an example:

```php
<?php

print_r(1+ 3);
```

Such code looks sloppy, and the linter will rightly point out the error. Here's what the checking process looks like:

```text
Code              Linter             Result
┌────────────┐    ┌──────────────┐    ┌──────────────────────┐
│ print_r(   │ →  │ PHP CS Fixer │ →  │ binary_operator_     │
│   1+ 3)    │    │              │    │ spaces               │
└────────────┘    └──────────────┘    └──────────────────────┘
```

This means that spaces are missing before and after `+`. According to the standard, it should look like this:

```php
<?php

print_r(1 + 3);
```

## Rules and Their Meaning

Each linter message is associated with a specific rule. Suppose we have a file with the following PHP code:

```php
<?php

// On the next line, the indentation is one tab
	print_r (((8 / 2) + 5) - (-3 / 2));

?>
```

When checking the file, the linter will find the following errors:

* `Spaces must be used to indent lines; tabs are not allowed` — PSR-12 recommends indenting with four spaces, while the example above uses a tab
* `A closing tag is not permitted at the end of a PHP file` — the standard contains a requirement to omit the closing tag `?>`
* `Space before opening parenthesis of function call prohibited` — when calling a function, there should be no whitespace between the function name and the parentheses, while in the code being checked there is one space after the `print_r` name

Let's fix the code — remove the closing tag, the indentation, and the space after the function name:

```php
<?php

print_r(((8 / 2) + 5) - (-3 / 2)); // => 10.5
```

This version no longer violates the rules, and the linter will "stay silent". When you're just starting out, such little things may seem unimportant. But over time it becomes clear that it's precisely these things that form a single, readable style.

## Using a Linter in Your Own Projects

When you start writing your own projects beyond the learning platform, a linter will be an indispensable helper. It can be set up in any code editor, run in the terminal, or hooked into the project build. The linter shows errors, and PHP CS Fixer can also fix them automatically.
