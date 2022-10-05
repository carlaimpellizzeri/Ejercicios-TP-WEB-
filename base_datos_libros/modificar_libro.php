<?php
    require 'database.php';
    
    if ($_SERVER ["REQUEST_METHOD"] == "POST" && 
        $_POST["formulario"] == "actualizar") {
        
        $id = $_POST["id"];
        $titulo = $_POST["titulo"];
        $paginas = $_POST["paginas"];
        $editorial = $_POST["editorial"];

        $sql = "UPDATE libros
        SET titulo = '$titulo',
            paginas = '$paginas',
            editorial = '$editorial'
        WHERE id = '$id'";

            if ($conexion -> query($sql) == TRUE) {
                echo "<p>Libro modificado</p>";
            } else {
                echo "<p>Error al modificar</p>";
            }
        }

    if ($_SERVER ["REQUEST_METHOD"] == "POST" &&
        $_POST["formulario"] == "modificar") {
        
        $id = $_POST ["id"];

        $sql = "SELECT * FROM libros WHERE id = '$id'";

        $resultado = $conexion -> query($sql);

            if ($resultado -> num_rows > 0) {
                while ($row = $resultado -> fetch_assoc()) {
                    $titulo = $row["titulo"];
                    $paginas = $row["paginas"];
                    $editorial = $row["editorial"];
                }
            }
        }

    if ($_SERVER["REQUEST_METHOD"] == "POST" &&
        $_POST["formulario"] == "actualizar") {

        }

?>      


<h2>Modificar libro <?php if (isset($id)) echo $id?></h2>
<form action="" method="post">
    Titulo: <input type="text" name="titulo" value="<?php echo $titulo?>">
    <br><br>
    Paginas: <input type="text" name="paginas" value="<?php echo $paginas?>">
    <br><br>
    Editorial: <input type="text" name="editorial" value="<?php echo $editorial?>">
    <br><br>
    <input type="hidden" name="id" value="<?php echo $id?>">
    <input type="hidden" name="formulario" value="actualizar">
    <input type="submit" value="Modificar">
</form>