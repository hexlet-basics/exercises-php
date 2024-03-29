
Умение читать документацию — один из важнейших навыков любого разработчика.

_Несмотря на наличие перевода, я рекомендую учиться пользоваться англоязычной документацией. Библиотеки, которые сотнями используются в реальных проектах, почти всегда имеют только англоязычное описание._

Основной раздел, к которому программисты возвращаются постоянно — справочник функций языка. Во-первых, этих функций много и невозможно запомнить всё. Во-вторых, в PHP особенно остро стоит проблема несогласованности параметров и возвращаемых значений функций. Поэтому постоянно приходится вспоминать их порядок.

Для описания функций используется собственная нотация (свой собственный синтаксис). Она немного напоминает сам PHP, но всё же отличается от него, другими словами — это не код на PHP, а только лишь описание сигнатуры функции. Рассмотрим функцию `round()`, которая округляет число:

```
round(int|float $num, int $precision = 0, int $mode = PHP_ROUND_HALF_UP): float
```

Задача этого формата — наглядно показать типы, количество и значения по умолчанию входящих параметров, а также тип выходного параметра. Последний всегда стоит в самой правой позиции, прямо после знака двоеточия. В данном случае тип возвращаемого значения `float`.

Перечисление параметров идет через запятую в скобках после названия функции. Перед каждым именем параметра стоит его тип. Например, тип параметра `$num` — это `float`. Значение по умолчанию задается как присваивание, например `$precision` по умолчанию равно нулю.

Параметры со значением по умолчанию — это необязательные параметры функции, запятые отделяют их друг от друга. Для функции выше это `$precision` и `$mode`. `$mode`, в свою очередь, по умолчанию равен значению константы `PHP_ROUND_HALF_UP`. Если какой-либо параметр равен значению константы, значит в документации этой функции есть перечисление и описание всех возможных констант, которые могут быть использованы как значение этого параметра.

Основываясь на сказанном выше, мы можем вызвать функцию следующим образом:

```php
<?php

round(5.3); // 5.0
round(8.333, 1); // 8.3
round(8.333, 2, PHP_ROUND_HALF_UP); // 8.33
```
