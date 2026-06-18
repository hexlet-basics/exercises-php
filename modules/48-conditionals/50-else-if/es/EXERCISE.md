
Implementa la función `getTrafficLightAction()`, que recibe el color de un semáforo y devuelve qué debe hacer el conductor.

Reglas:

* `'green'` → `'go'`
* `'yellow'` → `'slow down'`
* `'red'` → `'stop'`
* Cualquier otro color → `'unknown'`

Ejemplos de llamada:

```php
<?php

getTrafficLightAction('green');  // 'go'
getTrafficLightAction('red');    // 'stop'
getTrafficLightAction('purple'); // 'unknown'
```
