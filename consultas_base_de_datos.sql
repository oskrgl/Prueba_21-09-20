/* 5. Registros antes del 2019 */
SELECT * FROM nombre WHERE anyo < 2019;

/*6. Registros cuyo pago sea superior a 23 */

SELECT * FROM nombre WHERE pago > 23;

/* 7. Registros cuya deuda sea inferior a 56 */

SELECT * FROM nombre WHERE deuda < 56;

/* 8. El total de las deudas (Solo el valor) */
SELECT SUM(deuda) FROM nombre;

/* 9. Los registros organizados por NOM */
SELECT * FROM nombre ORDER BY nom ASC;

/* 10. El teléfono de todas las personas que tienen una deuda inferior a 25. */

SELECT apellido.TELEFONO FROM nombre INNER JOIN apellido on nombre.IDNOM = apellido.IDNOM WHERE nombre.DEUDA < 25;

/* 11. El APE de la persona que tiene la deuda más alta. */
SELECT apellido.APE FROM nombre INNER JOIN apellido on nombre.IDNOM = apellido.IDNOM WHERE nombre.deuda = (SELECT max(deuda) FROM nombre);

/* 12. El APE de la persona que tiene el pago más alto. */
SELECT apellido.APE FROM nombre INNER JOIN apellido on nombre.IDNOM = apellido.IDNOM WHERE nombre.pago = (SELECT max(pago) FROM nombre);