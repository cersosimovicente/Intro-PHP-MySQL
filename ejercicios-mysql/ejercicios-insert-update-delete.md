# Ejercicios MySQL - INSERT, UPDATE y DELETE

---

## Configuración Inicial
Antes de comenzar, asegúrate de crear y usar la base de datos de prueba:

```sql
CREATE DATABASE Tienda;
USE Tienda;

CREATE TABLE Productos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    precio DECIMAL(10, 2) NOT NULL,
    stock INT NOT NULL
);
```

---

## Ejercicio 1: INSERT
**Inserta tres productos en la tabla `Productos`.**
    ('Laptop', 1200.00, 15),
    ('Mouse', 25.50, 50),
    ('Teclado', 45.99, 30);
### Solución

```sql

```

---

## Ejercicio 2: UPDATE
**Actualiza el precio de todos los productos cuyo precio sea menor a 50, aumentando un 10%.**

### Solución
```sql

```

---

## Ejercicio 3: DELETE
**Elimina todos los productos cuyo stock sea menor a 20.**

### Solución
```sql

```

---

## Ejercicio 4: INSERT
**Agrega un nuevo producto llamado "Monitor" con precio 200.00 y stock 25.**

### Solución
```sql

```

---

## Ejercicio 5: UPDATE
**Cambia el nombre de todos los productos con precio mayor a 100 a "Producto Premium".**

### Solución
```sql

```

---

## Ejercicio 6: DELETE
**Elimina los productos cuyo nombre sea "Mouse".**

### Solución
```sql

```

---

## Ejercicio 7: INSERT
**Inserta múltiples productos con los siguientes datos:**

| Nombre        | Precio | Stock |
|---------------|--------|-------|
| "Tablet"      | 300.00 | 20    |
| "Impresora"   | 150.00 | 10    |
| "Cargador"    | 20.00  | 100   |

### Solución
```sql

```

---

## Ejercicio 8: UPDATE
**Reduce el stock en 5 unidades para todos los productos cuyo stock sea mayor a 25.**

### Solución
```sql

```

---

## Ejercicio 9: DELETE
**Elimina los productos cuyo precio sea mayor a 500.**

### Solución
```sql

```

---

## Ejercicio 10: INSERT
**Agrega un producto con valores nulos en los campos no obligatorios (suponiendo que se permite).**

### Solución
```sql

```

---

