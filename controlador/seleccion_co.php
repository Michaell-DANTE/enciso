<?php

    // Permite saber si se selecciono Pais - Colombia.
    if(isset($_POST['paisss']))
    {

        $lis_paises = $_POST['paisss'];

        if($lis_paises == 'Colombia'){

            require_once("../vista/departamentos.phtml");

            require_once("../vista/municipios.phtml");

        }else{

        }

    }

?>