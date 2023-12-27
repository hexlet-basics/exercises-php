Además de las operaciones aritméticas en matemáticas, existen operaciones de comparación, como `5 > 4` o `3 < 1`. También existen en programación. Por ejemplo, cuando ingresamos a un sitio web, se comparan el nombre de usuario y la contraseña ingresados con los que están en la base de datos. Si coinciden, se nos permite ingresar, es decir, se autentica. En esta lección, veremos las operaciones de comparación.

Los lenguajes de programación han adaptado todas las operaciones de comparación matemáticas sin cambios, excepto los operadores de igualdad y desigualdad. En matemáticas, se utiliza el signo igual `=`, pero en programación esto ocurre raramente.

En muchos lenguajes, el símbolo `=` se utiliza para asignar valores a variables. Por lo tanto, en Python se compara con `==`.

Lista de operaciones de comparación:

* `<` — menor que
* `<=` — menor o igual que
* `>` — mayor que
* `>=` — mayor o igual que
* `==` — igual que
* `!=` — no igual que


Estas operaciones se aplican no solo a números. Por ejemplo, con el operador de igualdad se pueden comparar cadenas de texto: `password == text` es una comparación de identidad de cadenas de texto que están almacenadas en diferentes variables.

## Tipo lógico

Una operación lógica como `5 > 4` o `password == text` es una expresión. Su resultado es un valor especial `True` (verdadero) o `False` (falso). Este es un nuevo tipo de dato para nosotros, el tipo `bool`:

```php
<?php

$resultado = 5 > 4;
print_r($resultado); // => true
print_r('uno' !== 'uno'); // => false
```

Solo contiene estos dos valores. Junto con las cadenas de texto (string) y los números enteros y racionales, el tipo booleano (bool) es uno de los tipos de datos primitivos en PHP.

## Predicados

Intentemos escribir una función simple que tome la edad de un niño como entrada y determine si es un bebé. Los bebés se consideran aquellos menores de un año.

Cualquier operación es una expresión, por lo que en una sola línea de la función escribimos "devolver el valor que resulte de la comparación `edad < 1`". Dependiendo del argumento que se reciba, la comparación será verdadera (`True`) o falsa (`False`), y `return` devolverá ese resultado:

```php
<?php

function esBebe($edad)
{
    return $edad < 1;
}

// Para mostrar bool, utilizamos var_dump() en lugar de print_r()
var_dump(esBebe(3));   // => bool(false)
var_dump(esBebe(0.5)); // => bool(true)

```
