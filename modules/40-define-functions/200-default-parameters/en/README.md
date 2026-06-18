Functions can accept parameters. Sometimes it's convenient to set a value right in the function definition so you don't have to specify it on every call. Such a value is called a **default value**.

If an argument isn't passed, this value is used. If an argument is specified, it replaces the default. We've already encountered calling such functions—for example, the built-in `round()` function has a second parameter whose default value is `0`. Now let's learn how to define them ourselves.

## Example: repeating text

Let's make a function that repeats a string several times. By default let it be once, but you can specify a different count if you want:

```php
<?php

function repeat($text, $times = 1)
{
    return str_repeat($text, $times);
}

print_r(repeat('Hi'));    // => Hi
print_r(repeat('Hi', 3)); // => HiHiHi
```

This example uses the built-in `str_repeat()` function. It works like this: it takes the source string and repeats it the specified number of times. For example, `str_repeat('A', 5)` returns `'AAAAA'`. This function is often used when generating templates, separators, and repeating fragments of text.

```text
function repeat($text, $times = 2)    ← $times has a default value
{
    ...
}

repeat('go')        →  $times = 2  (default)
repeat('go', 5)     →  $times = 5  (explicitly specified)
```

A default value looks like a regular assignment in the definition. It only takes effect when the parameter isn't passed. You need to get used to this.

A default value can be present even when there's only one parameter:

```php
<?php

function myPrint($text = 'nothing')
{
    print_r($text);
}

myPrint();         // => "nothing"
myPrint('Hexlet'); // => "Hexlet"
```

## Example: joining words with a separator

By default the words are joined with a space, but you can specify a different character:

```php
<?php

function joinWords($word1, $word2, $sep = ' ')
{
    return $word1 . $sep . $word2;
}

print_r(joinWords('King', 'Road'));         // => King Road
print_r(joinWords('Dragon', 'stone', '-')); // => Dragon-stone
```

## Example: several default parameters

A function can contain more than one parameter with default values. For example, let's make a function that builds a separator string. By default the character is a hyphen, and the length is 10:

```php
<?php

function makeLine($symbol = '-', $length = 10)
{
    return str_repeat($symbol, $length);
}

print_r(makeLine());       // => ----------
print_r(makeLine('*'));    // => **********
print_r(makeLine('*', 5)); // => *****
print_r(makeLine('#', 3)); // => ###
```

## Restriction on parameter order

Optional parameters are always specified at the end of the parameter list. From a syntax point of view, it's impossible to create a function in which a required parameter comes after an optional one:

```php
<?php

// This code will fail with an error
function f($a = 5, $b = 10, $c = 100, $x)
{
  ...
}

// And this one too
function f($a = 5, $b = 10, $x, $c = 100)
{
  ...
}

// But this one will work
function f($x, $a = 5, $b = 10, $c = 100)
{
  ...
}

// And this one
function f($x, $y, $a = 5, $b = 10, $c = 100)
{
  ...
}
```
