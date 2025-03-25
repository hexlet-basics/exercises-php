Посмотрите на определение функции, которая возвращает модуль переданного числа:

```php
<?php

function abs($number)
{
    if ($number >= 0) {
        return $number;
    }

    return -$number;
}

abs(10);  // 10
abs(-10); // 10
```

Можно ли записать ее лаконичнее? Что-то вроде `return ОТВЕТ В ЗАВИСИМОСТИ ОТ УСЛОВИЯ`? Для этого справа от `return` должно быть выражение. Но есть проблема: `if` — это инструкция, а не выражение.

В PHP существует конструкция, которая по своему действию аналогична конструкции *if-else*, но при этом является выражением. Она называется **тернарный оператор**, и именно его мы изучим в этом уроке.

**Тернарный оператор** — единственный в своем роде оператор, требующий три операнда:

```php
<?php

function abs($number)
{
    return $number >= 0 ? $number : -$number;
}
```

Общий паттерн выглядит так:

```text
<predicate> ? <expression on true> : <expression on false>
```

![Тернарный оператор](assets/ternary-operator.png)

Давайте перепишем начальный вариант `getTypeOfSentence()` аналогично. Посмотрим, как было:

  ```php
  <?php

  function getTypeOfSentence($sentence)
  {
      $lastChar = substr($sentence, -1);

      if ($lastChar === '?') {
          return 'question';
      }

      return 'normal';
  }
  ```

  А теперь — как стало:

  ```php
  <?php

  function getTypeOfSentence($sentence)
  {
      $lastChar = substr($sentence, -1);

      return ($lastChar === '?') ? 'question' : 'normal';
  }

  getTypeOfSentence('Hodor');  // normal
  getTypeOfSentence('Hodor?'); // question
  ```

Вы уже могли догадаться, что тернарный оператор можно вкладывать в тернарный оператор. Это возможно, но лучше так не делать. Такой код тяжело читать и отлаживать, поэтому вложенные тернарные операторы считаются очень плохой практикой.
