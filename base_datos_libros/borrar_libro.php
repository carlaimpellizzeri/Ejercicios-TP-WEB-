<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        $_POST["formulario"] == "borrar") {

        // DELETE FROM peliculas WHERE id= 2        
        $id = $_POST["id"];
        //echo "Queremos borrar la pelicula con id = $id";

        $sql = "DELETE FROM libros WHERE id='$id'";

        if ($conexion -> query($sql) == TRUE) {
            echo "<br>" . "Libro borrado" . "<br>";
        } else {
            echo "Error al borrar";
        }       
        }
?>