Even the most experienced developers rarely write code that works perfectly on the first try. The more experienced a developer is, the more confidently they **debug** it, that is, analyze errors and fix them.

The debugging skill does not appear by itself. It needs to be developed, and as early as possible. As you study, you will complete tasks and practice, and over time, error analysis will become a habit.

## How to find an error in code

Debugging by trial and error takes a lot of time. It is much more productive to first understand what exactly went wrong, and then fix the cause. Any work with errors starts with understanding.

First of all, study the **error message**. PHP always indicates the file and line where the problem occurred. For example:

```bash
Error: Call to undefined function create() in /code/users.php:5
```

The message says that the function `create()` is not defined. Such an error most often means a typo in the name. If your English is not great yet, a translator will help.

Along with the message, PHP outputs a **stack trace**. It contains a list of all function calls from the start of the program to the place with the error. It shows which functions completed successfully and where problems occurred. Each entry points to a file, a line, and the function being executed.

Imagine you wrote code in the file `users.php`: the function `main()` calls the function `create()`, and the call to `main()` itself is on line eight. The full error output will look like this:

```bash
PHP Fatal error:  Uncaught Error: Call to undefined function create() in /code/users.php:5
Stack trace:
#0 /code/users.php(8): main()
#1 {main}
  thrown in /code/users.php on line 5
```

The whole chain of events is visible at once. The program started (`{main}`), successfully reached `main()` on line eight, and here it ran into a naming error on line five.

## Types of errors

The most understandable errors in PHP are called **syntax errors**. They occur when the code is formatted incorrectly, for example because of a wrong quote or a missing bracket. The output always contains `Parse error:`.

Let's look at an example. Here there is a syntax error because the opening quote `"` does not match the closing one `'`:

```bash
PHP Parse error:  Unclosed '(' on line 3 in /code/users.php on line 4
```

The interpreter does not even start executing such a program — it cannot parse it.

The hardest to fix are **programming errors**. These include calling a non-existent function, using an undeclared variable, and passing arguments of the wrong type. They usually occur in a different place than the real cause, which complicates the diagnosis.

The hardest to fight are **logical errors**. The program runs without failures but produces an incorrect result for some input data. There is no error message, only unexpected output. For example, a function should calculate a sum but calculates a difference:

```php
<?php

// The function should calculate the sum of numbers but calculates the difference:
function sum(int $a, int $b): int
{
    return $a - $b;
}

// With this call, the error is not obvious, because
// both addition and subtraction give the same result
sum(4, 0); // 4
```

## Debugging methods

Any debugging method is based on observing variables during execution. Let's look at a specific function.

Below is a function that calculates the sum of numbers from `$start` to `$finish`. With `$start = 3` and `$finish = 5`, it should calculate `3 + 4 + 5`:

```php
<?php

function sumOfSeries(int $start, int $finish): int
{
    $result = 0;
    $n = $start;

    while ($n < $finish) {
        $result = $result + $n;
        $n = $n + 1;
    }

    return $result;
}
```

The key variables in the function are `$n` and `$result`. To find the error, you need to see what values they take on each iteration.

For this, there are **visual debuggers**, such as Xdebug. They integrate into popular code editors and let you run the program step by step, watching the variables in real time. You can find a suitable one by searching for "PHP debuggers" on Google.

On Hexlet, **debug printing** is used instead of a debugger. The principle is the same, only the variable values are printed using a regular `print_r()`. What is printed is shown in the `OUTPUT` tab:

```php
<?php

function sumOfSeries(int $start, int $finish): int
{
    $result = 0;
    $n = $start;

    while ($n < $finish) {
        print_r("new iteration !!!!\n");
        print_r("{$n}\n");
        $result = $result + $n;
        $n = $n + 1;
        print_r("{$result}\n");
    }

    return $result;
}

sumOfSeries(3, 5);

// => new iteration !!!!
// => 3
// => 3
// => new iteration !!!!
// => 4
// => 7
```

The output shows that there is one iteration fewer than needed. The five (`$finish`) did not make it into the addition. The condition uses `$n < $finish` instead of `$n <= $finish`. The `<` sign needs to be replaced with `<=`.

Beginner developers often get upset about errors and consider themselves careless. Everyone makes mistakes, both juniors and seniors. The difference is how confidently you find them.

Beginners think that a good developer looks at code and immediately understands what is wrong. This rarely works in practice. A code fragment without context says little. **If you want to ask an experienced developer for advice, show them the error message first.**
