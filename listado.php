<?php require_once('plantillas/cabecera.php');?>

<article>
    <h2>Listado de alumnos matriculados</h2>

    <table>
        <thead>
            <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido 1</th>
            <th>Apellido 2</th>
            <th>Fecha Nac</th>
            <th>Email</th>
            </tr>
        </thead>
        <tbody>

        <?php
        $consulta="SELECT * FROM alumnos";

        //Ejecuta la consulta y devuelve un array con todas las filas resultantes.
        $filas= mysqli_query($conexion, $consulta);

        //iterar las filas de la tabla

            while($fila = mysqli_fetch_array($filas)) {
                echo "<tr>\n";
                echo "<td>{$fila['id']}</td>\n";
                echo "<td>{$fila['nombre']}</td>\n";
                echo "<td>{$fila['apellido1']}</td>\n"; 
                echo "<td>{$fila['apellido2']}</td>\n";
                echo "<td>{$fila['fecha_nac']}</td>\n";
                echo "<td>{$fila['email']}</td>\n";
                echo "<td><a href='borrado.php?alumno=".$fila['id']."'>	\u{2716}</a></td>";
                // PARA USAR ICONOS TAMAÑO UTF-8 SE UTILIZA \u{} y dentro el codigo del simbolo correspondiente.
                echo "</tr>\n";
                                                    }
    
        ?>
        
        </tbody>
    </table>
    <div class="mensaje">
        <?php
            if (isset($_SESSION['mensaje'])){
                echo $_SESSION['mensaje'];
                unset($_SESSION['mensaje']);
            }
        ?>
    </div>
</article>