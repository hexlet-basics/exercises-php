

Let's imagine that the program from the last lesson looks like this:

```php
<?php

$x = 'Father!';
print_r($x);
print_r($x);
```

It still works, but it's changed the variable name to `$x`. The computer doesn't care what we call variables, it's just a soulless machine, but programmers do. We read code much more often than we write it. And not your own either, but rather code written by other people. The quality and clarity of variable names is half the battle in code analysis.

It's better to sit around and come up with a name that describes the essence, the meaning of the variable, than to name it whatever you want, and then redo it in the future. Try to give them names so that they're as clear as possible without context, without needing to learn the surrounding code.

There is a joke among developers: "The most difficult things in programming are naming variables and invalid cache". It's really hard to come up with names. What would you call the variable that stores _the number of unpaid orders from customers in arrears in the previous quarter?_

Self-Check. Think of a name for the variable that will store the _«number of siblings of the king»_. Write it down in a notebook or email it to yourself. Don't put anything in there except the name of the variable. And in a few lessons we'll come back to this topic ;-)
