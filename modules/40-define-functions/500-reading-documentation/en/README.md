Reading documentation is one of the most important skills for any developer.

The main section that programmers come back to all the time is the list of functions in the language. First, there are many of these functions and it's impossible to remember them all. Second, in PHP especially, there's a problem with inconsistency of parameters and function return values. So you constantly have to remember their order.

It uses its own syntax to describe functions. It looks a bit like PHP itself, but it's different, in other words, it's not PHP code, only a description of a function signature. Consider the `round()` function, which rounds a number:

```
round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] ) : float
```

The purpose of this format is to show the types, numbers, and default values of the input parameters, as well as the type of the output parameter. The last one is always in the rightmost position, right after the colon. In this case, the return value type is `float`.

The parameters are listed in parentheses after the function name, and separated by commas. Each parameter name is preceded by its type. For example, the `$val` parameter is a `float` parameter. The default value is set by assignment, e.g. `$precision` defaults to zero.

Square brackets _[]_ show optional function parameters, and they're also separated by commas. For the function above, these are `$precision` and `$mode`. `$mode`, in turn, defaults to the value of the `PHP_ROUND_HALF_UP` constant. If any parameter is equal to the value of a  constant, then the documentation for that function lists and describes all possible constants that can be used as the value of that parameter

Based on the above, we can call the function as follows:

```php
<?php

round(5.3); // 5.0
round(8.333, 1); // 8.3
round(8.333, 2, PHP_ROUND_HALF_UP); // 8.33
```
