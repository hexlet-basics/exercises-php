
Los sitios web constantemente envían correos electrónicos a sus usuarios. Una tarea típica es enviar automáticamente un correo electrónico personalizado, donde el nombre de usuario estará en el asunto. Si el nombre del usuario se encuentra en algún lugar de la base de datos del sitio web como una cadena, la tarea de generar el asunto se reduce a la concatenación: por ejemplo, necesitas unir la cadena `Hello` con la cadena que contiene el nombre.

Escribe un programa que genere el asunto y el cuerpo del correo electrónico, utilizando las variables proporcionadas, y muestre las cadenas resultantes en la pantalla.

Para el asunto, utiliza las variables `$firstName` y `$greeting`, seguido de una coma y un signo de exclamación. Muestra esto en la pantalla en el orden correcto.

Para el cuerpo del correo electrónico, utiliza las variables `$info` e `$intro`, con la segunda oración en una nueva línea.

El resultado en la pantalla debería lucir así:

<pre class='hexlet-basics-output'>
Hello, Joffrey!
Here is important information about your account security.
We couldn't verify you mother's maiden name.
</pre>

Completa la tarea utilizando solamente dos `print_r()`.
