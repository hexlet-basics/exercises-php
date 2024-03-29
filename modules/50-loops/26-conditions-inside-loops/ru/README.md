
Тело цикла, как и тело функции — это место выполнения инструкций. Значит, мы можем использовать внутри него всё изученное ранее, например — условные конструкции.

Представьте себе функцию, которая считает сколько раз входит буква в предложение. Пример её работы:

```php
<?php

countChars('Fear cuts deeper than swords.', 'e'); // 4
// Если вы ничего не нашли, то результат — 0 совпадений
countChars('Sansa', 'y'); // 0
```

Перед тем как посмотреть её содержимое, попробуйте ответить на вопросы:

* Является ли эта операция агрегацией?
* Какой будет проверка на вхождение символа?

```php
<?php

function countChars($str, $char)
{
    $i = 0;
    $count = 0;
    while ($i < strlen($str)) {
        if ($str[$i] === $char) {
            // Считаем только подходящие символы
            $count = $count + 1;
        }
        // Счетчик увеличивается в любом случае
        $i = $i + 1;
    }

    return $count;
}
```

Эта задача является агрегирующей. Несмотря на то, что она считает не все символы, для подсчёта самой суммы всё равно приходится анализировать каждый символ.

Ключевое отличие этого цикла от рассмотренных в наличии условия внутри тела. Переменная `$count` увеличивается только в том случае, когда текущий рассматриваемый символ совпадает с ожидаемым.

В остальном — это типичная агрегатная функция, которая возвращает количество нужных символов вызываемому коду.
