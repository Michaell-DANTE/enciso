<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta del lugar de atencion.
    $sqla = "SELECT id_lugar, lugar_atencion FROM lugaratencion;";

    $queryat = mysqli_query($con, $sqla);


?>