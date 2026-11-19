/**
 * Inicializa la validación del formulario de registro de libros 
 *
 * @param {HTMLFormElement} form Formulario con el id 'formLibro'.
 * @param {string} titulo Valor ingresado en el campo 'titulo'.
 * @param {string} autor Valor ingresado en el campo 'autor'.
 * @param {string} isbn Valor ingresado en el campo 'isbn'.

 */
document.addEventListener('DOMContentLoaded', () => {
    const form = document.getElementById('formLibro');

    // Validación interactiva antes de enviar los datos al servidor
    form.addEventListener('submit', (e) => {
        const titulo = document.getElementById('titulo').value.trim();
        const autor = document.getElementById('autor').value.trim();
        const isbn = document.getElementById('isbn').value.trim();

        if (titulo === "" || autor === "" || isbn === "") {
            e.preventDefault(); // Detiene el envío del formulario
            alert('Por favor, rellena todos los campos antes de guardar.');
            return;
        }

        // Validación simple para que el formato ISBN no contenga caracteres extraños
        if (isbn.length < 10) {
            e.preventDefault();
            alert('El campo ISBN parece demasiado corto o inválido.');
        }
    });

    
    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('success') === '1') {
        
        window.history.replaceState({}, document.title, window.location.pathname);
        alert('¡Libro registrado con éxito en el inventario!');
    }
});
