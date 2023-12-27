
Las construcciones como `$index = $index + 1` en PHP se utilizan con bastante frecuencia, por lo que los creadores del lenguaje agregaron una forma abreviada de escribirlo: `$index += 1`. Estas abreviaciones se conocen como **azúcar sintáctico**, porque hacen que el proceso de escribir código sea un poco más fácil y agradable, "endulzándolo" :)

Es importante entender que las diferencias son únicamente en la forma de escribirlo. El intérprete convierte la construcción abreviada en la forma expandida.

Existen formas abreviadas para todas las operaciones aritméticas y para la concatenación de cadenas:

- `$a = $a + 1` → `$a += 1`
- `$a = $a - 1` → `$a -= 1`
- `$a = $a * 2` → `$a *= 2`
- `$a = $a / 1` → `$a /= 1`
- `$a = $a . 'bla'` → `$a .= 'bla'`
