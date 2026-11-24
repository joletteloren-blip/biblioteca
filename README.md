#  Gestor de Biblioteca Web

> Aplicación web ligera para administrar el catálogo y los préstamos de libros en tiempo real, desarrollada con PHP, MySQL y JavaScript.

**Autor:** Jolete Carrasco Lorenzana
**Contacto:** joletteloren@gmail.com
**Link de la pagina:** [Ver proyecto en línea](http://biblioteca01.atwebpages.com/index.php)

![Vista previa del sistema](https://img.magnific.com/fotos-premium/imagen-concepto-biblioteca-digital-laptop-que-muestra-libros-digitales-conectados-estanterias-reales_1303267-10750.jpg?semt=ais_hybrid&w=740&q=80)

## ¿Qué hace el sistema?

* **Registro rápido:** Agrega libros con Título, Autor e ISBN.


## Cómo funciona

1. **Registra:** Completa el formulario con los datos del libro.



## Arquitectura del proyecto

| Archivo | Función principal |
| :--- | :--- |
| index.php | Vista principal con el formulario y la tabla de libros. |
| guardar.php | Guarda los nuevos registros en MySQL. |
| cambiarEstado.php | Alterna el estado del libro (1 Disponible / 0 Prestado). |
| script.js | Valida los campos y la longitud del ISBN en el navegador. |
| styles.css | Diseño visual responsivo basado en tarjetas. |

 ##Buenas prácticas de código

```javascript
//  Evitar nombres cortos o poco claros
let n = "Juan";
function p(a) {
  return a >= 18;
}

// Usar nombres descriptivos
let nombreUsuario = "Juan";
function esMayorDeEdad(edadUsuario) {
  return edadUsuario >= 18;
}
