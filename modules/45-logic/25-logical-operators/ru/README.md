Мы уже умеем писать функции, которые проверяют одиночные условия. А в этом уроке научимся строить составные условия.

Предположим, что сайт при регистрации требует, чтобы пароль был длиннее восьми символов и содержал хотя бы одну заглавную букву. Попробуем написать два отдельных логических выражения и соединим их специальным оператором «И»:

> Пароль длиннее 8 символов **И** пароль содержит хотя бы одну заглавную букву

Вот функция, которая принимает пароль и говорит, соответствует ли он условиям (`true`) или не соответствует (`false`):

```php
<?php

function hasCapitalLetter(string $text): bool
{
    // Проверяет наличие хотя бы одной заглавной буквы в строке
}

function isCorrectPassword(string $password): bool
{
    $length = strlen($password);
    return $length > 8 && hasCapitalLetter($password);
}

var_dump(isCorrectPassword('Qwerty'));     // => bool(false)
var_dump(isCorrectPassword('Qwerty1234')); // => bool(true)
var_dump(isCorrectPassword('qwerty1234')); // => bool(false)
```

Оператор `&&` означает «И». В математической логике это называют конъюнкцией. Все выражение считается истинным, если истинен каждый **операнд**, то есть каждое из составных выражений. Иными словами, `&&` означает «и то, и другое». Приоритет этого оператора ниже, чем приоритет операторов сравнения. Поэтому выражение `hasCapitalLetter($password) && $length > 8` тоже правильно отрабатывает без скобок.

Кроме `&&` часто используется оператор `||`, обозначающий «ИЛИ» (дизъюнкция). Он означает «или то, или другое, или оба». Выражение `$a || $b` считается истинным, если хотя бы один из операндов истинен или когда оба операнда истинны. В другом случае выражение ложное.

```php
<?php

function hasDiscount(int $age, bool $isStudent): bool
{
    return $age < 18 || $isStudent;
}

var_dump(hasDiscount(15, false)); // => bool(true)  (младше 18)
var_dump(hasDiscount(25, true));  // => bool(true)  (студент)
var_dump(hasDiscount(15, true));  // => bool(true)  (оба условия)
var_dump(hasDiscount(25, false)); // => bool(false)
```

Операторы можно комбинировать в любом количестве и в любой последовательности. Если в коде одновременно встречаются `&&` и `||`, то приоритет лучше задавать скобками. Ниже пример расширенной функции, которая определяет корректность пароля:

```php
<?php

function hasCapitalLetter(string $text): bool
{
    // Проверяет наличие хотя бы одной заглавной буквы в строке
}

function hasSpecialChars(string $text): bool
{
    // Проверяет содержание специальных символов в строке
}

function isStrongPassword(string $password): bool
{
    $length = strlen($password);
    // Скобки задают приоритет. Понятно, что к чему относится.
    return ($length > 8 && hasCapitalLetter($password)) && hasSpecialChars($password);
}
```

Теперь представим, что мы хотим купить квартиру, которая удовлетворяет таким условиям: площадь от 100 квадратных метров и больше на любой улице **ИЛИ** площадь от 80 квадратных метров и больше, но на центральной улице `Main Street`.

Напишем функцию, которая проверит квартиру. Она принимает два аргумента: площадь (число) и название улицы (строку):

```php
<?php

function isGoodApartment(int $area, string $street): bool
{
    return $area >= 100 || ($area >= 80 && $street === 'Main Street');
}

var_dump(isGoodApartment(91, 'Queens Street'));  // => bool(false)
var_dump(isGoodApartment(78, 'Queens Street'));  // => bool(false)
var_dump(isGoodApartment(70, 'Main Street'));    // => bool(false)

var_dump(isGoodApartment(120, 'Queens Street')); // => bool(true)
var_dump(isGoodApartment(120, 'Main Street'));   // => bool(true)
var_dump(isGoodApartment(80, 'Main Street'));    // => bool(true)
```

Область математики, в которой изучаются логические операторы, называется булевой алгеброй. **Таблицы истинности** показывают, каким будет результат при применении каждого оператора.

#### И `&&`

| A     | B     | A `&&` B |
| ----- | ----- | -------- |
| true  | true  | **true** |
| true  | false | false    |
| false | true  | false    |
| false | false | false    |

#### ИЛИ `||`

| A     | B     | A `‖` B  |
| ----- | ----- | -------- |
| true  | true  | **true** |
| true  | false | **true** |
| false | true  | **true** |
| false | false | false    |
