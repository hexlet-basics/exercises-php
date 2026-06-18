Let's recall how concatenation works. To do it, we join the strings we need (or variables with strings inside them) using a dot `.`.

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r($greeting . ", " . $firstName . "!");
// => Hello, Joffrey!
```

But with complex expressions, it becomes hard to immediately see what text will come out. Especially if the string uses spaces, commas, or quotes: they start to get in the way of perception. Even the current example takes a little effort to figure out what string you'll get.

For this reason, many languages have an operation called interpolation. Interpolation is a way to embed variable values directly inside a string. In PHP, it works in double-quoted strings. It looks like this:

```php
<?php

$firstName = 'Joffrey';
$greeting = 'Hello';

print_r("{$greeting}, {$firstName}!");
// => Hello, Joffrey!
```

Variable names are written inside the string in curly brackets, and PHP automatically substitutes the right values:

```text
$firstName = 'Joff'
$greeting  = 'Hello'

"{$greeting}, {$firstName}!"
  └────┬────┘  └────┬─────┘
   'Hello'      'Joff'
      └──────┬──────┘
      'Hello, Joff!'
```

Compare these two examples side by side:

```php
<?php

print_r($greeting . ", " . $firstName . "!");
print_r("{$greeting}, {$firstName}!");
```

The second option is simpler and clearer.

You can have as many blocks with curly brackets as you want in one string. It's important to remember: interpolation only works with double quotes. A single-quoted string is printed as is, without substituting values:

```php
<?php

$firstName = 'Joffrey';

print_r('Hello, {$firstName}!');
// => Hello, {$firstName}!
```

## Example

```php
<?php

$school = 'Hexlet';

$whatIsIt = "{$school} - online courses";
print_r($whatIsIt); // => Hexlet - online courses
```

This notation is easy to read: spaces, dashes, and symbols are immediately visible. The string looks exactly as it will appear in the output. This makes the code clear and easy to maintain. For this reason, in most languages interpolation is preferred over concatenation.

## Why it matters

Interpolation is preferable to concatenation in almost all modern programming languages. It:

- Simplifies the structure of strings.
- Improves code readability.
- Reduces the number of errors when working with spaces and punctuation marks.
