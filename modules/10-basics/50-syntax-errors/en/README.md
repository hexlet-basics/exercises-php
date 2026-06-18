If a PHP program is written in violation of the rules, the interpreter will stop execution and print an error message. This message indicates:

- the type of error,
- the file and line where it occurred,
- and (often) a hint about what the interpreter expected.

## What is a syntax error?

A syntax error (Parse error) is a violation of the rules for writing code (grammatical rules) in a particular programming language. Such errors arise when the code is written with a deviation from the expected format: a forgotten semicolon `;`, an unclosed string, a missing bracket, and so on.

Unlike natural languages, where text with errors can be understood from context, in programming even the slightest deviation makes the code unworkable.

```text
Code with error        Interpreter          Result
┌────────────────┐     ┌─────────────┐     ┌─────────────────┐
│ print_r('Hi')  │ ──→ │     PHP     │ ──→ │ Parse error:    │
└────────────────┘     └─────────────┘     │ unexpected EOF  │
                                           └─────────────────┘
```

Let's look at a simple example with a syntax error:

```php
<?php

// The correct version is: print_r('Hodor');
print_r('Hodor')
```

In this code, the semicolon `;` is forgotten at the end of the statement, which makes the program incorrect from the syntax point of view. Let's try to run the program, and the interpreter will produce an error:

```bash
php index.php
PHP Parse error:  syntax error, unexpected end of file, expecting "," or ";" in /tmp/index.php on line 4
```

The text may be unclear at first, but that's normal — the more often you encounter such errors, the faster you will learn to understand what happened. Note: at the end of the message there is a path to the file and the number of the line where, in the interpreter's opinion, the error occurred.

## Why are such errors considered simple?

Syntax errors:

- are easy to spot: the code is often highlighted in the editor;
- are easy to fix: it's enough to return the missing character or correct the structure.

But there is a fly in the ointment. The interpreter does not always point to exactly the place where the error was made. Sometimes the problem is located several lines higher. For example, an opened but unclosed bracket on one line can "break" all the following code.

## What to do with a syntax error?

- Read the error message. It almost always contains useful information.
- Check the line indicated in the message, and the line before it: sometimes the error is "hidden" a bit earlier.
- Use [an editor with syntax highlighting](https://code.visualstudio.com/): it will help you immediately spot problems (for example, unclosed quotes or brackets).
