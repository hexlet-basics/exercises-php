Besides the code itself, source files often contain comments. These are lines that the interpreter does not process. Programmers write them to explain how the code works, mark bugs, or remind themselves of what still needs to be done.

```php
<?php

// Remove the line below after implementing the registration task
print_r(10);
```

Single-line comments in PHP start with the `//` or `#` characters, which can be followed by any text. Everything written after them until the end of the line is ignored by the interpreter.

```text
// comment           ──→  [ skipped by interpreter ]
print_r('hello');    ──→  [ executed → hello ]
// another one       ──→  [ skipped by interpreter ]
```

A comment can take up an entire line:

```php
<?php

// For Winterfell!
// For Lanisters!
```

Or it can be placed at the end of a line with code:

```php
<?php

print_r('I am the King'); // For Lannisters!
```

If you need to leave a long explanation, several lines with `//` are used:

```php
<?php

// The night is dark and
// full of terrors.
print_r('I am the King');
```

For such cases, PHP also has a special kind — multiline comments. They start with `/*` and end with `*/`, and each line between them is conventionally started with the `*` character:

```php
<?php

/*
 * The night is dark and
 * full of terrors.
 */
print_r('I am the King');
```

The interpreter ignores comments. Thanks to them, developers can understand someone else's code faster and not forget important details in their own.

## Service Comments

While working, you will come across this kind of code in our editor:

```php
// BEGIN

// END
```

*BEGIN* and *END* here are ordinary comments that do not affect the program's behavior in any way. They show where to write the task's code.

```php
// BEGIN
<your solution here>
// END
```

When you see *BEGIN* and *END*, write your code between them and leave the rest unchanged.
