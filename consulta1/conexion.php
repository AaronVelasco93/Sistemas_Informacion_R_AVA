<?php
$host_db="127.0.0.1";//localhost
$user_db="root";
$pass_db="123456";
$db_name="aragon_fes";
/* 
$conexion = mysqli_connect($host_db,$user_db,$pass_db);
if ($conexion){
    echo "<p>MySQL le a dado permisos a  PHP para ejecutar consultas con el usuario y clave </p>";

}else{
    echo"problema con la conexion";
}
*/
$conexion = new mysqli($host_db,$user_db,$pass_db,$db_name);
if ($conexion -> connect_error){
    echo "Mysql no puse conectarse";
}else {
    echo "conexion exitosa";
}




?>

