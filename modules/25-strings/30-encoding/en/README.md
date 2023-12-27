
At the deepest level, the computer operates exclusively with the numbers `0` and `1`. This is called [binary code](https://en.wikipedia.org/wiki/Binary_code), the ones and zeros are called bits, which is derived from the term "binary digit".

The numbers that we usually use in the decimal system are encoded using binary numbers:

- 0 ← 0
- 1 ← 1
- 2 ← 10
- 3 ← 11
- 4 ← 100
- 5 ← 101

But does it deal with text? The computer isn't aware of letters, punctuation, or other text characters. All these characters are encoded by numbers too.

We can take the English alphabet and give each letter a number, starting with one:

- a ← 1
- b ← 2
- c ← 3
- d ← 4
- ...
- z ← 26

This is the essence of **coding**.

Then you can teach the computer to understand this table and translate text into numbers and vice versa:


- `hello` → `8` `5` `12` `12` `15`
- `7` `15` `15` `4` → `good`

These tables that match letters and numbers are called encodings. Besides letters of the alphabet, encodings include punctuation marks and other useful characters. You've probably encountered encodings such as [ASCII](https://en.wikipedia.org/wiki/ASCII) or [UTF-8](https://en.wikipedia.org/wiki/UTF-8).

Different encodings contain different numbers of characters. At first, small tables like ASCII were enough for programmers. But it has only Latin letters, a few simple characters like `%` and `?`, and special control characters like line feed.

As computers became more widespread, different countries needed their own, broader tables. This included Cyrillic letters, Chinese and Japanese characters, Arabic script, additional mathematical and typographic symbols, and later on emojis.

Today, in most cases, one of the [Unicode](https://en.wikipedia.org/wiki/Unicode) – *utf-8*. It includes characters from almost all the written languages found in the world. Thanks to this, a letter formed by a person in China in Chinese can easily be opened and seen in its original form on a computer in Finland (whether they'll understand it or not is another question).

Programmers have to deal with encodings regularly. Unicode support in different programming languages is carried out on a different level. Moreover, encodings must be declared when working with databases and files.
