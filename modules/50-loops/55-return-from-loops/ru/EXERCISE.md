
Реализуйте функцию `hasAtSymbol()`, которая проверяет, есть ли в email символ `@`.

Функция должна вернуть `true`, как только найдет `@`. Если цикл дошел до конца строки и символ не найден, функция должна вернуть `false`.

```php
<?php

hasAtSymbol('support@example.com'); // true
hasAtSymbol('wrong-email');         // false
hasAtSymbol('@admin');              // true
```
