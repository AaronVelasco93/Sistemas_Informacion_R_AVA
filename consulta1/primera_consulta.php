<?php
//incluir la conexion y hacer uso de DB
include 'conexion.php';
//$conexion = new mysqli('localhost', 'root', '123456', "aragon_fes");

//generacion de mi consulta
$consulta_sql = " SELECT * FROM usuarios";

//mandar el query, y vamos a usar una conexion
$resultado = $conexion->query($consulta_sql);

//Retorna el numero de filas del resultado. Si encuentra mas de uno lo usamos para imprimir el resultado
$count = mysqli_num_rows($resultado);

//creacion de columnas
echo "<table border='2px'>";
echo "<tr>";
echo "<th>Nombre</th>";
echo "<th>Direccion</th>";
echo "<th>Numero Telefonico</th>";
echo "<th>Correo electronico</th>";
echo "<th>Nombre_Usuario</th>";
echo "<th>Contraseña</th>";
echo "<th>Fecha de registro</th>";
echo "<th>Nivel de permisos</th>";
echo "</tr>";

if ($count > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        echo "<tr>";
        echo "<td>" . $row['nombre'] . "</td>";
        echo "<td>" . $row['direccion'] . "</td>";
        echo "<td>" . $row['telefono'] . "</td>";
        echo "<td>" . $row['correo'] . "</td>";
        echo "<td>" . $row['nombre_usuario'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "<td>" . $row['Fecha_Registro'] . "</td>";
        echo "<td>" . $row['Permisos'] . "</td>";

        echo "<tr>";
    }
    echo "</table> ";
} else { // si no encuentra ningun registro
    echo "<h2 align='center'>Sin Registros</h2>";
}

