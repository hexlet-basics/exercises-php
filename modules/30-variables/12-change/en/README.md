
The word "variable" itself indicates that it can be changed. Indeed, the value of a variable can change throughout your code.

```php
<?php

// greeting 
$greeting = 'Father!';
print_r($greeting);
print_r($greeting);

$greeting = 'Mother!';
print_r($greeting);
print_r($greeting);
```

The name remains unchanged, although it stores new data. Note that variables in PHP don't need to be declared. Instead, a variable is declared the first time it's used in a program.

Variables are a powerful yet dangerous thing. You can never be sure exactly what's written inside it without analyzing the code that comes before the variable. This is what developers do during debugging, when they try to figure out why the program doesn't work, or doesn't work as intended.

As you'll see later, PHP has more than just variables. Moreover, variables are not often used with the goal of changing them in mind. They're more often used as a storage method.
