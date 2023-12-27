
One of the main date functions in PHP is [date()](https://www.php.net/manual/en/function.date.php). It converts the timestamp to a human-readable format. The first parameter you need to pass to this function is the date format, which is arranged similarly to the formats for [sprintf()](https://www.php.net/manual/en/function.sprintf.php).

```php
<?php

// Y means year
date('Y'); // 2018
```

`date()` uses the current time by default. But if necessary, you can pass it a specific timestamp.

```php
<?php

date('M', 123123123); // Nov
```

There are dozens of different formatting options in the `date()` function. They're all listed in detail on the documentation page. It's not at all necessary to memorize them all, but it's useful to understand the general principle of how it should work. All options can be combined with each other in any variation.

```php
<?php

date('l jS \of F Y h:i:s A'); // Thursday 26th of July 2018 10:58:55 AM
```
