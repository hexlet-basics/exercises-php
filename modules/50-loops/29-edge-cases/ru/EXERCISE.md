Реализуйте функцию-предикат `isArgumentsForSubstrCorrect`, которая принимает три аргумента:

1. строку
2. индекс, с которого начинать извлечение
3. длину извлекаемой подстроки

Функция возвращает `false`, если хотя бы одно из условий истинно:

* Отрицательная длина извлекаемой подстроки
* Отрицательный заданный индекс
* Заданный индекс выходит за границу всей строки
* Длина подстроки в сумме с заданным индексом выходит за границу всей строки

В ином случае функция возвращает `true`.

Не забывайте, что индексы начинаются с `0`, поэтому индекс последнего элемента — это «длина строки минус 1».

Пример вызова:

```php
<?php

$str = 'Sansa Stark';
isArgumentsForSubstrCorrect($str, -1, 3);  // false
isArgumentsForSubstrCorrect($str, 4, 100); // false
isArgumentsForSubstrCorrect($str, 10, 10); // false
isArgumentsForSubstrCorrect($str, 11, 1);  // false
isArgumentsForSubstrCorrect($str, 3, 3);   // true
isArgumentsForSubstrCorrect($str, 0, 5);   // true
```
