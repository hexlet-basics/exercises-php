Посмотрите на функцию ниже. Она определяет тип предложения по последнему символу: если предложение заканчивается вопросительным знаком, функция вернет `Sentence is question`, иначе — `Sentence is normal`:

```php
<?php

function getTypeOfSentence(string $sentence): string
{
    $lastChar = $sentence[-1];

    if ($lastChar === '?') {
        $sentenceType = 'question';
    } else {
        $sentenceType = 'normal';
    }

    return "Sentence is {$sentenceType}";
}

print_r(getTypeOfSentence('Hodor') . "\n");  // => Sentence is normal
print_r(getTypeOfSentence('Hodor?') . "\n"); // => Sentence is question
```

Мы добавили `else` и новый блок в фигурных скобках. Он выполнится, если условие в `if` окажется ложным. Еще в блок `else` можно вкладывать другие условия `if`. Else переводится «иначе», «в ином случае».

```text
      ┌───────────┐
      │ условие?  │
      └─────┬─────┘
 true │           │ false
      ↓           ↓
┌──────────┐ ┌──────────┐
│ тело if  │ │ тело else│
└──────────┘ └──────────┘
```

Пример вложенных блоков:

```php
<?php

$number = 10;

if ($number > 10) {
    print_r('Number is greater than 10');
} else {
    if ($number === 10) {
        print_r('Number is exactly 10');
    } else {
        print_r('Number is less than 10');
    }
}
```

Оформить конструкцию `if-else` можно двумя способами. С помощью отрицания `!==` можно изменить порядок блоков:

```php
<?php

function getTypeOfSentence(string $sentence): string
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

Чтобы конструкцию было легче оформлять, старайтесь выбирать проверку без отрицаний и подстраивайте содержимое блоков под нее.

На примере использования `else` видно, как важно следить за тем, к какому `if` относится каждый блок:

```php
<?php

// Неправильно
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Число положительное\n");
    }

    if ($number > 10) {
        print_r("Число больше 10\n");
    } else {
        print_r("Число не положительное\n");
    }
}

checkNumber(3);
// => Число положительное
// => Число не положительное
```

В примере выше мы забыли вложить второй `if` внутрь первого, поэтому `else` теперь относится ко второму `if`. Программа сообщает, что число одновременно положительное и не положительное.

```php
<?php

// Правильно
function checkNumber(int $number): void
{
    if ($number > 0) {
        print_r("Число положительное\n");

        if ($number > 10) {
            print_r("Число больше 10\n");
        }
    } else {
        print_r("Число не положительное\n");
    }
}

checkNumber(3);
// => Число положительное
```

Теперь второй `if` вложен в первый, а `else` на одном уровне с первым и противопоставляется ему.
