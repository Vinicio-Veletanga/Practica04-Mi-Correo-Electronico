
<?php

session_start();
include '../../config/conexionBD.php';
$usuario = isset($_POST["correo"]) ? trim($_POST["correo"]):null;
$contrasena = isset($_POST["contra"]) ? trim($_POST["contra"]):null;
$sql = "SELECT * FROM usuarios WHERE usu_correo ='$usuario' and usu_password = MD5('$contrasena') and usu_Eliminado = 'N'";

$result = $conn->query($sql);
$rl = mysqli_fetch_assoc($result);
$rlt = $rl["usu_rol"];
if($result->num_rows > 0){
    $_SESSION["isLogged"] == TRUE;
    if($rlt == "admin"){
        $_SESSION['isLogged'] == TRUE;
       header("Location:../../admin/vista/index.html");
    }
    if($rlt == "user"){
        $_SESSION['isLogged'] == TRUE;
       header("Location:../../cliente/vista/index.html");
    }

}else{
    header("Location:../vista/inisesion.html");
}

 

$conn->close();

?>