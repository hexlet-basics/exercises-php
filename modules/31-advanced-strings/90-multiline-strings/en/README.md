Sometimes text in a program needs to consist of several lines. For example, when generating a letter, creating a template, formatting an error message, or just working with long texts.

Of course, you can use the line break character `\n`, as we did before:

```php
<?php

$text = "Example of text,\nconsisting of\nseveral lines";
```

When printed, the string will look like this:

```text
Example of text,
consisting of
several lines
```

But this approach becomes inconvenient, especially if the string is long or you need to add new line breaks often. Each `\n` has to be inserted manually, and this worsens the readability of the code.

## Heredoc as an alternative

PHP has a more convenient way to write text across several lines: the heredoc syntax. After the `<<<` operator, an identifier with an arbitrary name is specified, then a line break and the text itself. At the end, on a separate line, the same identifier is added, which closes the string:

```php
<?php

$text = <<<EOT
Example of text,
consisting of
several lines
EOT;
```

Now in the code everything looks the same as in the output:

```text
Example of text,
consisting of
several lines
```

## The closing identifier

The closing identifier, in our case `EOT`, must be on a separate line. Starting from PHP 7.3 it can be shifted to the right with spaces — then the same indentation is removed from each line of the text.

The line break before the closing identifier isn't included in the result. That's why the string above ends with the word `lines` without an empty line at the end — unlike some other languages, where moving the closing quotes to a new line adds an extra line break.

## Advantages of heredoc

- Code readability: the text in the code looks almost like it does on the screen.
- Convenience when editing: it's easy to add, remove, and change lines.
- No need to escape quotes:

```php
<?php

$quote = <<<EOT
Here you don't need to escape either 'single' or "double" quotes
EOT;
```

## Interpolation inside heredoc

Heredoc works like a double-quoted string: inside it you can substitute variable values using interpolation:

```php
<?php

$a = 'А';
$b = 'B';

$text = <<<EOT
{$a} и {$b}
сидели на трубе
EOT;
```

Output:

```text
А и B
сидели на трубе
```

This is especially convenient for templates, letters, error messages, and multiline descriptions.

## Nowdoc

Heredoc has a "brother" — nowdoc. The difference is that the identifier after `<<<` is enclosed in single quotes. Nowdoc behaves like a single-quoted string: interpolation and special characters inside don't work, the text is output as is:

```php
<?php

$name = 'Joffrey';

$text = <<<'EOT'
Hello, {$name}!
EOT;

print_r($text); // => Hello, {$name}!
```

## A computer and a human perceive code differently

PHP can process both strings with `\n` and heredoc. For the interpreter, it's the same thing. But for a human reading the code, heredoc is much more convenient and clear.
