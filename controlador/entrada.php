<?php

    $contenido = ("../vista/plantilla.phtml");

    

    require("../controlador/departamento.php");


    require("../modelo/pais_p.php");


    require("../modelo/s_documentos.php");


    require("../modelo/s_estado.php");


    require("../modelo/s_lugar.php");

    

    // Se encarga de procesar y añadir los datos a la BD, al dar en el boton correspondiente.

    if( isset($_REQUEST['procesar']) )
    {


        
        require_once("../controlador/formulario.php");


        require("../modelo/formulario.php");


    }

    require("../modelo/pais.php");



    // Metodo 2. con if. 

    $todo = require("../controlador/seleccion_co.php");

    



    require_once("../vista/plantilla.phtml");
    
?>


