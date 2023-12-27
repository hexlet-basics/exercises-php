In programming, many functions and methods have parameters that rarely change. In such cases, these parameters are given default values that can be changed as needed. This reduces the number of duplicated code. An example:

```php
<?php

// Exponentiation function.
// The second parameter is 2 by default
function myPow($x, $base = 2)
{
    return $x ** $base;
}

// 3 to the power of 2 (2 is the default setting)
myPow(3); // 3 * 3 = 9
// 3 to the power of 3
myPow(3, 3); // 3 * 3 * 3 = 27
```

The default value looks like a normal assignment within the definition. It only works if the parameter isn't passed. This is something you should get used to. There can even be a default value when there's only one parameter:

```php
<?php

function myPrint($text = 'nothing')
{
    print_r($text);
}

myPrint(); // => "nothing"
myPrint("Hexlet"); // => "Hexlet"
```

There can be any number of default parameters:

```php
<?php

function f($a = 5, $b = 10, $c = 100)
{
  ...
}
```

Default values have one limitation. They need to be at the very end of the parameter list. From a syntax perspective, it's impossible to create a function that will have a mandatory parameter after an optional one:

```php
<?php

// This code will terminate with an error
function f($a = 5, $b = 10, $c = 100, $x)
{
  ...
}

// This too
function f($a = 5, $b = 10, $x, $c = 100)
{
  ...
}

// But this one will work.
function f($x, $a = 5, $b = 10, $c = 100)
{
  ...
}

// This too
function f($x, $y, $a = 5, $b = 10, $c = 100)
{
  ...
}
```
