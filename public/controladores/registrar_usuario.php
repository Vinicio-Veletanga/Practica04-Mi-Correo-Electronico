<?php     
session_start();         
$_SESSION['isLogged'] = FALSE;     
session_destroy();     
header("Location: /xampp/htdocs/Practica04-Mi-Correo-Electronico/public/vista/crear_usuario.html");   
?>