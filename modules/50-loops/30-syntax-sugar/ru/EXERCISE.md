
Реализуйте функцию `filterString()`, принимающую на вход строку и символ, и возвращающую новую строку, в которой удален переданный символ во всех его позициях.

```php
<?php

$str = 'If I look back I am lost';
filterString($str, 'I'); // 'f  look back  am lost'
filterString($str, 'o'); // 'If I lk back I am lst'
```
