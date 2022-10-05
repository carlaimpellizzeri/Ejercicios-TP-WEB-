<!DOCTYPE html>
<html>
    <head>
        <title>Libros</title>
        <?php
            require 'database.php';
        ?>
    </head>
    <body>
        <h1>Listado de libro</h1>
        <?php
            require 'insertar_libro.php';
            require 'borrar_libro.php';
        ?>
        <table>
            <tr>
                <td>Id</td>
                <td>Titulo</td>
                <td>Paginas</td>
                <td>Editorial</td>
            </tr>
        <?php
            $sql = "SELECT * FROM libros";
            $resultado = $conexion -> query($sql);
            if ($resultado -> num_rows > 0){
                while ($row = $resultado -> fetch_assoc()) {
                    $id= $row ["id"];
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["titulo"] . "</td>";
                    echo "<td>" . $row["paginas"] . "</td>";
                    echo "<td>" . $row["editorial"] . "</td>";
                    echo "<td>";
                    echo "<form method='post' action='modificar_libro.php'>";
                    echo "<input type='hidden' name='id' value=$id>";
                    echo "<input type='hidden' name='formulario' value='modificar'>";
                    echo "<input type='submit' value='Modificar'>";
                    echo"</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='post' action=''>";
                    echo "<input type='hidden' name='id' value='$id'>";
                    echo "<input type='hidden' name='formulario' value='borrar'>";
                    echo "<input type='submit' value='Borrar'>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr>";
                echo "<td>No se han encontrado libros</td>";
                echo "</tr>";
            }
        ?>
        </table>
    </body>
</html>

