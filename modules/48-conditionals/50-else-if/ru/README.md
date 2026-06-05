Функция `getTypeOfSentence()` различает только вопросительные и обычные предложения. Добавим в нее поддержку восклицательных предложений:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    }

    if ($lastChar === '!') {
        $sentenceType = 'exclamation';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is normal
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

Мы добавили проверку восклицательных предложений (_exclamation_ переводится «восклицание»). Технически эта функция работает, но вопросительные предложения трактует неверно. Еще в ней есть проблемы с точки зрения семантики. Наличие восклицательного знака проверяется в любом случае, даже если уже обнаружился вопросительный знак. Ветка `else` описана для второго условия, но не для первого. Поэтому вопросительное предложение становится `normal`.

Чтобы исправить ситуацию, воспользуемся еще одной возможностью условной конструкции:

```php
<?php

function getTypeOfSentence(string $sentence): string
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

print_r(getTypeOfSentence('Who?') . "\n"); // => Sentence is question
print_r(getTypeOfSentence('No') . "\n");   // => Sentence is normal
print_r(getTypeOfSentence('No!') . "\n");  // => Sentence is exclamation
```

Теперь все условия выстроились в единую конструкцию. Ключевое слово `elseif` означает «если не выполнено предыдущее условие, но выполнено текущее».

```text
  ┌─────────────────┐
  │ условие 1?      │
  └────┬────────┬───┘
 true │        │ false
       ↓        ↓
┌──────────┐  ┌─────────────────┐
│ тело if  │  │ условие 2?      │
└──────────┘  └────┬────────┬───┘
              true │        │ false
                    ↓        ↓
          ┌────────────┐ ┌──────────┐
          │тело elseif │ │ тело else│
          └────────────┘ └──────────┘
```

Логика функции устроена так. Если последний символ `?`, возвращается `'question'`. Если последний символ `!`, возвращается `'exclamation'`. Во всех остальных случаях возвращается `'normal'`.

Выполнится только один из блоков кода, который относится ко всей конструкции `if`.
