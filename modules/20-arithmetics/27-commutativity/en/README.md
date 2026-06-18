The phrase "changing the order of the addends doesn't change the sum" is familiar to everyone from school. This principle is called the commutative law and is one of the fundamental laws of arithmetic.

## What is commutativity

An operation is called commutative if the order of the operands doesn't affect the result: swapping the values gives you the same answer. An example of a commutative operation is addition.

```php
<?php

print_r(3 + 2); // => 5
print_r(2 + 3); // => 5
```

The same result confirms that the operation is commutative.

```text
2 + 3 = 5     3 + 2 = 5
└──────────┬─────────┘
      same result

2 - 3 = -1    3 - 2 = 1
└──────────┬─────────┘
    different result
```

## Non-commutative operations

But not all operations have this property. For example, subtraction is a non-commutative operation:

```php
<?php

print_r(2 - 3); // => -1
print_r(3 - 2); // => 1
```

Swapping the operands gives a different result.

## It's all the same in programming

Commutativity in programming works exactly the same way as in arithmetic. PHP strictly follows mathematical rules.

Other non-commutative operations:

- Division: _8 / 2 ≠ 2 / 8_
- Exponentiation: _2 **3 ≠ 3** 2_

Examples in code:

```php
<?php

// Division
print_r(8 / 2);  // 8 divided by 2 = 4

// Exponentiation
print_r(3 ** 2); // 3 squared = 9
```

Therefore:

- Always carefully check the order of operands, especially when working with unfamiliar operations;
- check commutativity experimentally instead of assuming it in advance.
