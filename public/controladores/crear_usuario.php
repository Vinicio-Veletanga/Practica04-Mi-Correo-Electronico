<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <title>Insertar</title>
    <style type="text/css" rel="stylesheet">
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include '../../config/conexionBD.php';
    $cedula = isset($_POST["cedula"]) ? trim($_POST["cedula"]) : null;
    $nombres = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
    $apellidos = isset($_POST["apellidos"]) ? mb_strtoupper(trim($_POST["apellidos"]), 'UTF-8') : null;
    $direccion = isset($_POST["direccion"]) ? mb_strtoupper(trim($_POST["direccion"]), 'UTF-8') : null;
    $telefono = isset($_POST["telefono"]) ? trim($_POST["telefono"]) : null;
    $correo = isset($_POST["correo"]) ? trim($_POST["correo"]) : null;
    $fecha_nac = isset($_POST["fecha"]) ? trim($_POST["fecha"]) : null;
    $contrasena = isset($_POST["contrasena"]) ? trim($_POST["contrasena"]) : null;
    date_default_timezone_set('America/Guayaquil');
    $fecha_cre = date("Y-m-d");
    $fecha_mod = date("Y-m-d") ;
    $rol = "user";
    $sql = " INSERT INTO usuarios VALUES(0,'$cedula','$nombres','$apellidos','$direccion','$telefono',
    '$correo',MD5('$contrasena'),'$fecha_nac','N','$fecha_cre','$fecha_mod','$rol')";

    if ($conn->query($sql) == TRUE) {
        header("Location:../vista/inisesion.html");
    } else {
        if ($conn->ermo == 1062) {
            echo "<p class='error'>La perosona con la cedula $cedula ya esta</p>";
        } else {
            echo "<p class='error'> Error" . mysqli_error($conn) . "</p>";
        }
    }

    $conn->close();
    echo "<a href='../vista/crear_usuario.html'>Regresar</a>";


    ?>
</body>

</html>