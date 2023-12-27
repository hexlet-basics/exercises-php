Functions can not only return values, but also accept them as parameters. We've encountered function parameters many times before:

```php
<?php

// Accepts one parameter of any type as input
print_r('I'm a parameter');
// Accepts two numeric parameters as input
// the first is a rounded number,
// the second is the number of decimal places to leave
round(10.1245, 3); // 10.125
// Accepts three string parameters as input
// the first one is what we're looking for, the second one is what we're changing it to
// the third is the string that we're making replacements to
str_replace('go', 'mo', 'google'); // 'moogle'
```

In this lesson, we'll learn how to create functions that take parameters as input. Suppose we need to implement a function called `getLastChar()`, which returns the last character in the string passed to it as a parameter. Here's what using this function would look like:

```php
<?php

// Passing parameters directly without variables
getLastChar('Hexlet'); // 't'

// Passing parameters through variables
$name1 = 'Hexlet';
getLastChar($name1); // 't'
$name2 = 'Goo';
getLastChar($name2); // 'o'
```

We can draw the following conclusions from the description and examples:

* We need to define the `getLastChar()` function
* The function must accept one parameter as input, a string
* The function must return a string

Defining the function:

```php
<?php

function getLastChar($str)
{
    // Calculate the index of the last character as the length of the string minus - 1
    return $str[strlen($str) - 1];
}
```

Let's break it down. The name of the parameter (`$str`) is given in parentheses. Since we don't know which value is being worked with within functions, parameters are always described as variables. The name of the parameter can be anything, it's not related to how the function is called. The main thing is that the name should reflect the meaning of the meaning contained within. The specific value of the parameter will depend on the call to this function.

This parameter is mandatory. If you try to call a function without a parameter, the interpreter will give an error:

```sh
getLastChar(); // this code doesn't make sense
ArgumentCountError: Too few arguments to function getLastChar(), 0 passed
```

You can specify two, three or more parameters in exactly the same way. Each parameter is separated from each other with a comma.

```php
<?php

// function to find the average number
function average($x, $y)
{
    return ($x + $y) / 2;
}

average(1, 5); // 3
average(1, 2); // 1.5
```
