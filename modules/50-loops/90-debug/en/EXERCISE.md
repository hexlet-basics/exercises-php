
Implement a function `compress()` that compresses a string using RLE (Run-Length Encoding).

The algorithm: if a character repeats several times in a row, it is replaced with the character and the number of repetitions. Single characters are written without a digit.

Examples:

```php
<?php

compress('aaabcccc'); // 'a3bc4'
compress('abcd');     // 'abcd'
compress('aabbaa');   // 'a2b2a2'
compress('');         // ''
```

This algorithm is used in real data compression formats — for example, in old fax protocols and BMP files.

### Algorithm

1. Walk along the string, counting the number of identical characters in a row
2. As soon as the character changes — write down the previous character and the counter (if greater than 1)
3. Do not forget to handle the last group after the loop ends
