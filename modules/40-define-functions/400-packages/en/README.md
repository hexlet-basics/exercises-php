In the PHP ecosystem, the unit of code reuse and distribution is a **package** (a Composer package). Packages are managed by **Composer** — the PHP package manager. A project describes its dependencies in the `composer.json` file:

```json
{
    "name": "hexlet-basics/exercises-php",
    "require": {
        "php": "^8.4",
        "nesbot/carbon": "^3.0"
    }
}
```

A package name consists of two parts separated by a slash: the vendor name and the package name itself, e.g. `nesbot/carbon`. The `composer install` command downloads the packages into the `vendor/` directory. A single line makes all of them available — this mechanism is called autoloading:

```php
<?php

require __DIR__ . '/vendor/autoload.php';
```

The main source of packages is the [Packagist](https://packagist.org/) registry with hundreds of thousands of ready-made packages. For example, PHPUnit, which checks your solutions in this course, is a Composer package too. Built-in functions like `strlen()` or `rand()` need no installation — they ship with the language itself.
