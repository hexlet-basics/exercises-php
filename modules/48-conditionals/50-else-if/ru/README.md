Функция `getTypeOfSentence()` различает только вопросительные и обычные предложения. Давайте попробуем добавить поддержку восклицательных предложений:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    return "Sentence is {$sentenceType}";
}

getTypeOfSentence('Who?'); // 'Sentence is question'
getTypeOfSentence('No');   // 'Sentence is normal'
getTypeOfSentence('No!');  // 'Sentence is exclamation'
```

Мы добавили еще одну проверку (_exclamation_ переводится «восклицание»). Технически функция работает, но с точки зрения семантики есть проблемы:

* Проверка на наличие вопросительного знака происходит в любом случае, даже если уже был обнаружен восклицательный знак
* Ветка `else` описана именно для первого условия, но не для второго

Правильнее будет воспользоваться еще одной возможностью условной конструкции:

```php
<?php

function getTypeOfSentence($sentence)
{
  $lastChar = $sentence[-1];

  if ($lastChar === '?') {
      $sentenceType = 'question';
  } elseif ($lastChar === '!') {
      $sentenceType = 'exclamation';
  } else {
      $sentenceType = 'normal';
  }

  return "Sentence is {$sentenceType}";
}
```

Теперь все условия выстроены в единую конструкцию.

Конструкция `elseif` — это «если не выполнено предыдущее условие, но выполнено текущее». Получается такая схема:

* Если последний символ `?`, то `'question'`
* Иначе, если последний символ `!`, то `'exclamation'`
* Иначе `'normal'`

Выполнится только один из блоков кода, относящихся ко всей конструкции `if`.
