Вы когда-нибудь задумывались о том, как хранится в компьютере время? В этом уроке мы обсудим, как работают время и дата и где они хранятся.

## Время

Как вы знаете, включение и выключение компьютера никак не влияет на часы. Можно сделать вывод, что часы в компьютере работают сами по себе.

Это действительно так. Основные часы компьютера — **аппаратные**. Они живут самостоятельной жизнью и имеют свою собственную батарею. При включении компьютер считывает данные этих часов, записывает к себе в память и начинает самостоятельно отсчитывать время. Эти часы называются **системными**. Любое изменение системных часов влияет и на аппаратные.

В Linux, Unix, MacOS и большинстве других операционных систем системное время представляется в формате _Unix Time_. Оно определяется как количество секунд, прошедших с этого момента:

> 00:00:00 UTC 1 января 1970 года (четверг)

Время с этого момента называют «эрой Unix» (_Unix Epoch_). Unix-время представлено целым числом, которое увеличивается с каждой прошедшей секундой без необходимости вычислений для определения года, месяца, дня, часа или минуты.

Конкретная дата в формате Unix Time называется **timestamp** — временной штамп. Например, для получения текущего _timestamp_ в PHP используется функция `time()`:

```php
<?php

time(); // 1532435204
```