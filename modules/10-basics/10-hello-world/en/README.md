As is our tradition, we'll begin by writing the 'Hello, World!' program. The program will print the following text:

<pre class='hexlet-basics-output'>
Hello, World!
</pre>

Output to the screen is done with a special command `echo`, followed by a single or double-quoted string to be output. Be sure to put a semicolon at the end.

```php
<?php

echo 'Hello, World!'; // => Hello, World!
```

https://replit.com/@hexlet/php-basics-hello-world-echo

There are other ways to display a string on the screen. For example, you can use the function (a concept we will get to know later) `print_r()`. In this case, the string is entered in parentheses immediately after the function name. You also need to put `;` at the end.

```php
<?php

print_r('Hello, World!');
```

https://replit.com/@hexlet/php-basics-hello-world-printr

In simple situations, there's no difference between these constructions. You can use either one method of output or the other. In more complex cases, where you want to display not just numbers or strings, but, for example, arrays, `echo` won't be able to do this, but `print_r()` will display everything.
