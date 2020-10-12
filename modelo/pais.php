<?php
    // Utiliza la conexion a la BD.
    require_once("../modelo/conexion.php");
    
    // Consulta de paises.
    $sqlpa = "SELECT id_paises, nombre_pais FROM paises;";

    $querypa = mysqli_query($con, $sqlpa);

    
    
    
    // $dato = mysqli_fetch_array($querypa);

    // echo $dato['nombre_pais'];

    function todos_paises($querypa)
    {
        while( $dato = mysqli_fetch_array($querypa) )
        { 
    
            echo $dato['nombre_pais'];



            if( $dato['nombre_pais'] == 'Colombia')
            {
        
                echo "-Si existe<br>";
        
            }else{

                echo "-No existe<br>";

            }
    
        }

    }

    todos_paises($querypa);


   



    

    
    // function proceso($querypa)
    // {

    //     while( $dato = mysqli_fetch_array($querypa) )
    //     { 

    //         echo $dato['nombre_pais']."<br>";

    //     }   

        // foreach($querypa as $opcionp)
        // {
    
        //     $sel = $opcionp['nombre_pais'];
        //     //imprimo paises.
        //     echo $sel."<br>";
    
            // if ($sel == 'Colombia')
            // {
    
            //     function procesod($queryd)
            //     {

            //         foreach($queryd as $opciond)
            //         {
    
            //             $sele = $opciond['nombre_departamentos'];
            //             // imprimo departamentos.
            //             echo $sele."<br>"; 
    
            //         }

            //     }

            //     $deptodos = procesod($queryd);
            //     // echo $deptodos;


    
            // }else{
    
                
    
            // }
    
        // }


    // }

    // proceso($querypa);



?>