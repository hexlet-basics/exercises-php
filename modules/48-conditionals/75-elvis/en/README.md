
Imagine the following problem: users can have names and pseudonyms on a given website. The name isn't necessary, but a user has one, this person should be addressed by their first name, and if not, you should address them by their pseudonym.

Let's try to assemble a string that greets users according to these requirements:

```php
<?php

function generateGreeting($name, $nickname)
{
    if ($name) {
        return "Hello, {$name}!";
    } else {
        return "Hello, {$nickname}!";
    }
}

generateGreeting('Bob', 'CoolBob86'); // 'Hello, Bob!'
generateGreeting('', 'CoolBob86');    // 'Hello, CoolBob86!'
```

We've taken advantage of the fact that PHP converts types. In the `if ($name)` code, PHP will turn `$name` into a `bool` type; if it's an empty string, it will return `false`, otherwise, it'll return `true`.

You can use a ternary operator to write it in an even shorter way:

```php
<?php

function generateGreeting($name, $nickname)
{
    return $name ? "Hello, {$name}!" : "Hello, {$nickname}!";
}
```

This is a common situation: we work with `bool` values and get the first value if it's  `true` and the second if it isn't.

In PHP, there's a special operator for such cases:

```php
<?php

function generateGreeting($name, $nickname)
{
    $user = $name ?: $nickname;
    return "Hello, {$user}!";
}
```

**`?:` is a binary operator that returns the first operand if it's true, and the second if it isn't.**

It's called Elvis because:

![Elvis operator](https://i.imgur.com/eoLgBHN.png)

Also, Elvis sounds a bit like "else if".
