Strings are used very often in programming and in a wide variety of situations. We use them to work with text, display messages on the screen, process user input, and interact with external systems.

From PHP's perspective, a string is simply a set of characters enclosed in quotes. Let's look at some examples:

```php
<?php

'Hello'
'Goodbye'
'G'
' '
''
```

All of these options are strings.

- `'Hello'`, `'Goodbye'`, and `'G'` are strings made up of several characters or a single character
- `' '` is a string consisting of a single space
- `''` is an empty string, it contains no characters at all. It plays the same role as 0 in mathematics

In other words, anything inside quotes is considered a string, even if it's just a space or nothing at all.

If you display strings on the screen, `'Hello'` and `'Goodbye'` will be clearly visible. But `' '` and `''` can be confusing, because printing an empty string looks like a complete absence of output, while a string with a space shows "empty space" that is visually hard to tell apart. PHP, however, clearly distinguishes between them. An empty string means the absence of characters, whereas a string with a space contains a specific space character.

A check question. Are these the same strings or not?

```php
<?php

'хекслет'
' хекслет'
```

## Terminology. String or line?

There is a terminological trap in programming.

- A string (string) is a data type (the one we discussed above), for example `'hello'`.
- A line (line) is a line of text in a file or in code.

For example, the code below contains a line, but not a string.

```php
<?php

print_r(5);
```

To avoid confusion, in this course we will use the following wording.

- String, when we talk about the data type.
- Line, when we talk about lines of code.

## Single and double quotes

In PHP, strings can be written in both single and double quotes:

```php
<?php

print_r('Hello');
print_r("Hello");
```

By default, it is customary to use single quotes `'`, unless you need the capabilities of double quotes inside the string. Many PHP code style standards follow this convention.

## The problem with quotes inside a string

Imagine you want to print the string *Dragon's mother*. It contains an apostrophe (*'s*), which matches the single quote character. Let's try this:

```php
<?php

print_r('Dragon's mother');
// PHP Parse error: syntax error, unexpected 's' (T_STRING), expecting ',' or ')'
```

PHP will decide that the string ends after the word 'Dragon', and it won't recognize the rest as valid code, which causes a syntax error. To avoid this, we'll wrap the string in double quotes:

```php
<?php

print_r("Dragon's mother");
```

Now PHP understands that the single quote inside the string is an ordinary character, and the string itself begins and ends with double quotes.

If you need double quotes inside the string and single quotes outside, there won't be any problems either:

```php
<?php

print_r('He said "No"');
```

Sometimes a string contains both types of quotes:

```text
Dragon's mother said "No"
```

In this case, to keep PHP from confusing the quotes inside the string with the outer ones, the escape character, the backslash `\`, is used. It tells the interpreter that the character following it is part of the string, not a control character:

```php
<?php

print_r("Dragon's mother said \"No\"");
// => Dragon's mother said "No"
```

Here we escape the double quotes inside the string that is enclosed in double quotes.

Note that PHP treats `\"` as a single quote character, not two characters. The same applies to `\'`, `\\`, and other similar sequences. They look like two characters in the code, but in the string they count as one.

The same works the other way around:

```php
<?php

print_r('Dragon\'s mother said "No"');
// => Dragon's mother said "No"
```

## How to print a backslash

To print the backslash itself, it also needs to be escaped:

```php
<?php

print_r("\\");
// => \
```
