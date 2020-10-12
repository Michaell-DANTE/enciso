<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta de municipios.
    $sqlm = "SELECT id_municipios, nombre_municipio FROM municipios;";
    
    $querym = mysqli_query($con, $sqlm);

    
?>