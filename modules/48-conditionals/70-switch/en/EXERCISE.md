
Write a function, `getNumberExplanation()`, that describes a number passed to it. If there's no explanation available, it returns `null`:

```php
<?php

getNumberExplanation(8); // null

// There are explanations only for the following numbers
getNumberExplanation(666); // 'devil number'
getNumberExplanation(42);  // 'answer for everything'
getNumberExplanation(7);   // 'prime number'
```
