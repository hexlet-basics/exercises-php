Мы могли складывать числа, потому что операция сложения — это операция для типа «числа». А если применить эту операцию к числу и строке:

```php
print_r(1 + '7'); // => 8
```

`'7'` — это строка, а не число, при этом интерпретатор PHP выдал ответ `8`, как если бы мы складывали два числа. Когда PHP видит несоответствие типов, он сам пытается преобразовать информацию. В данном случае он преобразовал строку `'7'` в число `7`, а потом сложил `1` и `7`.

Не все языки так делают. PHP — это язык со **слабой типизацией**. Он знает о существовании разных типов, но относится к их использованию не строго. Он пытается преобразовывать информацию, когда это кажется разумным.

В языках со **строгой типизацией** сложить число со строкой не получится.

PHP был создан для интернета, а в интернете вся информация — это строки. Даже когда мы вводим на сайте номер телефона или год рождения, на сервер эта информация поступает не как числа, а как строки. Поэтому авторы языка решили, что автоматически преобразовывать типы — правильно и удобно.

Такое автоматическое неявное преобразование типов с одной стороны и правда удобно. Но на практике это свойство языка создает множество ошибок и проблем, которые трудно найти. Код может иногда работать, а иногда не работать. Это зависит от того, «повезло» ли в конкретном случае с автоматическим преобразованием. Программист это заметит не сразу.

В дальнейших заданиях мы будем встречаться с таким поведением не раз. Часто будет возникать вопрос «почему мой код работает не так, как я ожидаю?».