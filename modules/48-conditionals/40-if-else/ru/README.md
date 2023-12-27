Попробуем изменить функцию из предыдущего примера так, чтобы она возвращала не просто тип предложения, а целую строку *Sentence is normal* или *Sentence is question*:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

getTypeOfSentence('Hodor');  // Sentence is normal
getTypeOfSentence('Hodor?'); // Sentence is question
```

Мы добавили `else` и новый блок с фигурными скобками. Этот блок выполнится, только если условие в `if` — ложь.

Существует два способа оформления конструкции *if-else*. С помощью отрицания `!==` можно изменить порядок блоков:

```php
<?php

function getTypeOfSentence($sentence)
{
    $lastChar = $sentence[-1];

    if ($lastChar !== '?') {
        $sentenceType = 'normal';
    } else {
        $sentenceType = 'question';
    }

    return "Sentence is {$sentenceType}";
}
```

Какой способ предпочтительнее? Обычно людям проще мыслить прямолинейно, а не через отрицание. Старайтесь выбирать проверку без отрицаний и подстраивайте содержимое блоков под нее.
