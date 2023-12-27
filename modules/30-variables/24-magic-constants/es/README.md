
Además de las constantes normales, en PHP existe un grupo separado llamado **constantes mágicas**. Sus diferencias son las siguientes:

* No se pueden definir constantes mágicas por uno mismo, solo se pueden utilizar las existentes.
* Las constantes mágicas comienzan y terminan con los caracteres `__` (dos guiones bajos).
* La magia radica en que estas constantes tienen el mismo valor solo dentro de una parte específica del programa.

El último punto puede parecer extraño. ¿Cómo pueden ser constantes si su valor cambia? Para ser honestos, no son muy constantes, pero sus cambios están claramente regulados y en la práctica no causan problemas. Algunos ejemplos de estas constantes son:

* `__LINE__` - contiene la línea actual del archivo en el que se utiliza
* `__FILE__` - la ruta al archivo actual
* `__DIR__` - la ruta al directorio en el que se encuentra el archivo actual
