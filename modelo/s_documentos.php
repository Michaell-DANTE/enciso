<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");

    // Consulta de tipo de documento.
    $sql = "SELECT id_documento, tipo_documento FROM tipodocumento;";

    $query = mysqli_query($con, $sql);

    
    
?>