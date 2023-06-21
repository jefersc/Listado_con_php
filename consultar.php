<?php
    error_reporting(0);
    include('conexion.php');
    
    $where="";
    if(!empty($_POST)){
        $valor=$_POST['buscador'];
        if (!empty($valor)) {
            $where="WHERE id LIKE '%$valor%' ";
        }
    }
    // VARIABLE INSTRUCCION SQL
    $consulta = $db ->query("SELECT * FROM participantes $where");
    $resultado = $consulta ->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <script src="js/bootstrap.min.js"></script>
    <title>Buscar Participantes</title>
</head>
<body style="background-color: #05f972;">
    <div class="container" style="text-align: center;">
        <br><div class="col-sm-12 col-md-12 col-lg-12">
            <h4 class="text-center">Busqueda de participante</h4>
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
                    <input type="text" name="buscar" class="form-control" placeholder="Busqueda por numero de dni"><br>
                    <input type="submit" name="buscando" value="buscador" class="btn-block btn-sm btn-info">
                </form>
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <br><div class="table-responsive">
                        <table class="table">
                            <thead class="text-muted">
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>APELLIDO</th>
                                <th>DNI</th>
                                <th>SEMINARIO</th>
                            </thead>
                            <tbody>
                            <?php
                                foreach($resultado as $muestra){
                                    echo '<tr>';
                                    echo '<td>' . $muestra['id'] . '</td>';
                                    echo '<td>' . $muestra['nom'] . '</td>';
                                    echo '<td>' . $muestra['ape'] . '</td>';
                                    echo '<td>' . $muestra['dni'] . '</td>';
                                    echo '<td>' . $muestra['sem'] . '</td>';
                                    echo '</tr>';
                            } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <a href="crear2.php" class="btn btn-primary">Nuevo Participante</a>
    <a href="index.php" class="btn btn-success">Lista Trabajadores</a>
    </div>
</body>
</html>