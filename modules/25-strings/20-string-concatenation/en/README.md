Often, strings need to be assembled from several parts, for example, to join a first name and a last name, add a unit of measurement, or build text from a template. The concatenation operation, that is, gluing strings together, is used for this.

## How to join strings

In PHP, strings are joined using the `.` (dot) operator. The `+` operator is used to add numbers, while for joining strings PHP has a separate binary operator that means gluing the contents together:

```php
<?php

print_r('Dragon' . 'stone');
// => Dragonstone
```

Order matters. First comes the left part (`'Dragon'`), then the right part (`'stone'`). The result comes out in the order in which the operands are specified.

Here's how joining several strings works. The code:

```php
<?php

print_r('Hello' . ', ' . 'World!');
```

Execution:

```text
'Hello' . ', ' . 'World!'
└──┬──┘   └┬┘   └──┬───┘
   └────┬───┘       │
  'Hello, '    .  'World!'
     └──────┬───────┘
      'Hello, World!'
```

Examples:

```php
<?php

print_r('Kings' . 'wood');     // => Kingswood
print_r('Kings' . 'road');     // => Kingsroad
// Here the outer quotes are double, because there is a single one inside
print_r("King's" . 'Landing'); // => King'sLanding
```

PHP lets you join strings even if they're written in different quotes. The main thing is that both parts are strings.

## A space is also a character

When joining, PHP doesn't insert spaces automatically. If there should be a space between the parts, it needs to be specified manually:

```php
<?php

// A space at the end of the first string
print_r("King's " . 'Landing'); // => King's Landing

// A space at the start of the second string
print_r("King's" . ' Landing'); // => King's Landing
```

The result will be the same. But if you don't add a space, the words will be glued together.

## Escape sequences

In strings, you can use escape sequences, for example `\n` for a line break or `\t` for a tab. Don't forget that in PHP they only work inside double quotes. During concatenation, they behave just like any other characters:

```php
<?php

print_r('Hello,' . "\n" . 'World!');
// =>
// Hello,
// World!

print_r('A' . "\t" . 'B');
// => A	B
```

## Conclusion

Concatenation is the joining of strings via the `.` operator, and strings can be joined regardless of the type of quotes.

- Gluing happens strictly in left-to-right order
- Spaces aren't added automatically, you need to include them in the strings manually
