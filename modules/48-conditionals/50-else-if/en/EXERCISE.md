
The digital map of Westeros that Sam has made shows Stark allies in green, enemies in red, and neutral families in gray.

Write a function called `whoIsThisHouseToStarks()` for Sam that takes the family name as input and returns one of three values: `'friend'`, `'enemy'`, `'neutral'`.

Rules:

  * Friends (`'friend'`): 'Karstark', 'Tully'
  * Enemies (`'enemy'`): 'Lannister', 'Frey'
  * Any other families are considered neutral

Call examples:

```php
<?php

whoIsThisHouseToStarks('Karstark'); // 'friend'
whoIsThisHouseToStarks('Frey');     // 'enemy'
whoIsThisHouseToStarks('Joar');     // 'neutral'
whoIsThisHouseToStarks('Ivanov');   // 'neutral'
```
