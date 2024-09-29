
На самом глубоком уровне компьютер оперирует исключительно цифрами `0` и `1`. Это так называемый [двоичный код](https://ru.wikipedia.org/wiki/Двоичный_код), а единички и нули называются битами, от "binary digit" — «двоичная цифра».

Обычные, привычные нам числа в десятичной системе счисления, закодированы с помощью двоичных чисел:

- 0 ← 0
- 1 ← 1
- 2 ← 10
- 3 ← 11
- 4 ← 100
- 5 ← 101

Но как быть с текстом? Компьютер на самом деле не знает ничего о буквах, знаках пунктуации и прочих текстовых символах. Все эти символы также закодированы числами.

Можно взять английский алфавит и дать каждой букве число, начиная с единицы по порядку:

- a ← 1
- b ← 2
- c ← 3
- d ← 4
- ...
- z ← 26

В этом заключается суть **кодировок**.

Далее можно научить компьютер понимать эту таблицу и переводить текст в числа и наоборот — числа в текст:


- `hello` → `8` `5` `12` `12` `15`
- `7` `15` `15` `4` → `good`

Подобные таблицы, в которых сопоставляются буквы и числа, называются кодировками. Кроме букв алфавита, в таблицы кодировок входят знаки препинания и другие полезные символы. Вы наверняка сталкивались с кодировками, например, [ASCII](https://ru.wikipedia.org/wiki/ASCII) или [UTF-8](https://ru.wikipedia.org/wiki/UTF-8).

Разные кодировки содержат разное количество символов. Изначально небольших таблиц вроде ASCII было достаточно для большинства задач. Но в ней есть только латинские буквы, несколько простых символов вроде `%` и `?`, и специальные управляющие символы типа перевода строки.

С распространением компьютеров разным странам понадобились свои, более широкие таблицы. В том числе для кириллических букв, восточных иероглифов, арабской вязи, дополнительных математических и типографских символов, а впоследствии даже для эмодзи-смайликов.

Сегодня в большинстве случаев используется один из вариантов [юникода](https://ru.wikipedia.org/wiki/Юникод) – *utf-8*. Он включает в себя знаки почти всех письменных языков мира. Благодаря этому письмо, сформированное человеком в Китае на китайском, без проблем можно открыть и увидеть в первозданном виде на компьютере в Финляндии (поймет он его или нет, это уже другой вопрос).

С кодированием текста и кодировками программисты встречаются в своей жизни регулярно. Поддержка юникода у разных языков программирования выполнена на разном уровне. Кроме того, кодировки нужно явно указывать при работе и с базами данных, и с файлами.