La frase "el orden de los sumandos no altera la suma" es conocida por todos desde la escuela. Este principio se llama ley conmutativa y es una de las leyes fundamentales de la aritmética.

## Qué es la conmutatividad

Una operación se llama conmutativa si el orden de los operandos no afecta al resultado: al intercambiar los valores se obtiene la misma respuesta. Un ejemplo de operación conmutativa es la suma.

```php
<?php

print_r(3 + 2); // => 5
print_r(2 + 3); // => 5
```

El mismo resultado confirma que la operación es conmutativa.

```text
2 + 3 = 5     3 + 2 = 5
└──────────┬─────────┘
   mismo resultado

2 - 3 = -1    3 - 2 = 1
└──────────┬─────────┘
 resultado distinto
```

## Operaciones no conmutativas

Pero no todas las operaciones tienen esta propiedad. Por ejemplo, la resta es una operación no conmutativa:

```php
<?php

print_r(2 - 3); // => -1
print_r(3 - 2); // => 1
```

Intercambiar los operandos da un resultado diferente.

## En programación es exactamente lo mismo

La conmutatividad en programación funciona exactamente igual que en aritmética. PHP sigue estrictamente las reglas matemáticas.

Otras operaciones no conmutativas:

- División: _8 / 2 ≠ 2 / 8_
- Potenciación: _2 **3 ≠ 3** 2_

Ejemplos en código:

```php
<?php

// División
print_r(8 / 2);  // 8 dividido entre 2 = 4

// Potenciación
print_r(3 ** 2); // 3 al cuadrado = 9
```

Por lo tanto:

- Verifique siempre cuidadosamente el orden de los operandos, especialmente al trabajar con operaciones desconocidas;
- compruebe la conmutatividad de forma experimental en lugar de suponerla de antemano.
