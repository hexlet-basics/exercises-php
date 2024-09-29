Defining your own functions makes it much easier to write and maintain programs. Functions allow you to combine several complex operations into one. For example, sending an email on a website is a complex process that involves interacting with external systems over the Internet. Since you can define functions, you can hide all the complexity behind one simple function:

```php
<?php

// A hypothetical example
// The place where the function is taken from
namespace Some\Email\Package\send;

$email = 'support@hexlet.io';
$title = 'Help';
$body = 'I wrote a success story, how can I get a discount?';

// One little call and loads of logic inside
send($email, $title, $body);
```

A call like this contains a lot of logic. It connects to the mail server, generates a valid request based on the message header and body, then sends it, and then closes the connection.

Let's create our first function. Its job is to print out a greeting:

<pre class='hexlet-basics-output'>Hello, Hexlet!</pre>

```php
<?php

// Defining the functions
// The definition doesn't call or execute a function
// We're just declaring this function exists now
function showGreeting()
{
    $text = 'Hello, Hexlet!';
    print_r($text);

}

// Function call
showGreeting(); // => 'Hello, Hexlet!'
```

Unlike normal data, functions perform actions, so their names almost always have to be verbs: "build something", "draw something", "open something", etc.

Everything that is described in curly braces after the function name is called the body of the function. It can contain any code. Consider it a small independent program, a set of whatever statements are needed. The body is executed when the function is called. And each function call executes the body independently of other calls.

The body of the function can be empty:

```php
<?php

// Minimum function definition. This doesn't do anything
function noop() {};

noop(); // the call is there, but it's pointless
// This function can also be useful,
// but this refers to advanced topics
```

The notion of "creating a function" has many synonyms, such as "implement" or "define". All of them are encountered in everyday practice.
