Кроме арифметических операций в математике есть операции сравнения, например, `5 > 4` или `3 < 1`. Они есть и в программировании. Допустим, когда мы заходим на сайт, введенные логин и пароль сравниваются с теми, какие есть в базе. Если они есть, нас пускают внутрь — аутентифицируют. В этом уроке разберем операции сравнения.

Языки программирования адаптировали все математические операции сравнения в неизменном виде, кроме операторов равенства и неравенства. В математике для этого используется обычное равно `=`, но в программировании такое встречается редко.

Во многих языках символ `=` используется, чтобы присвоить переменным значения. Поэтому в php сравнивают с помощью `==`.

Список операций сравнения:

* `<` — меньше
* `<=` — меньше или равно
* `>` — больше
* `>=` — больше или равно
* `==` — равно
* `!=` — не равно


Эти операции применяются не только к числам. Например, с помощью оператора равенства можно сравнить строки: `password == text` — это сравнение идентичности строк, которые записаны в разных переменных.

## Логический тип

Логическая операция типа `5 > 4` или `password == text` — это выражение. Его результат — специальное значение `True` («истина») или `False` («ложь»). Это новый для нас тип данных — `bool`:

```php
<?php

$result = 5 > 4;
print_r($result); // => true
print_r('one' !== 'one'); // => false
```

Он содержит всего лишь два этих значения. Наряду со строками (string) и целыми и рациональными числами, булев тип (bool) — это один из примитивных типов данных в PHP.

## Предикаты

Попробуем написать простую функцию, которая принимает на вход возраст ребенка и определяет, младенец ли он. Младенцами считаются дети до года.

Любая операция — это выражение, поэтому единственной строчкой функции пишем «вернуть то значение, которое получится в результате сравнения `age < 1`». В зависимости от того, какой аргумент пришел, сравнение будет истинным (`True`) или ложным (`False`), а `return` вернет этот результат:

```php
<?php

function isInfant($age)
{
    return $age < 1;
}

// Для вывода bool используем var_dump(), а не print_r()
var_dump(isInfant(3));   // => bool(false)
var_dump(isInfant(0.5)); // => bool(true)

```
