Algunos nombres son bastante simples, como `$greeting`. Pero a menudo no es tan obvio. Muchas veces los nombres son compuestos, es decir, incluyen varias palabras. Por ejemplo, "nombre de usuario". En diferentes lenguajes se utilizan diferentes estilos de codificación, por lo que el nombre de la variable será diferente.

En la nomenclatura de variables se pueden distinguir cuatro enfoques principales, que a veces se combinan entre sí. Todos estos enfoques se aplican cuando el nombre de la variable consta de varias palabras:

* kebab-case: las partes compuestas de la variable se separan con guiones (`my-super-var`)
* snake_case: se utiliza un guion bajo para separar (`my_super_var`)
* CamelCase: cada palabra en la variable se escribe con mayúscula inicial (`MySuperVar`)
* lowerCamelCase: cada palabra en la variable se escribe con mayúscula inicial, excepto la primera (`mySuperVar`)

En PHP se utiliza CamelCase y su variante lowerCamelCase, donde la primera letra de la primera palabra es minúscula. Es precisamente lowerCamelCase el que se utiliza para las variables. Esto significa que los nombres se unen entre sí, y todas las palabras excepto la primera se escriben con mayúscula inicial: `$userName`. Con tres palabras se vería así: `$mySuperVariable`.

Otra regla generalmente aceptada es no utilizar transliteraciones para los nombres, solo inglés. Si tienes dificultades con el inglés, utiliza un traductor. Con el tiempo, al investigar en el código de otras personas, adquirirás una comprensión adecuada de la nomenclatura.

Los nombres no solo deben transmitir significado, sino también cumplir con las reglas sintácticas que generalmente no se verifican en el nivel del lenguaje, pero son necesarias durante el desarrollo. El proceso de escribir programas en el mundo moderno es un trabajo en equipo, y para una mejor interacción en el equipo, el código se escribe en un estilo uniforme, como si fuera realizado por una sola persona.

Cada lenguaje tiene sus propias reglas. Recientemente, en PHP se ha establecido un [estándar de codificación](https://www.php-fig.org/psr/psr-1/) ampliamente aceptado, al que todos aspiran de una forma u otra. Estos estándares describen muchos aspectos. Recomendamos que desde el principio te acostumbres a consultar el estándar y escribir código de acuerdo con él.

Afortunadamente, hoy en día no es necesario recordar todas las reglas del estándar, porque existen programas especiales que verifican automáticamente el código y señalan las violaciones. Estos programas se llaman **linter**, y comenzarás a usarlos un poco más adelante, cuando tengas un poco más de experiencia.
