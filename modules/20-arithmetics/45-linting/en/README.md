Since we've learned to write simple programs, let's talk about the very process of writing.

Code must be designed in a certain way so that it's clear and easy to maintain. Special sets of rules - standards - describe different aspects of code writing. Specifically in PHP, the most common standards are the **PSR** standards (PHP Standards Recommendations) from [PHP-FIG](https://www.php-fig.org/psr/). A recommendation is a set of rules designed to facilitate a particular aspect of development (or to solve a particular problem). Currently there are several approved recommendations, each labeled with a number: PSR-1, PSR-2, PSR-3 and [so on](https://en.wikipedia.org/wiki/PHP_Standard_Recommendation). You'll gradually become familiar with all of these recommendations as you learn and work. Now let's focus on the two main ones:

* PSR-1: [Basic Coding Standard](https://www.php-fig.org/psr/psr-1/). This is a set of rules defining how to write PHP code, including how to write PHP tags, and what rules to use for naming classes, methods and class constants. It also touches on encoding, autoloading, namespaces, and sharing responsibility between files. These are basic rules; the PSR-12 standard expands on them.
* PSR-12: [Extended Coding Style](https://www.php-fig.org/psr/psr-12/). replaces and supplements the obsolete PSR-2. The first thing to mention is that this standard requires compliance with PSR-1 rules. Secondly, it adds many new requirements, for indentations, files, strings, keywords, classes, control structures, scope and other elements.

In any programming language, there are special tools, called **linters**, which check the code for compliance with standards. One commonly used linter in PHP is the [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).

Suppose we have a file with this PHP code:

```php
<?php

// On the next line, the indentation is one tab
  print_r (((8 / 2) + 5) - (-3 / 2));

?>
```

When you check the file, the linter will find the following errors:

* `Spaces must be used to indent lines; tabs are not allowed` — PSR-12 recommends indenting four spaces, and the example above uses tabs
* `A closing tag is not permitted at the end of a PHP file` — the standard requires the closing tag `?>`
* `Space before opening parenthesis of function call prohibited` — when calling a function, there should be no whitespace between the function name and parentheses, and in the code being checked there is one space after `print_r` name

Fix the code by removing the closing tag, indentation, and space after the function name:

```php
<?php

print_r(((8 / 2) + 5) - (-3 / 2)); // => 10.5
```

This code doesn't violate the rules, and the linter will "say nothing", as it were.

Don't be frightened by the abundance of recommendations and rules. Most of the rules are simple and straightforward. You'll most likely intuitively stick to them in the code anyway. Time, experience, and a linter will help you with the rest ;)
