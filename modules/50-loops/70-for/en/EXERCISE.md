
Implement a function `normalizeFilename()` that prepares a file name for saving. The function takes a string and returns a new string where all spaces are replaced with the `_` character.

Example call:

```php
<?php

normalizeFilename('my photo.png');      // 'my_photo.png'
normalizeFilename('final report.pdf');  // 'final_report.pdf'
normalizeFilename('already_ready.txt'); // 'already_ready.txt'
```
