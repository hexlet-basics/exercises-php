En esta lección vamos a analizar una característica de algunas funciones. Pueden aceptar un número variable de parámetros. Pero no estamos hablando de valores por defecto. Veamos este ejemplo:

```php
<?php

max(1, 10, 3); // 10
max(1, -3, 2, 3, 2); // 3
```

La función `max()` encuentra el valor máximo entre los parámetros proporcionados. ¿Te preguntas cuántos parámetros espera esta función? Si abrimos la documentación de esta función, veremos esta construcción:

```txt
max(mixed $value, mixed ...$values): mixed
```

Esta notación indica que esta función acepta dos parámetros obligatorios y cualquier número de parámetros opcionales. La opcionalidad de los parámetros se describe con los puntos suspensivos `...`.
