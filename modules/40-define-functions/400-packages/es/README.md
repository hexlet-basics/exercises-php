A medida que un programa crece, no solo aumenta la cantidad de líneas de código, sino también la cantidad de archivos. Además, el código cómodo se quiere reutilizar en distintos proyectos en lugar de copiarlo de uno a otro.

En Python, los módulos se agrupan mediante paquetes-directorios. En el ecosistema PHP, la unidad de reutilización y distribución es el **paquete** (paquete de Composer). Un paquete es un conjunto de archivos PHP con funciones y clases que se publica e instala en su totalidad.

## Composer

Los paquetes se gestionan con **Composer**, el gestor de paquetes de PHP. Un proyecto describe sus dependencias en el archivo `composer.json`:

```json
{
    "name": "hexlet-basics/exercises-php",
    "require": {
        "php": "^8.4",
        "nesbot/carbon": "^3.0"
    }
}
```

El comando `composer install` descarga todos los paquetes enumerados y los coloca en el directorio `vendor/`. Puedes añadir un nuevo paquete con el comando `composer require`, por ejemplo:

```bash
composer require nesbot/carbon
```

## Nombre del paquete

El nombre de un paquete consta de dos partes separadas por una barra: `nesbot/carbon`. La primera parte es el nombre del editor (vendor), la segunda es el nombre del propio paquete. Este esquema resuelve los conflictos de nombres: distintos desarrolladores pueden publicar paquetes con el mismo nombre y no interferirán entre sí — igual que los espacios de nombres permiten que existan funciones idénticas.

## Autocarga

Los paquetes instalados van a parar al directorio `vendor/`, pero no hace falta incluir cada archivo manualmente mediante `require`. Composer genera un archivo autocargador especial, y una sola línea basta para que todos los paquetes instalados queden disponibles:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

// Después puedes usar las funciones y clases
// de cualquier paquete instalado
```

Este mecanismo se llama autocarga (autoloading). Así es exactamente como están estructurados los proyectos PHP reales: al inicio del programa se incluye el autocargador, y después el código simplemente usa lo que necesita.

## El registro Packagist

Los paquetes no se escriben desde cero para cada tarea — la fuente principal es el registro [Packagist](https://packagist.org/), donde se publican cientos de miles de paquetes listos para usar: para trabajar con fechas, redes, pruebas y casi cualquier otra tarea. Por ejemplo, PHPUnit, que comprueba tus soluciones en este curso, también es un paquete de Composer.

La biblioteca estándar de PHP es un caso aparte. Las funciones integradas como `strlen()`, `round()` o `rand()` no necesitan instalarse — vienen con el propio lenguaje y están disponibles de inmediato, sin Composer ni autocarga.
