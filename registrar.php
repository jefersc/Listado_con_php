<?php
    include('conexion.php');  
?>
<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>
    <title>Registrar</title>
</head>
<body>
    <br><div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-3">
            <h3>Registro creado</h3>
            <?php 
                $n = $_POST["nombre"];
                $a = $_POST["apellido"];
                $c = $_POST["correo"];
                $instruccionSQL = $db->prepare("INSERT INTO trabajador(nom,ape,cor) VALUES(?,?,?)");
                $instruccionSQL->execute(array($n,$a,$c));
                echo "<h4>". $n ." " .$a ."</h4>";
                echo "<h5>" . $c ."</h5>";
                echo "Datos registrados" ."<br>";
            ?>
            <a href="index.php" class="btn btn-primary">Lista de registro</a> <br>            
            </div>
            <div class="col-md-3">
                
            </div>
        </div>
    </div>
    
</body>
</html>