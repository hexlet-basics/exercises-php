The program receives the numeric codes of characters and displays them on the screen — this is handy when a character is hard to type on the keyboard. Find the characters with codes 126, 94, and 37 in the [ASCII table](https://www.ascii-code.com) (we're interested in the decimal code — *dec* or *decimal*) and print each one on a separate line using the `chr()` function and a line break:

```php
print_r(chr(...) . "\n");
print_r(chr(...) . "\n");
print_r(chr(...) . "\n");
```

For example, the character `?` has code 63:

```php
print_r(chr(63)); // output: ?
```
