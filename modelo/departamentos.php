<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta de departamentos.
    $sqld = "SELECT id_departamentos, nombre_departamentos FROM departamentos;";
    
    $queryd = mysqli_query($con, $sqld);

    
?>