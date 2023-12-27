
Let's try concatenating variables so that we can reinforce the previous topic a little. The syntax is still the same, we know how to concatenate (combine) two strings:

```php
<?php

$what = "Kings" . "road";
print_r($what); // => "Kingsroad"
```

… which means we can concatenate the string and the variable that the string has been written to:

```php
<?php

$first = "Kings";
$what = $first . "road";

print_r($what); // => "Kingsroad"
```

… and even concatenate two variables with strings in them:

```php
<?php

$first = "Kings";
$last = 'road';

$what = $first . $last;
print_r($what); // => "Kingsroad"
```
