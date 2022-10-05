<form action="" method="post">
    <label>Titulo</label>
    <input type="text" name="titulo"><br><br>
    <label>Paginas</label>
    <input type="text" name="paginas"><br><br>
    <label>Editorial</label>
    <input tyep="text" name="editorial"><br><br>
    <input type="hidden" name="formulario" value="insertar">
    <input type="submit" value="Insertar"><br><br>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        $_POST ["formulario"] == "insertar") {
        $titulo = $_POST ["titulo"];
        $paginas = $_POST ["paginas"];
        $editorial = $_POST ["editorial"];
        
        $sql = "INSERT INTO libros (titulo,paginas,editorial)
            VALUES ('$titulo','$paginas','$editorial')";

        if ($conexion -> query($sql) == TRUE) {
            echo "<p>Libro insertado</p>";
        } else {
            echo "<p>Error al insertar</p>";
        }
        }
?>