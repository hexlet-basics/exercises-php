
In addition to the usual constants, PHP has a separate group of **magic constants**. The differences are as follows:

* You can't define magic constants yourself, you can only use existing ones.
* Magic constants begin and end with `__` (two underscores).
* The magic is that the constants have the same value only within a certain part of the program.

This last point may seem strange. What kind of constants are they if their value changes? To put it bluntly, they're not very constant, but their changes are clearly regulated and in practice don't cause problems. Such constants include, for example, the following:

* `__LINE__` — contains the current line of the file it's used in
* `__FILE__` — path to the current file
* `__DIR__` — the path to the directory where the current file is located
