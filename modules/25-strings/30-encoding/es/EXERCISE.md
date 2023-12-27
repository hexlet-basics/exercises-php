
En PHP, puedes "solicitar" y mostrar en pantalla cualquier carácter de la codificación ASCII. Por ejemplo:

```php
<?php

print_r(chr(63));
```

Esto mostrará en pantalla el carácter con el número 63, que es el signo de interrogación `?`. De esta manera, puedes mostrar cualquier carácter.

Utiliza la [tabla de códigos ASCII](https://www.ascii-code.com). En esta tabla, nos interesa el código decimal (*dec* o *decimal*) con el que se codifican los caracteres.

Utilizando el ejemplo anterior y la tabla encontrada, muestra en pantalla `~^%`.

(Por supuesto, puedes "engañar" las pruebas y simplemente hacer `print_r('~^%')`, pero eso no sería interesante :)
