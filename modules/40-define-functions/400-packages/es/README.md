En el ecosistema PHP, la unidad de reutilización y distribución de código es el **paquete** (paquete de Composer). Los paquetes se gestionan con **Composer**, el gestor de paquetes de PHP. Un proyecto describe sus dependencias en el archivo `composer.json`:

```json
{
    "name": "hexlet-basics/exercises-php",
    "require": {
        "php": "^8.4",
        "nesbot/carbon": "^3.0"
    }
}
```

El nombre de un paquete consta de dos partes separadas por una barra: el nombre del editor (vendor) y el nombre del propio paquete, por ejemplo `nesbot/carbon`. El comando `composer install` descarga los paquetes en el directorio `vendor/`. Una sola línea los hace disponibles todos — este mecanismo se llama autocarga (autoloading):

```php
<?php

require __DIR__ . '/vendor/autoload.php';
```

La fuente principal de paquetes es el registro [Packagist](https://packagist.org/), con cientos de miles de paquetes listos para usar. Por ejemplo, PHPUnit, que comprueba tus soluciones en este curso, también es un paquete de Composer. Las funciones integradas como `strlen()` o `rand()` no necesitan instalación — vienen con el propio lenguaje.
