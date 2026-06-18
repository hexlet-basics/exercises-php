When working with strings, you often need to determine whether one string — a **substring** — is contained in another, and if it is, where. For this, PHP has the [mb_strpos()](https://php.net/manual/en/function.mb-strpos.php) function. It searches for the position of the first occurrence of one string in another:

```php
<?php

print_r(mb_strpos('Валар Моргулис', 'Моргулис')); // => 6
```

The function returned `6` — the index of the letter `М`, where the substring begins. Indexes, as usual, are counted from zero:

```php
<?php

print_r(mb_strpos('Валар Моргулис', 'Валар')); // => 0
```

Here it returned `0`: the substring was found at the very beginning of the string.

If the substring isn't found, `mb_strpos()` returns the special value `false` ("false"). When printed with `print_r()`, it looks like an empty string:

```php
<?php

print_r(mb_strpos('Валар Моргулис', 'Дракарис')); // =>
```

There's a hidden trap here that beginners often fall into: the result `0` ("found at the beginning of the string") is easy to confuse with `false` ("not found at all"). To tell them apart, you need a strict comparison — we'll cover it in the lessons about logic. For now, just remember: `mb_strpos()` answers the question "where?", not "is there?".
