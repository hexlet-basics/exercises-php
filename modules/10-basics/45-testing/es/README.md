
Nuestro sitio web verifica automáticamente tus soluciones. ¿Cómo funciona?

En el caso más simple, el sistema simplemente ejecuta el código y verifica lo que se muestra en la pantalla. Luego lo compara con lo que "esperábamos" según la tarea.

En las lecciones más avanzadas, escribirás funciones, que son mini programas que toman información del mundo exterior y realizan operaciones. La verificación de tus soluciones en estos casos es un poco más complicada: el sistema ejecuta tu solución y le pasa cierta información. El sistema también sabe qué respuesta debería dar la función correcta con esos datos de entrada.

Por ejemplo, si tu tarea es escribir una función que sume dos números, el sistema de verificación le pasará diferentes combinaciones de números y comparará la respuesta de tu función con las sumas reales. Si las respuestas coinciden en todos los casos, se considera que la solución es correcta.

Este enfoque se llama pruebas y se utiliza en el desarrollo diario real. Por lo general, el programador primero escribe una prueba, que es un programa de verificación, y luego escribe el programa que quería escribir. Durante el proceso, se ejecutan las pruebas constantemente y se verifica si se está acercando a la solución.

Es por eso que nuestro sitio web muestra "Pruebas superadas" cuando resuelves correctamente una tarea.

Aquí tienes un ejemplo sencillo: imprimir la cadena `Hello, World!`. Supongamos que cometiste un pequeño error y la función muestra otro valor en la pantalla. El sistema responderá algo así:

<pre class='hexlet-basics-output'>
  -'Hello, World!'
  +'ello, World!'

  ¡FALLOS!
  Pruebas: 1, Afirmaciones: 1, Fallos: 1.
</pre>

En la pantalla aparece una pista. El signo `+` indica lo que imprimió tu código. El signo `-` indica lo que se esperaba. Al comparar estos dos valores, puedes ver el error. En el ejemplo anterior, se puede ver que falta la letra _H_ en la salida.

Además de nuestras pruebas, es muy útil experimentar con el código. Para ello, puedes utilizar el servicio [repl.it](https://repl.it/languages/php). Sería ideal si ejecutas todo el código presente en las lecciones por tu cuenta.

---

A veces, durante la resolución de una tarea, puede parecer que has hecho todo correctamente, pero el sistema no acepta la solución. Este comportamiento es prácticamente inexistente. Las pruebas no funcionales simplemente no pueden llegar al sitio web, se ejecutan automáticamente después de cada cambio. En la gran mayoría de estos casos (y todos nuestros proyectos en conjunto han realizado millones de verificaciones a lo largo de muchos años), el error se encuentra en el código de la solución. Puede ser muy sutil, como haber ingresado accidentalmente una letra rusa en lugar de una letra en inglés, haber utilizado minúsculas en lugar de mayúsculas o haber olvidado imprimir una coma. Otros casos son más complicados. Es posible que tu solución funcione para un conjunto de datos de entrada, pero no funcione para otro. Por lo tanto, siempre lee atentamente la descripción de la tarea y la salida de las pruebas. Casi seguro que habrá una indicación del error.

Sin embargo, si estás seguro de que hay un error o has encontrado alguna imprecisión, siempre puedes señalarlo. Al final de cada teoría hay un enlace al contenido de la lección en GitHub (¡este proyecto es completamente abierto!). Al ir allí, puedes escribir un issue, ver el contenido de las pruebas (donde se muestra cómo se llama tu código) e incluso enviar un pull request. Si esto aún te resulta confuso, únete a nuestra comunidad en [Telegram Hexlet](https://t.me/hexletcommunity/12), allí en el canal de Voluntarios siempre estaremos dispuestos a ayudar.
