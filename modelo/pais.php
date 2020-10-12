<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");
    
    // Consulta de paises.
    $sqlpa = "SELECT id_paises, nombre_pais FROM paises;";

    $querypa = mysqli_query($con, $sqlpa);

?>