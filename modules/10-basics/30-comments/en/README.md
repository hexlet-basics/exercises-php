
Almost every programming language allows you to add comments to your code. This is text that isn't part of the program and is needed for programmers to make notes. They help explain how the code works, what errors need to be corrected, or what not to forget to add later.

Comments in PHP come in two flavors:

## Single line comments

_Single line comments_ start with `//` or `#`. Any text can go after these characters, the whole line will be left alone when the program is run.

A comment can take up a whole line. Or you can create several comments if one line isn't enough:

```php
<?php

// For Winterfell!
// For Lanisters!
```

Or it can go after code on the same line:

```php
<?php

print_r('I am the King'); // For Lannisters!
```

## Multi-line comments

_Multiline comments_ start with `/*` and end with `*/`. Each line between them must begin with a `*`.

```php
<?php

/*
 * The night is dark and
 * full of terrors.
 */
print_r('I am the King');
```
