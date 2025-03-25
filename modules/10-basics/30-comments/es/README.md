## ¿Para qué sirven los comentarios?

Además del código en los archivos de código fuente, puede haber comentarios. Este texto no es parte del programa. Es útil para los programadores como notas. Con ellos se agregan explicaciones, por ejemplo, cómo funciona el código, qué errores corregir o qué agregar más tarde.

Los comentarios en PHP pueden ser de dos tipos:

* **Comentarios de una línea** - comienzan con `//` o `#`. Después de estos caracteres puede seguir cualquier texto, toda la línea no se analizará ni se ejecutará:

  ```php
  <?php

  // ¡Por Winterfell!
  // ¡Por Lannisters!
  // El comentario puede estar en la línea después de algún código
  print_r('Soy el Rey'); // ¡Por Lannisters!
  ```

* **Comentarios de varias líneas** - comienzan con `/*` y terminan en `*/`. Entre ellos, cada línea debe comenzar con el carácter `*`:

  ```php
  <?php

  /*
   * La noche es oscura y
   * está llena de terrores.
   */
  print_r('Soy el Rey');
  ```
