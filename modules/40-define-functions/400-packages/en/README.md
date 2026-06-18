As a program grows, not only the number of lines of code increases, but also the number of files. On top of that, you want to reuse convenient code across different projects instead of copying it from one to another.

In Python, modules are grouped using package directories. In the PHP ecosystem, the unit of reuse and distribution is a **package** (a Composer package). A package is a set of PHP files with functions and classes that is published and installed as a whole.

## Composer

Packages are managed by **Composer** — the PHP package manager. A project describes its dependencies in the `composer.json` file:

```json
{
    "name": "hexlet-basics/exercises-php",
    "require": {
        "php": "^8.4",
        "nesbot/carbon": "^3.0"
    }
}
```

The `composer install` command downloads all the listed packages and puts them into the `vendor/` directory. You can add a new package with the `composer require` command, for example:

```bash
composer require nesbot/carbon
```

## Package Name

A package name consists of two parts separated by a slash: `nesbot/carbon`. The first part is the vendor name, the second is the name of the package itself. This scheme resolves name conflicts: different developers can publish packages with the same name, and they won't interfere with each other — just as namespaces allow identical functions to coexist.

## Autoloading

Installed packages end up in the `vendor/` directory, but you don't need to include every file manually via `require`. Composer generates a special autoloader file, and a single line is enough to make all installed packages available:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

// After that you can use functions and classes
// from any installed package
```

This mechanism is called autoloading. This is exactly how real PHP projects are structured: at the start of the program the autoloader is included, and after that the code simply uses whatever it needs.

## The Packagist Registry

Packages are not written from scratch for every task — the main source is the [Packagist](https://packagist.org/) registry, where hundreds of thousands of ready-made packages are published: for working with dates, networking, tests, and almost any other task. For example, PHPUnit, which checks your solutions in this course, is also a Composer package.

The PHP standard library stands apart. Built-in functions such as `strlen()`, `round()`, or `rand()` don't need to be installed — they ship with the language itself and are available right away, without Composer and without autoloading.
