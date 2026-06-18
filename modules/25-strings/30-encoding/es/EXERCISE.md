El programa recibe los códigos numéricos de los caracteres y los muestra en la pantalla — esto resulta cómodo cuando un carácter es difícil de teclear con el teclado. Encuentra los caracteres con los códigos 126, 94 y 37 en la [tabla ASCII](https://www.ascii-code.com) (nos interesa el código decimal — *dec* o *decimal*) y muestra cada uno en una línea aparte usando la función `chr()` y un salto de línea:

```php
print_r(chr(...) . "\n");
print_r(chr(...) . "\n");
print_r(chr(...) . "\n");
```

Por ejemplo, el carácter `?` tiene el código 63:

```php
print_r(chr(63)); // salida: ?
```
