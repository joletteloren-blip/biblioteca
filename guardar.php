<?php

/**
 * Recibe los datos del formulario por POST y guarda un libro nuevo en la base de datos.
 *
 * @param string $_POST['titulo'] Título del libro enviado desde el formulario.
 * @param string $_POST['autor'] Autor del libro enviado desde el formulario.
 * @param string $_POST['isbn'] Código ISBN del libro enviado desde el formulario.
 */
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = "fdb1029.awardspace.net"; // datos de conexión
    $servidor = "fdb1029.awardspace.net";
    $usuario = "4794854_pruebadb";
    $password = "jole456s";
    $base_datos = "4794854_pruebadb";
    $conexion = new mysqli($host, $usuario, $password, $base_datos);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

  
    $titulo = $conexion->real_escape_string($_POST['titulo']);
    $autor = $conexion->real_escape_string($_POST['autor']);
    $isbn = $conexion->real_escape_string($_POST['isbn']);
    $sql = "INSERT INTO libros (titulo, autor, isbn) VALUES ('$titulo', '$autor', '$isbn')";

    if ($conexion->query($sql) === TRUE) {
        // Redireccionar de vuelta a la página principal si se guardó con éxito
        header("Location: index.php?success=1");
    } else {
        echo "Error al guardar el libro: " . $conexion->error;
    }

    $conexion->close();
}
?>
