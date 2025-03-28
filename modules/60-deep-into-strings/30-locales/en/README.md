
Globalization manifests itself in many aspects, such as a unified system of measurements for time, dimensions, distances, temperatures, dates, and many other things. Of course, there are countries that fall out of the general flow, for example, the United States, is one of the few countries in which [imperial units](https://en.wikipedia.org/wiki/Imperial_and_US_customary_measurement_systems) are preserved. They use miles instead of kilometers, and pounds instead of kilograms. In many Eastern countries, the calendars are arranged differently, for example, the Buddhist calendar puts the year at 2563. But on the whole, everything is unified.

Despite this unification, each country has its own peculiarities in its way of recording, comparing, and other aspects. For example, in the U.S. it's customary to put the month first and then the day. Some countries use a period to output whole numbers, and some use a comma, e.g., `1,234`. These features aren't necessarily tied to an entire country. There can be many additional divisions within a single country. Each such set of features is called a locale, and the process of adapting to the features of a particular locale is called **localization**.

Localization is important in software. The user will always expect software (including websites) to work predictably. This includes localization. It's clear that solving this problem by yourself is no mean feat. Fortunately, you don't have to do that. Localization is usually embedded either in the language itself or in special libraries.

PHP uses the  [setlocale()](https://www.php.net/manual/en/function.setlocale.php) function to control the locale. This function configures the locale globally. I.e., calling it affects all subsequent functions that rely on localization.

```php
<?php

string setlocale ( int $category , string $locale [, string $... ] )
```

The first parameter of this function takes the name of the category (like a constant) that you want to apply the locale to, which is then passed in further parameters.

* LC_ALL — all of the following
* LC_COLLATE — string comparison functions (see `strcoll()`)
* LC_CTYPE — string conversion and classification functions, for example `strtoupper()`
* LC_MONETARY — for the `localeconv()` function
* LC_NUMERIC — specifies the decimal separator character (see also `localeconv()`)
* LC_TIME — date/time formatting with `strftime()`

An example of how the set locale affects how data is displayed.

```php
<?php

print_r(1.234); // => 1.234
setlocale(LC_NUMERIC, 'ru_RU');
print_r(1.234); // => 1,234
```

If you pass `0` as second argument instead of the locale: `setlocale(LC_ALL, 0)`, the function will return the currently set locale for the category.
