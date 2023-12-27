
You can use a special syntax called heredoc to define strings in PHP. After the `<<<` operator, you need to specify an identifier with whatever name you like then a line feed, followed by the string itself. The same identifier is added at the end, closing the insertion. This method is convenient for specifying long strings, containing both line feeds and multi-type quotes.

```php
<?php

$str = <<<EOT
Example of a string,
covering several lines,
using heredoc syntax.
Here we don't need to escape either single ', or double " quotes.
EOT;
print_r($str);
```

<pre class='hexlet-basics-output'>
Example of a string,
covering several lines,
using heredoc syntax.
Here we don't need to escape either single ', or double " quotes.
</pre>

Note that the trailing identifier (in this case `EOT`) must not have spaces, otherwise PHP will tell you off for having a syntax error.
