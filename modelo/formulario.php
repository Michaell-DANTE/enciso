<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Inserta datos del formulario.
    $sqli = "INSERT INTO pacientes(nombres, apellidos, documento, edad, fecha_reporte)";
    $sqli .=" VALUES('$nombre', '$apellido', '$documento', '$ed', '$fecha');";
    
    $res = $con -> query("$sqli");

?>