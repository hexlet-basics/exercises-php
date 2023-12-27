
Increment and decrement are not very important operations in PHP, and you can easily manage without them. The assignment in this lesson is not directly related to this topic, but you can use increment and decrement to get used to them. Otherwise, this exercise is just more practice with loops, strings, and conditions.

Write a function, `makeItFunny()`, which returns a copy of a string passed to it, where each nth element is uppercase. n also needs to be passed to the function.

To find each nth element, you will need to find the remainder from division `%`. Think about how you can use it.

```php
<?php

$text = 'I never look back';
// Every third element
makeItFunny($text, 3); // 'I NevEr LooK bAck'
```
