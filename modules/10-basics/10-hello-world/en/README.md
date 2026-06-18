Learning a new programming language traditionally begins with the 'Hello, World!' program. This is a simple program that prints a greeting on the screen and introduces the syntax and structure of the new language.

```text
Hello, World!
```

![Hello World](./assets/hello-world.png)

This tradition is already more than forty years old, and we will start with it too. In the first lesson, we will write the `Hello, World!` program. In PHP, this program looks like this:

```php
<?php

print_r('Hello, World!');
```

The `<?php` line at the beginning is a special tag that tells us that PHP code follows. We will talk about it in more detail in the next lesson.

The `print_r()` command prints the text specified in the parentheses on the screen. A semicolon `;` is placed at the end — this is how every command ends in PHP. Instead of the example, you can write any other text.

```php
<?php

print_r('Хекслет - школа программирования');
```

The command stays the same, only the content of the parentheses changes. So that the program understands that this is text, it is enclosed in quotes. You can use single `'...'` or double `"..."` quotes, but the opening and closing quotes must match.

```php
<?php

print_r("Хекслет - школа программирования");
```

In PHP, it is customary to use single quotes for strings. If there is an apostrophe inside the string, single quotes will break the syntax, so in such cases double quotes are used.

```php
<?php

print_r("it's PHP"); // apostrophe inside, so double quotes
```

## Ways to print on the screen

Besides `print_r()`, PHP has one more print command — `echo`:

```php
<?php

echo 'Hello, World!';
// => Hello, World!
```

For convenience, we will show the result of running lines of code like this: `// => RESULT`.

In simple situations, there is no difference between `echo` and `print_r()` — you can use either command. But where you need to print on the screen not just numbers or strings, but, for example, arrays, `echo` will not be able to do this, while `print_r()` will print everything.

## The meaning of characters

Code consists of commands, and each of them must be written in a certain form. Besides letters, quotes `'` and `"`, parentheses `()`, and punctuation marks are important in code. A missing or mixed-up character will cause the program to not run. Try to determine what error is made in each of the lines?

```php
<?php

print_r("it's PHP"
print_r(it's PHP")
prin_r("it's PHP")
print_r('it's PHP")
print_r["it's PHP"];
```

Even a small difference, for example one extra letter or another character, can cause the program to not work. This also applies to case, that is, the difference between uppercase and lowercase letters. While in ordinary text `Hello` and `hello` look the same, for a program these are different texts. PHP function names forgive different case, but variable names and many other constructs that we will encounter later do not. Therefore, the most reliable approach is to type the code exactly as in the examples.

## Where to practice

Theory is absorbed better when you run code in parallel and see the result. An online PHP interpreter, where code runs right in the browser, is suitable for this. Everything that appears in the lesson is worth trying [in the online PHP interpreter](https://3v4l.org/).

How does this work technically? Any written code is passed to the PHP interpreter, which executes this code and prints the result of its work on the screen.

```text
Code              Interpreter          Screen
┌────────────┐     ┌─────────────┐     ┌──────────────┐
│ print_r(…) │ ──→ │     PHP     │ ──→ │ Hello, World!│
└────────────┘     └─────────────┘     └──────────────┘
```
