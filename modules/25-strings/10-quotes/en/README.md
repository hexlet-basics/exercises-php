
```php
<?php

'Hello'
'Goodbye'

'G'
' '
''
```

Which of these five items are strings?

With the first two, everything is clear, they're strings, we've already worked with similar constructions and said that strings are sets of characters.

Any single character between parentheses is a string. `''`, is also a string (albeit empty). So everything inside the quotation marks can be considered a string, even if it's a space, one character, or no characters at all.

In previous lessons, we enclosed strings in single quotes. You can also use double quotes:

```php
<?php

print_r("Dracarys!");
```

Imagine you want to type the line _dragon's mother_. The apostrophe before the letter **s** and a single quote are the same symbols. Let's print it:

```php
<?php

print_r('Dragon's mother');
// PHP Parse error: syntax error, unexpected 's' (T_STRING), expecting ',' or ')'
```

This program won't work.  From PHP's perspective, the line started with a single quote and then ended after the letter **n**. Then comes some characters: `s mother` without quotes, which are not a string. And then there's one quote mark that opens a string which is never closed: `');`. This code is syntactically incorrect (you can see it by the way the code is highlighted).

It's a good idea here to use double quotes. This version of the program will work correctly:

```php
<?php

print_r("Dragon's mother");
```

Now the interpreter knows that the string started with a double quote, so it must end with a double quote. And the single quote inside has become the part of the string.

It works the other way too. If you want to use double quotes inside a string, you should enclose the string in single quotes. And the number of quote marks inside the string itself doesn't matter.

Now, what if we want to create a string like this?

<pre class='hexlet-basics-output'>
Dragon's mother said "No"
</pre>

It has both single and double quotes. What can we do in this case? We need to somehow tell the interpreter to consider each quote as part of the string, not the beginning or the end.

To do this, you need to use an escape character. In our case, it's the character that marks the start and end of a string, either a single or double quote, depending. Use a backslash `\` before the character you want to escape.

```php
<?php

// Only escape ", since in this situation
// double quotes have a special meaning
print_r("Dragon's mother said \"No\"");
// => Dragon's mother said "No"
```

Look closely: we had to use `\` for double quotes to escape them, and not for the single quote (apostrophe) because the string is written in double quotes. If the string were written in single quotes, the escape character would be used before the apostrophe, not before the double quotes.

```php
<?php

// \ is displayed if it's followed by a normal character, and
// not a special one
print_r("Death is \so terribly final");
// => Death is \so terribly final
```

But what if you want to print the backslash? Just like any other special symbol, it escapes using a backslash too.

```php
<?php

print_r("\\");
// => \
```

Self-test: what will be printed?

```php
<?php

print_r("\\ \\ \\\\ \\\ \'\"");
```
