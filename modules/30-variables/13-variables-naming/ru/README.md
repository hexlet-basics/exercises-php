В этом уроке мы поговорим об именовании. Изучать эту тему мы начнем с примера. Посмотрим на такую программу:

```php
<?php

$x = 'Father!';
print_r($x);
print_r($x);
```

Она работает, но в ней странное имя переменной — `$x`. Компьютеру без разницы, как мы называем переменные, но вот программистам — нет. Мы гораздо реже пишем код, чем его читаем. Причем часто приходится читать не свой код, а написанный другими людьми. От качества и понятности имен переменных зависит половина успеха в анализе кода.

Лучше посидеть и придумать название, которое хорошо описывает суть переменной, чем назвать ее как попало и в будущем переделывать. Постарайтесь давать им такие имена, чтобы они были максимально понятны без контекста и без изучения окружающего кода.

Среди разработчиков есть шутка: «самое сложное в программировании — названия переменных и инвалидация кеша». Придумывать названия и правда сложно. Например, какое бы название вы бы выбрали для переменной, в которой хранится количество неоплаченных заказов от клиентов, имеющих задолженность в предыдущем квартале?

Чтобы глубже погрузиться в тему, попробуйте выполнить дополнительное задание — придумайте название для переменной, в которой хранится «количество братьев и сестер короля». Запишите его в блокноте или отправьте себе на почту. Не указывайте там ничего, кроме названия переменной. А через несколько уроков мы вернемся к этой теме.