Implementa la función `amountPerPerson()`. Recibe el total de la cuenta de un restaurante, el número de personas y el porcentaje de propina, y devuelve la cantidad que paga cada persona. El resultado se redondea hacia arriba — nadie debe pagar de menos.

Usa la función integrada `ceil()` para redondear. Está disponible de inmediato — no hay que cargar nada.

```php
<?php

// Cuenta 300, 4 personas, propina del 20% — 360 en total, cada uno paga 90
print_r(amountPerPerson(300, 4, 20)); // => 90

// Cuenta 350, 3 personas, propina del 10% — 385 en total, cada uno paga 129
print_r(amountPerPerson(350, 3, 10)); // => 129
```

## Pista

* Primero calcula el total con la propina, luego divídelo entre el número de personas y redondea hacia arriba
* `ceil()` devuelve un `float`, mientras que la función debe devolver un `int` — la conversión de tipos te ayudará
