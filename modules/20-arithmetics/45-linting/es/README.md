En esta lección aprenderemos qué son los estándares de codificación. Facilitan el desarrollo y hacen que el código sea más comprensible. Vamos a analizar en detalle dos recomendaciones principales para PHP que contienen reglas de codificación.

## Estándares de codificación en PHP

El código debe estar formateado de manera que sea comprensible y fácil de mantener. Para ello existen conjuntos de reglas especiales llamados **estándares**. Estos describen varios aspectos de la escritura de código.

En PHP, los estándares más comunes son los **PSR** - PHP Standards Recommendations o Recomendaciones de Estándares PHP de [PHP-FIG](https://www.php-fig.org/psr/). Son un conjunto de reglas que facilitan el desarrollo y resuelven problemas específicos.

Actualmente existen varias recomendaciones aprobadas, cada una de ellas se identifica con un número: PSR-1, PSR-2, PSR-3 y [otros](https://en.wikipedia.org/wiki/PHP_Standard_Recommendation). Conocerás todas estas recomendaciones durante el aprendizaje y el trabajo. En esta lección, vamos a analizar en detalle las siguientes:

* PSR-1. [Basic Coding Standard](https://www.php-fig.org/psr/psr-1/) - estándar básico de codificación. Es un conjunto de reglas que definen cómo formatear el código: cómo escribir etiquetas PHP, cómo nombrar clases, métodos y constantes de clases. También aborda cuestiones de codificación, autoloading, namespaces y separación de responsabilidades entre archivos.
* PSR-12. [Extended Coding Style](https://www.php-fig.org/psr/psr-12/) - estándar de estilo de codificación extendido, reemplaza y amplía el obsoleto PSR-2. Este estándar requiere el cumplimiento de las reglas de PSR-1. También agrega muchas nuevas reglas: sangrías, archivos, líneas, palabras clave, clases, estructuras de control, ámbitos y otros elementos.

## Linters en PHP

En cualquier lenguaje de programación existen herramientas especiales llamadas **linters**. Verifican el código en busca de cumplimiento de los estándares. El linter ampliamente utilizado en PHP es [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer).

Supongamos que tenemos un archivo con el siguiente código PHP:

```php
<?php

// La siguiente línea tiene una sangría de una tabulación
	print_r (((8 / 2) + 5) - (-3 / 2));

?>
```

Al verificar el archivo, el linter encontrará los siguientes errores:

* `Spaces must be used to indent lines; tabs are not allowed` - PSR-12 recomienda usar una sangría de cuatro espacios, pero en el ejemplo se utiliza una tabulación.
* `A closing tag is not permitted at the end of a PHP file` - el estándar requiere omitir la etiqueta de cierre `?>`.
* `Space before opening parenthesis of function call prohibited` - al llamar a una función, no debe haber espacios entre el nombre de la función y los paréntesis. Sin embargo, en el código verificado hay un espacio después del nombre `print_r`.

Vamos a corregir el código: eliminaremos la etiqueta de cierre, las sangrías y el espacio después del nombre de la función:

```php
<?php

print_r(((8 / 2) + 5) - (-3 / 2)); // => 10.5
```

Esta versión ya cumple con las reglas y el linter no mostrará ningún mensaje de error.
