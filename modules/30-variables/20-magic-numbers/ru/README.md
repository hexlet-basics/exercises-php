
Вспомним один из прошлых уроков:

```php
<?php

$eurosCount = 1000;
$dollarsCount = $eurosCount * 1.25; // 1250
$rublesCount = $dollarsCount * 60;  // 75000

print_r($rublesCount);
```

С точки зрения профессиональной разработки, такой код «пахнет». Так описывают код, который не соответствует так называемым лучшим практикам (best practices). И причина здесь вот в чём: уже сейчас, глядя на числа `60` и `1.25`, вы скорее всего задаетесь вопросом: «что это за числа?». А представьте, что будет через месяц! А как его поймет новый программист, не видевший код ранее? В нашем примере контекст восстанавливается благодаря грамотному именованию, но в реальной жизни код значительно сложнее, и поэтому догадаться до смысла чисел зачастую невозможно.

Этот «запах» вызывают магические числа (magic numbers). Числа, происхождение которых невозможно понять без глубокого знания происходящего внутри данного участка кода.

Выход из ситуации прост: достаточно создать переменные с правильными именами, как всё встанет на свои места.

```php
<?php

$dollarsPerEuro = 1.25;
$rublesPerDollar = 60;

$eurosCount = 1000;
$dollarsCount = $eurosCount * $dollarsPerEuro;   // 1250
$rublesCount = $dollarsCount * $rublesPerDollar; // 75000

print_r($rublesCount);
```

Обратите внимание на следующие детали:

* Именование lowerCamelCase.
* Две новые переменные отделены от последующих вычислений пустой строчкой. Эти переменные имеют смысл и без вычислений, поэтому такое отделение уместно, оно повышает читаемость.
* Получился хорошо именованный и структурированный код, но он длиннее прошлой версии. Так часто бывает, и это нормально, потому что код должен быть читабельным.
