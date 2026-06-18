En el código se han definido datos sobre un viaje en automóvil: la distancia, el consumo de combustible, el precio del combustible y la cantidad de pasajeros.

Calcula y muestra en pantalla tres valores:

1. El volumen de combustible en litros necesario para el viaje. Redondéalo a un decimal.
2. El costo total del viaje en rublos. Redondéalo a dos decimales.
3. El costo del viaje para cada pasajero en rublos. Redondéalo al número entero, llamando a `round()` sin el segundo argumento.

Cada valor se muestra en una línea aparte.

```text
distance ──────┐
               ├──→ fuel ──────┐
fuelConsumption ───┘           ├──→ tripCost ──────┐
                               │                   ├──→ perPerson
fuelPrice ─────────────────────┘                   │
                                                   │
passengers ────────────────────────────────────────┘
```
