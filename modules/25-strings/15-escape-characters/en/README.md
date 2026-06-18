Suppose we want to print the text below on two lines:

```text
- Are you hungry?
- Aaaarrrgh!
```

If we simply pass this text to `print_r()`, PHP will print everything on a single line. Technically, we could write two consecutive `print_r()` calls, but let's imagine we want to do it with a single one:

```php
<?php

print_r("- Are you hungry?- Aaaarrrgh!");
// => - Are you hungry?- Aaaarrrgh!
```

For each of them to start on a new line, we need to add a line break, that is, "press Enter". In programming, this is done by adding special characters, in this case `\n`. Yes, that's not a typo. Even though we see two characters here, from PHP's perspective this is a single character:

```php
<?php

print_r("- Are you hungry?\n- Aaaarrrgh!");
```

The result will be:

```text
- Are you hungry?
- Aaaarrrgh!
```

## What is `\n`?

`\n` is an escape sequence (sometimes called an "escaped sequence"). It denotes a line break, but isn't displayed directly. You won't see `\n` in the program's output, since it only affects the placement of the text.

In text editors, pressing Enter adds the invisible LF (Line Feed) character. That's exactly what `\n` means. Sometimes you can see such characters if you enable the display of special characters:

```text
- Привет!¶
- О, привет!¶
- Как дела?
```

Printers, editors, and the PHP interpreter understand `\n` as a command to start the text on a new line.

An important feature of PHP: escape sequences like `\n` only work inside double quotes. In single quotes, `\n` is just two ordinary characters, `\` and `n`:

```php
<?php

print_r("Hello\nWorld");
// Hello
// World

print_r('Hello\nWorld');
// => Hello\nWorld
```

## Examples of using `\n`

Here's how PHP handles the escape sequence `\n`:

```text
In code      "Hello\nWorld"
                   ↓
On screen    Hello
             World
```

The position of `\n` changes the resulting output:

```php
<?php

print_r("Hello\nWorld");
// Hello
// World

print_r("Hello \nWorld");
// Hello
// World  (there is a space at the end of the first line)

print_r("Hello\n World");
// Hello
//  World  (there is a space at the start of the second line)

print_r("Hello\n\nWorld");
// Hello
//
// World  (an empty line between them)
```

Spaces before or after `\n` are also taken into account. PHP treats them as ordinary characters and displays them in the output.

You can also insert `\n` into any part of a string — before, after, or even use it on its own:

```php
<?php

print_r("First line\n");
print_r("\n"); // Just an empty line
print_r("Second line");
```

The result will be:

```text
First line

Second line
```

## How to print the `\n` character itself

`\n` in PHP is an escape sequence. It controls the placement of text and isn't displayed on the screen as ordinary characters. If you need to print exactly the characters `\` and `n`, rather than a line break, they need to be escaped. To do this, you add another slash before the backslash:

```php
<?php

print_r("Hello\\nWorld");
// => Hello\nWorld

// If you forget to add the second slash
print_r("Hello\nWorld");
// Hello
// World
```

In this case, PHP understands `\\` as an ordinary backslash and shows the string without a line break.

## Other escape sequences

Besides `\n`, PHP has other escape sequences:

- `\t` denotes a tab (the equivalent of the Tab key)
- `\r` denotes a carriage return (used in Windows, but rarely applied in PHP code)
- In programming, `\n` is the most commonly used one, it's enough for most tasks

## Important details

- `\n` is a single character, even though it's written in code as two (`\` and `n`)
- Escape sequences in PHP only work inside double quotes
- On Windows, the combination `\r\n` is used by default, but in cross-platform development it's customary to use only `\n` to avoid problems when moving code between systems. That's why it's worth configuring your editor to use `\n`
