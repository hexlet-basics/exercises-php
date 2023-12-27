
The main rule is that a variable must be declared before it can be used. If you do it later, the program simply won't work.

```php
<?php

print_r($greeting);
$greeting = 'Father!';
```

Running the program above ends with an error _PHP Notice:  Undefined variable: greeting_. _Undefined variable_ It means that the code uses a name (the proper term is 'identifier') that hasn't been defined. And in the error itself, the variable identifier is explicitly specified: _greeting_. In addition to defining things in the wrong order, there are other, more trivial errors that can occur in PHP, for example, typos, both when using a variable and declaring one

The number of these errors can be reduced by using a properly configured editor. An editor like this highlights names that are used without announcement and warns of possible problems.
