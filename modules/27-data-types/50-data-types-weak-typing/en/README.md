
We know two different data types: numbers and strings. We could, for example, add numbers, because the addition operation is an operation for the "number" type.

But what if you add a number to a string?

```php
print_r(1 + '7'); // => 8
```

Although though `'7'` is a string and not a number, the PHP interpreter gave the answer `8`, as if we were adding two numbers. When PHP sees a type mismatch, it tries to convert the information itself. In this case, it converted the string `'7'` to the number `7`, and then happily added `1` and `7`.

Not all languages can do this. PHP is a language with **weak typing**. It recognizes different data types (numbers, strings, etc.), but doesn't use them too strictly, trying to convert data when it seems reasonable.

In **strongly typed** languages, adding a number to a string won't work.

PHP was created for the internet, and on the internet, all information is strings. Even when you type a phone number or a birth year on a website, that information goes to the server as a string, not as a number. So the designers of the language decided that automatic type conversion was the best option.

This tacit automatic type conversion is indeed convenient. But in practice, this feature causes a lot of errors, which are difficult to find. The code may work or fail, depending on whether you're lucky enough for the automatic conversion to have been done correctly A programmer may not notice this immediately.

You'll encounter these cases more than once in future tasks. You'll often ask, "Why doesn't my code work the way I expect?".

Weak typing is a red thread running through all PHP development.
