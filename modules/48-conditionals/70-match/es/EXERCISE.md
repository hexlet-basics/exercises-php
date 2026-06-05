
Implementa una función `calculateDeliveryCost()` que reciba el país de entrega y el peso del paquete en kilogramos. La función debe devolver el costo de la entrega.

Cada país tiene dos tarifas: una para paquetes de hasta 1 kg inclusive y otra para paquetes más pesados:

* `'canada'`: 600 para paquetes de hasta 1 kg, 900 para el resto
* `'usa'`: 800 para paquetes de hasta 1 kg, 1200 para el resto
* `'germany'`: 700 para paquetes de hasta 1 kg, 1000 para el resto

Si el país es desconocido, la función debe devolver `null`.

Ejemplos de llamada de la función:

```php
<?php

calculateDeliveryCost('canada', 0.5); // 600
calculateDeliveryCost('canada', 2);   // 900
calculateDeliveryCost('usa', 1);      // 800
calculateDeliveryCost('france', 1);   // null
```

Pista: a la derecha de la flecha `=>` puede ir cualquier expresión, incluido el operador ternario.
