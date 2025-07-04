<?php
    if(!isset($_POST['nombre'])){
        //Mueve el navegador a la pagina principal si se accede a este doc si no se llega desde el formulario, por ejemplo, introduciendo la URL manualmente.
        header('Location:registro.php');
    }
    
    require_once('plantillas/cabecera.php');
    
    $nombre=$_POST['nombre'];
    $apellido1 = $_POST['apellido1'];
    $apellido2 = $_POST['apellido2'];
    $fechaNac = $_POST['fechanac'];
    $email = $_POST['email'];
?>
    <h2>Alumno a Insertar</h2>
    <ul>
        <li>Nombre: <?=$nombre?></li>
        <li>Apellido 1: <?=$apellido1?></li>
        <li>Apellido 2: <?=$apellido2?></li>
        <li>Fecha Nacimiento: <?=$fechaNac?></li>
        <li>Correo electrónico: <?=$email?></li>
    </ul>

    <?php
    $consulta =
        "INSERT INTO ALUMNOS (nombre,apellido1,apellido2,fecha_nac,email) values('$nombre', '$apellido1','$apellido2','$fechaNac','$email')";

    
        // echo $consulta
        $resultado= mysqli_query($conexion, $consulta);
        if ($resultado>0){
            echo '<p> Se ha insertado el alumno satisfactoriamente</p>';

        } else{
            echo"<p class='error'>Error al insertar el alumno</p>";
        }
    ?>

    <?php require_once('plantillas/pie.php'); ?>
