Представим такую задачу: на сайте у пользователей могут быть имена и псевдонимы. Если имя есть, то нужно обращаться к человеку по имени. Если имени нет — обращаемся по псевдониму. Попробуем собрать строку с приветствием человека по этим требованиям:

```php
<?php

function generateGreeting($name, $nickname)
{
    if ($name) {
        return "Hello, {$name}!";
    } else {
        return "Hello, {$nickname}!";
    }
}

generateGreeting('Bob', 'CoolBob86'); // 'Hello, Bob!'
generateGreeting('', 'CoolBob86');    // 'Hello, CoolBob86!'
```

Мы воспользовались тем фактом, что PHP преобразовывает типы. В коде `if ($name)` PHP превратит `$name` в тип `bool`. Если была пустая строка, то получится `false`. В ином случае получится `true`.

С тернарным оператором можно получить более короткую запись:

```php
<?php

function generateGreeting($name, $nickname)
{
    return $name ? "Hello, {$name}!" : "Hello, {$nickname}!";
}
```

Это частый случай — мы оперируем значениями `bool` и получаем:

* Первое значение, если `true`
* Второе значение в ином случае

В PHP для таких случаев есть специальный оператор:

```php
<?php

function generateGreeting($name, $nickname)
{
    $user = $name ?: $nickname;
    return "Hello, {$user}!";
}
```

Оператор `?:` — бинарный оператор, который возвращает первый операнд если он истинен, и второй в ином случае. Еще его называют Elvis, потому что это слово
похоже на _else if_. А еще из-за визуального сходства с Элвисом Пресли:

![Элвис оператор](https://i.imgur.com/eoLgBHN.png)
