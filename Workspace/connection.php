<?php
    $user="root";
    $pass="";
    $server="localhost";
    
    $connection = mysqli_connect($server,$user,$pass);

    if(!$connection)
    {
        echo "No se ha podido conectar con el servidor" . mysql_error();
    }
    {
        echo "Hemos conectado al servidor <br>" ;
    }
    
    $datab="partial_dealers";
    
    $db = mysqli_select_db($connection,$datab);

    if(!$db)
    {
        echo "No se ha podido encontrar la tabla";
    }
    {
        echo "Tabla seleccionada";
    }



?>