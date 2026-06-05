Starting with PHP 8, arguments can be passed by parameter name. The name is written without `$`, followed by a colon:

```php
<?php

function repeat($text, $times)
{
    return str_repeat($text, $times);
}

repeat('Hi', 3);              // positional call
repeat(text: 'Hi', times: 3); // named call
repeat(times: 3, text: 'Hi'); // order does not matter
repeat('Hi', times: 3);       // positional arguments go first
```

Named arguments shine when a function has several optional parameters and you only need to override some of them:

```php
<?php

// Without named arguments: number_format(1234.567, 0, '.', ' ')
number_format(1234.567, thousands_separator: ' '); // => 1 235
```
