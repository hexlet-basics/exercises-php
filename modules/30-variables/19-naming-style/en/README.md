`$greeting` serves as an example of a simple and clear variable name. But often names like `$name`, `$email`, or `$price` are not enough. For example, you may need to describe a user's name, the total number of orders, or the maximum message length. Such names already consist of several words. What will a variable name look like in this case?

Different programming languages use different naming styles. This determines what a variable name made of several words will look like. For example, here is how you can write a variable that stores the maximum message length:

1. `$maxmessagelength`
1. `$maxMessageLength`
1. `$max-message-length`
1. `$max_message_length`

## Main styles

Here are three popular approaches to writing compound names:

- kebab-case: words are separated by a hyphen: `max-message-length`.

  Does not work in PHP, since the hyphen (-) is interpreted as the subtraction operator.

- snake_case: words are separated by an underscore: `$max_message_length`.

  This is the standard, for example, in Python. In PHP, many built-in functions are named this way, but this style is not used for variables.

- CamelCase: each word starts with a capital letter, without separators: `MaxMessageLength`. It has a variation called lowerCamelCase, in which the first word is written in lowercase: `$maxMessageLength`.

  It is exactly lowerCamelCase that is the standard for variables in PHP.

## How to do it right in PHP

```php
<?php

$userName = "Daenerys";
$maxLength = 280;
$totalOrdersCount = 17;
```

- The first word is written in lowercase
- Each following word starts with a capital letter
- Separators between words are not used

Each language has its own rules. PHP has a generally accepted [coding standard](https://www.php-fig.org/psr/psr-1/) that describes many such aspects. You don't have to remember all of its rules: the code is automatically checked by linters, which we already got acquainted with earlier.

## How not to do it

You should not include the data type in a variable name. Such names are harder to read and quickly become outdated. For example, `$userNameString` or `$messagesNumber` describe not the meaning of the variable, but its technical implementation.

A name should answer the question "what is stored?", not "what type is it?". That's why it's better to write `$userName` instead of `$userNameString`, and `$messagesCount` instead of `$messagesNumber`.
