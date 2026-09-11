You received some code from a colleague — it works correctly, but it violates the PSR-12 formatting standard. Fix the spaces around the operators without changing the logic:

<!-- lint-code-blocks: skip — неаккуратный код это предмет урока, форматтер привёл бы его к стилю -->

```text
<?php

print_r(    (5  **2)-(3*  7));
```

The result should remain `4`.
