The code contains data about a car trip: the distance, fuel consumption, fuel price, and the number of passengers.

Calculate and print three values to the screen:

1. The fuel volume in liters needed for the trip. Round it to one decimal place.
2. The total cost of the trip in rubles. Round it to two decimal places.
3. The trip cost for each passenger in rubles. Round it to an integer by calling `round()` without the second argument.

Each value is printed on a separate line.

```text
distance ──────┐
               ├──→ fuel ──────┐
fuelConsumption ───┘           ├──→ tripCost ──────┐
                               │                   ├──→ perPerson
fuelPrice ─────────────────────┘                   │
                                                   │
passengers ────────────────────────────────────────┘
```
