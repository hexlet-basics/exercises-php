Recordemos que las funciones pueden ser incorporadas o agregadas por el programador. Ya nos hemos familiarizado con las primeras. Y en esta lección aprenderemos a crear nuestras propias funciones.

La definición de funciones propias simplifica significativamente la escritura y el mantenimiento de programas. Las funciones permiten combinar operaciones complejas en una sola. Por ejemplo, enviar un correo electrónico en un sitio web es un proceso bastante complicado. Incluye la interacción con sistemas externos.

Gracias a la capacidad de definir funciones, toda la complejidad se puede ocultar detrás de una función simple:

```php
<?php

// Ejemplo hipotético
// Lugar donde se encuentra la función
namespace Some\Email\Package\send;

$email = 'support@hexlet.io';
$title = 'Ayuda';
$body = 'He escrito una historia de éxito, ¿cómo puedo obtener un descuento?';

// Una pequeña llamada - y mucha lógica interna
send($email, $title, $body);
```

Internamente, esta llamada realiza bastante lógica. Se conecta al servidor de correo, forma una solicitud correcta basada en el encabezado y el cuerpo del mensaje. Luego lo envía y cierra la conexión.

Crearemos nuestra primera función. Su tarea es mostrar un saludo en la pantalla:

```
¡Hola, Hexlet!
```

```php
<?php

// Definición de la función
// La definición no llama ni ejecuta la función
// Solo decimos que ahora existe esta función
function showGreeting()
{
  $text = '¡Hola, Hexlet!';
  print_r($text);

}

// Llamada a la función
showGreeting(); // => '¡Hola, Hexlet!'
```

A diferencia de los datos normales, las funciones realizan acciones, por lo que sus nombres casi siempre deben ser verbos: "construir algo", "dibujar algo", "abrir algo".

Todo lo que se describe debajo del nombre de la función con sangría se llama cuerpo de la función. Dentro del cuerpo se puede describir cualquier código. Se puede decir que es un pequeño programa independiente, un conjunto de instrucciones arbitrarias.

El cuerpo se ejecuta cuando se inicia la función. Y cada llamada a la función inicia el cuerpo independientemente de otras llamadas.

El cuerpo de la función puede estar vacío:

```php
<?php

// Definición mínima de una función que no hace nada
function noop() {}

noop(); // Hay una llamada, pero no tiene sentido
// Esta función también puede ser útil,
// pero esto se refiere a temas avanzados
```

La creación de una función también se llama implementación. Estas palabras se encuentran a menudo en la práctica.
