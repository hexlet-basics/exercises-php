
Реализуйте функцию `getTrafficLightAction()`, которая принимает цвет светофора и возвращает, что нужно делать водителю.

Правила:

* `'green'` → `'go'`
* `'yellow'` → `'slow down'`
* `'red'` → `'stop'`
* Любой другой цвет → `'unknown'`

Примеры вызова:

```php
<?php

getTrafficLightAction('green');  // 'go'
getTrafficLightAction('red');    // 'stop'
getTrafficLightAction('purple'); // 'unknown'
```
