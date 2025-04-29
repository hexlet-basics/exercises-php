Program data is stored in computer memory (either RAM or permanent memory) as a sequence of zeros and ones. At this level, there's no difference between strings, numbers or boolean values, everything looks the same in memory. The difference appears only as a consequence of interpretation. The program knows that there's string a string stored inside a variable, so it takes the zeros and ones and passes them through a code table that specifies which number corresponds to which letter. As a result, the programmer sees a string.

In the beginning, there was exactly one encoding, [ASCII](https://en.wikipedia.org/wiki/ASCII), based on the English alphabet. In this encoding, one character corresponds to 7 bits, and there are 128 characters in total. 95 of them are printable characters, they include letters of the alphabet in upper and lower case, numbers and punctuation marks, as well as 33 non-printable characters or so-called control codes. Most of them aren't relevant now, but some, such as the line feed `\n` are still in use. For example,  the character `i` in lower case corresponds to the binary number `1101001`, which corresponds to the number `105` in decimal notation.

At first, all was well, but with the spread of computers there was a need for other alphabets. Each country has solved this problem by creating their own encodings, most of which are compatible with ASCII. I.e., the first 128 numbers fully corresponded with ASCII, but the remaining 128 were filled with the local alphabet. 128 + 128 = 256, which is 2 to the 8th power. These encodings were one-byte encodings (one byte was required to store one character). Suddenly the gates of hell opened. Attempting to open a file in an editor with a different encoding resulted in nonsense: __Øèðîêàÿ ýëåêòðèôèêàöèÿ þæíûõ ãóáåðíèé äàñò ìîùíûé òîë÷îê ïîäú¸ìó ñåëüñêîãî õîçÿéñòâà__. This arose because the same code in different encodings corresponds to completely different characters, except for the first 128. Therefore, the text using English letters was always readable, but otherwise it was up in the air. The situation was exacerbated by the fact that even within the same alphabet a lot of different encodings were created, for example: Windows-1252, KOI8-R, CP 866, ISO 8859-5.

At the time, in programming languages, all functions for working with strings were created on the basis that one character was one byte. At least this property was common to all encodings.

Different encodings have caused constant problems with the interaction between people and programs. This problem became particularly acute with the development of the Internet. This situation couldn't continue indefinitely, and eventually the Unicode standard was created. It currently contains over 100,000 characters and includes all existing (and even dead) languages. The Unicode standard is not an encoding and says nothing about how characters should be stored in memory, it only defines the relationship between a character and a number. The specific method of encoding Unicode is determined by the corresponding encodings, including UTF-8, UTF-16 and some others. In these encodings, a single byte isn't enough to store one character, they use more. UTF-8 is trickier; it uses one byte for English characters (and some others) and two bytes for other alphabets.

After years of popularizing Unicode, a miracle has happened, and now the vast majority of software uses UTF-8. This process wasn't without pain, and it affected programming languages in different ways. For example, in PHP, standard functions don't support multibyte encodings.

```php
<?php

echo strlen('Hello!'); // => 13
```


Languages are divided into two camps. Some have built support into existing functions, and the switch to UTF-8 had no effect on programming. Among them are Java, Ruby, and JavaScript. But PHP went its own special way. In order to work with multibyte encodings, a separate [extension for working with multibyte strings](https://www.php.net/manual/en/book.mbstring.php), was added to the language, which for the most part adds many functions for working with strings, with the only difference that each function of them has the prefix `mb_` (multibyte).

```php
<?php

echo mb_strlen('Hello!'); // => 7
```


But there's no decent alternative to taking a specific character in the string by index. This task should be performed using `mb_substr()`.

```php
<?php

$str = 'Привет';
$symbol = mb_substr($str, 2, 1); // и
```
