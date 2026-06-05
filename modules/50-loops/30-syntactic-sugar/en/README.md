
A construction like `$index = $index + 1` is used quite often in PHP, so the creators of the language added a shortened version of the notation: `$index += 1`. This shortcut is usually referred to as **syntactic sugar**, because it simplifies and "sweetens" the process of coding :)

It is important to understand that the differences are solely in the way they're written The interpreter transforms the abbreviated construction into an expanded one.

There are shortcuts for all arithmetic operations and for string concatenation:

- `$a = $a + 1` → `$a += 1`
- `$a = $a - 1` → `$a -= 1`
- `$a = $a * 2` → `$a *= 2`
- `$a = $a / 1` → `$a /= 1`
- `$a = $a . 'bla'` → `$a .= 'bla'`
