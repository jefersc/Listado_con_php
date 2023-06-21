<?php
    include('conexion.php');
    // VARIABLE INSTRUCCION SQL
    $busqueda = $db ->query("SELECT * FROM trabajador");

    // RECOGER LOS REGISTROS DE LA TABLA 
    // $arrDatos contendra los registros
    $arrDatos = $busqueda ->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    	
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
    <title>Lista de Demo</title>
</head>
<body style="background-color: #05f972;">
    <br><div class="container" style="text-align: center;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Lista de Trabajadores</h1>
                <table class="table" style="background-color: #00ffd0c7;">
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>CORREO</th>

                <?php
                        foreach($arrDatos as $muestra){
                            echo '<tr>';
                            echo '<td>' . $muestra['id'] . '</td>';
                            echo '<td>' . $muestra['nom'] . '</td>';
                            echo '<td>' . $muestra['ape'] . '</td>';
                            echo '<td>' . $muestra['cor'] . '</td>';
                            echo '</tr>';
                        }
                ?>
                </table>
                <a href="crear1.php" class="btn btn-primary">Nuevo registro</a>
                <a href="indexpar.php" class="btn btn-success">Lista Participantes</a> 
            </div>
        </div>
    </div>    
</body>
</html>