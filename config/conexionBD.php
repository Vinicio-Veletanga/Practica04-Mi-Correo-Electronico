<?php
$servername="localhost";
$username="vinicio";
$passsword="GuabO*1920";
$dbname="bazarzalamea";
//crear conexiom
$conn = new mysqli($servername,$username,$passsword,$dbname);
$conn->set_charset("utf8");
// verificar conecxion
if ($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
    echo "<p>ERROR CONEXION</p>";
}else{
   echo "<p>conexion exitosa</p>";
}
?>