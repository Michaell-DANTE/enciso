<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta de estados del paciente.
    $sqld = "SELECT id_estados, estados FROM estados;";

    $queryde = mysqli_query($con, $sqld);


?>