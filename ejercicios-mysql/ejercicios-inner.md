# Ejercicios MySQL con INNER JOIN

## Base de Datos de Ejemplo

Vamos a trabajar con las siguientes tablas:

### Tabla `clientes`
| id_cliente | nombre       | ciudad        |
|------------|--------------|---------------|
| 1          | Juan Pérez   | Buenos Aires  |
| 2          | Ana Gómez    | Córdoba       |
| 3          | Luis Martínez| Rosario       |

### Tabla `pedidos`
| id_pedido | id_cliente | fecha       | total   |
|-----------|------------|-------------|---------|
| 101       | 1          | 2024-01-15  | 500.00  |
| 102       | 2          | 2024-02-10  | 300.00  |
| 103       | 1          | 2024-03-05  | 450.00  |
| 104       | 3          | 2024-03-18  | 700.00  |

---

## Ejercicio 1: Obtener los pedidos con los nombres de los clientes

Escribe una consulta para obtener una lista con los nombres de los clientes y los detalles de sus pedidos.

### Solución
```sql

```

### Resultado Esperado
| nombre         | id_pedido | fecha       | total   |
|----------------|-----------|-------------|---------|
| Juan Pérez     | 101       | 2024-01-15  | 500.00  |
| Ana Gómez      | 102       | 2024-02-10  | 300.00  |
| Juan Pérez     | 103       | 2024-03-05  | 450.00  |
| Luis Martínez  | 104       | 2024-03-18  | 700.00  |

---

## Ejercicio 2: Filtrar pedidos por total superior a 400

Escribe una consulta para obtener el nombre de los clientes y los detalles de los pedidos cuyo total sea mayor a 400.

### Solución
```sql

```

### Resultado Esperado
| nombre         | id_pedido | fecha       | total   |
|----------------|-----------|-------------|---------|
| Juan Pérez     | 101       | 2024-01-15  | 500.00  |
| Juan Pérez     | 103       | 2024-03-05  | 450.00  |
| Luis Martínez  | 104       | 2024-03-18  | 700.00  |

---

## Ejercicio 3: Contar pedidos por cliente

Escribe una consulta para obtener el número de pedidos realizados por cada cliente.

### Solución
```sql

```

### Resultado Esperado
| nombre         | cantidad_pedidos |
|----------------|------------------|
| Juan Pérez     | 2                |
| Ana Gómez      | 1                |
| Luis Martínez  | 1                |

---

## Ejercicio 4: Obtener el total gastado por cada cliente

Escribe una consulta para obtener el nombre de los clientes y el total acumulado de sus pedidos.

### Solución
```sql

```

### Resultado Esperado
| nombre         | total_gastado |
|----------------|---------------|
| Juan Pérez     | 950.00        |
| Ana Gómez      | 300.00        |
| Luis Martínez  | 700.00        |

---

## Ejercicio 5: Obtener pedidos realizados después de una fecha específica

Escribe una consulta para obtener los pedidos realizados después del 1 de marzo de 2024, incluyendo el nombre del cliente.

### Solución
```sql

```

### Resultado Esperado
| nombre         | id_pedido | fecha       | total   |
|----------------|-----------|-------------|---------|
| Juan Pérez     | 103       | 2024-03-05  | 450.00  |
| Luis Martínez  | 104       | 2024-03-18  | 700.00  |

---

## Ejercicio 6: Clientes sin pedidos

Escribe una consulta para listar los clientes que no tienen pedidos asociados.

### Solución
```sql

```

### Resultado Esperado
| nombre         |
|----------------|
| Ninguno        |

---

## Ejercicio 7: Detalles de pedidos con totales agrupados por ciudad

Escribe una consulta para obtener la ciudad, el total acumulado de pedidos y la cantidad de pedidos por ciudad.

### Solución
```sql

```

### Resultado Esperado
| ciudad         | cantidad_pedidos | total_gastado |
|----------------|------------------|---------------|
| Buenos Aires   | 2                | 950.00        |
| Córdoba        | 1                | 300.00        |
| Rosario        | 1                | 700.00        |

---

## Ejercicio 8: Obtener el pedido más reciente de cada cliente

Escribe una consulta para obtener el nombre de cada cliente y la fecha de su pedido más reciente.

### Solución
```sql

```

### Resultado Esperado
| nombre         | fecha_reciente |
|----------------|----------------|
| Juan Pérez     | 2024-03-05     |
| Ana Gómez      | 2024-02-10     |
| Luis Martínez  | 2024-03-18     |

---

## Ejercicio 9: Pedidos con clientes de ciudades específicas

Escribe una consulta para listar los detalles de los pedidos de clientes que viven en "Buenos Aires" o "Rosario".

### Solución
```sql

```

### Resultado Esperado
| nombre         | id_pedido | fecha       | total   |
|----------------|-----------|-------------|---------|
| Juan Pérez     | 101       | 2024-01-15  | 500.00  |
| Juan Pérez     | 103       | 2024-03-05  | 450.00  |
| Luis Martínez  | 104       | 2024-03-18  | 700.00  |

---

## Ejercicio 10: Promedio del total de pedidos por cliente

Escribe una consulta para obtener el nombre de los clientes y el promedio de los totales de sus pedidos.

### Solución
```sql

```

### Resultado Esperado
| nombre         | promedio_total |
|----------------|----------------|
| Juan Pérez     | 475.00         |
| Ana Gómez      | 300.00         |
| Luis Martínez  | 700.00         |

---

