
Te has encontrado con un código que muestra en pantalla la cantidad total de habitaciones en posesión del actual rey:

```php
<?php

$rey = 'King Balon the 6th';
print_r($rey . ' has ' . (6 * 17) . ' rooms.');
```

Como puedes ver, estos son números mágicos: no está claro qué significa el 6 y qué significa el 17. Se puede adivinar si se conoce la historia de la familia real: cada nuevo rey hereda todos los castillos de sus antepasados y construye un nuevo castillo, una copia exacta del castillo de sus padres.

Esta extraña dinastía simplemente reproduce castillos idénticos...

Elimina los números mágicos creando nuevas variables y luego muestra el texto en pantalla.

El resultado debería ser:

<pre class='hexlet-basics-output'>
King Balon the 6th has 102 rooms.
</pre>

Los nombres de las variables deben transmitir el significado de los números, pero al mismo tiempo deben ser lo suficientemente cortos y concisos para una lectura cómoda.

Recuerda: el código funcionará con cualquier nombre, y nuestro sistema siempre verifica solo el resultado en pantalla, por lo que completar esta tarea es tu responsabilidad.
