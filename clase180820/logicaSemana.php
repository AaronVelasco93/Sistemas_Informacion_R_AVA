<?php
$dato = $_POST['txtDiaSemana'];

//    echo "Tu dato que ingresaste es el siguiente:".$dato;
if ($dato == "Lunes"  || $dato == "Martes"  || $dato == "Miercoles" || $dato == "Jueves" || $dato == "Viernes") {
    echo "Dia laboral";
    echo "<br>";
    echo "Dia ingresado" . $dato;
} else if ($dato == "Sabado"  || $dato == "Domingo") {

       
    echo "Dia Libre";
    echo "<br>";
    echo "Dia ingresado" . $dato;
} else {
    echo "Parametro invalido";
    echo "<br>";
    echo "<p>Regresar a la apgina anterior</p> <br>  <a href='semana.php'>Semana Datos</a>";
}
