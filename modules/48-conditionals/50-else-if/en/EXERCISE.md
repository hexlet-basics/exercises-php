
Implement the `getTrafficLightAction()` function, which takes a traffic light color and returns what the driver should do.

Rules:

* `'green'` → `'go'`
* `'yellow'` → `'slow down'`
* `'red'` → `'stop'`
* Any other color → `'unknown'`

Call examples:

```php
<?php

getTrafficLightAction('green');  // 'go'
getTrafficLightAction('red');    // 'stop'
getTrafficLightAction('purple'); // 'unknown'
```
