<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta de paises de procedencia.
    $sqlp = "SELECT id_paises, nombre_pais FROM paises;";

    $queryp = mysqli_query($con, $sqlp);
    

?>