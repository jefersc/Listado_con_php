<?php
    // Bloque try catch
    try{
        // Sentencias a ejecutar 
        // hasta encontrar un error

        $db = new PDO('mysql:host=localhost;dbname=ddw501','root','');
        // echo "Conexion exitosa";
    }
    catch(Exception $e){
        // Sentencias que se ejecutan
        // al encontrar el error
        die($e->getMessage());
    }
?>