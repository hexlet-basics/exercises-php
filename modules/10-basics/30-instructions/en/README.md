We can call the command `print_r('Hexlet')` an instruction; it tells the PHP interpreter what to do. There can be as many such instructions as you like. Each of them is executed after the previous one has finished, and this is how, out of simple elements, we get an arbitrarily large and complex program.

```text
Statement 1: print_r('Hello')   →  executed
        ↓
Statement 2: print_r('World')   →  executed
        ↓
Statement 3: print_r('!')       →  executed
```

PHP code is a set of instructions separated from each other by the `;` symbol. Here is an example of code with two instructions. These lines tell the computer to print phrases on the screen.

```php
<?php

print_r('Mother of Dragons. '); // First instruction
print_r('Dracarys!'); // Second instruction
```

Execution result:

```text
Mother of Dragons. Dracarys!
```

Note: the phrases were printed one after another on the same line. The `print_r()` command outputs text and adds nothing of its own, so no line break appears.

## Order matters

The PHP interpreter executes code strictly in the order in which you wrote it. If you swap the lines:

```php
<?php

print_r('Dracarys!');
print_r('Mother of Dragons. ');
```

they will also swap on the screen:

```text
Dracarys!Mother of Dragons. 
```

## Alternative form of notation

Usually instructions are written on separate lines, but since instructions in PHP are separated by the `;` symbol, a line break is not required. Several instructions can be written on a single line:

```php
<?php

print_r('Mother of Dragons. '); print_r('Dracarys!');
```

Both versions work the same way, but the second one is harder to read. That is why instructions are almost always written one per line.

## Why this is needed

Right now we are writing very simple programs, but over time they will start to become more complex, and one of the most important skills that will help you understand them is the ability to break (in your head) a program down into independent instructions. This is the only way to figure out what is happening in the code. Below is an example to draw your attention; you don't need to understand it yet:

```php
<?php

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    $divider = 2;

    while ($divider <= $number / 2) {
        if ($number % $divider == 0) {
            return false;
        }

        $divider = $divider + 1;
    }

    return true;
}
```
