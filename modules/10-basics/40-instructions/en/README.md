A statement is a command given to a computer to do something. Code in PHP is a collection of instructions, usually separated from each other by a  `;`.

Here's an example of some code with two statements.

```php
<?php

print_r('Mother of Dragons. ');
print_r('Dracarys!');
```

When you run this code, two sentences are displayed in sequence:

<pre class='hexlet-basics-output'>
Mother of Dragons. Dracarys!
</pre>

Theoretically, the instructions can be written one after the other without moving them to a new line:

```php
<?php

print_r('Mother of Dragons.'); print_r('Drakarys!');
```

But it's considered bad practice as it's difficult to read.

Why is it important to know? A statement is a unit of execution. The interpreter is a program that runs the code in PHP and executes the instructions strictly in order. An interpreter's principle of operation is (approximately) as follows. It reads the file with the code, splits the code into statements, and then executes them.
