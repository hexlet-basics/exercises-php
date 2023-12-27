
Have you ever wondered how time is stored in a computer? Turning the computer on and off has no effect on the clock. We can there conclude that the clock in the computer works by itself.

This is very much the case. The computer's main clock is a hardware clock, it lives its own life and has its own battery. When you turn on the computer, it reads the data from this clock, writes it to its memory and starts counting the time itself. This clock is called a system clock. Any change in the system clock will also affect the hardware clock.

In most operating systems (Linux, Unix, MacOS) the system time is presented in Unix time format. It's defined as the number of seconds elapsed since midnight (00:00:00 UTC) on January 1, 1970 (Thursday). The time since then is called the "Unix Epoch". Unix time is represented by an integer number which is incremented with each passing second without needing calculations to determine the year, month, day, hour or minute, which is easy for people to understand.

A specific date in Unix time format is called a timestamp. For example, PHP uses the `time()` function to get the current timestamp.

```php
<?php

time(); // 1532435204
```
