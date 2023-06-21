<?php
    include('conexion.php');    
?>

<!DOCTYPE html>
<html lang="es-pe">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear nuevo registro</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<script src="js/bootstrap.min.js"></script>

    <script type="text/javascript">
        // Funcion validar
        function validar(f){
            // variable todo_correcto
            var todo_correcto = true;

            if (document.getElementById('nombre').value.length < 2){
                alert("Nombre debe tener como mínimo 2 caracteres");
                todo_correcto = false;
            }

            if (document.getElementById('apellido').value.length < 2){
                alert("Apellido debe tener mínimo 2 caracteres");
                todo_correcto = false;
            }

            if (document.getElementById('correo').value.length < 2){
                alert("Correo debe tener mínimo 2 caracteres");
                todo_correcto = false;
            }

            if (todo_correcto){
                if(confirm("Desea guardar los registros en la tabla trabajador")){
                    return todo_correcto;
                }else{
                    todo_correcto = false;
                    return todo_correcto;
                }            
            }    
            else{
                alert("Algunos campos no estan completados, revise por favor");
                todo_correcto = false;
                return todo_correcto;
            }
        }
        
    </script>
</head>
<body  style="background-color: #ff9900ed;">
    <br><div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h1>Nuevo registro</h1>
                <form method="POST" action="registrar.php" onsubmit='return validar(this)'>
                    <fieldset>
                        <legend>Registro de Personal</legend>
                        <div class="form-group">
                            <label for="nombre" class="form-label">Indique nombres</label><br>
                            <input 
                                type="text" 
                                id="nombre" 
                                name="nombre" 
                                required
                                placeholder="Indique aqui el nombre de personal"
                                maxlength="50"
                                class="form-control"
                                title="Completar el nombre"
                                tabindex="1"/><br>
                        </div>
                        <div class="form-group">
                            <label for="apellido"  class="form-label">Indique apellidos</label><br>
                            <input 
                                type="text" 
                                id="apellido" 
                                name="apellido" 
                                required
                                placeholder="Indique aqui apellidos del personal"
                                maxlength="50"
                                class="form-control"
                                title="Completar el apellido"
                                tabindex="2"/><br>                                                            
                        </div>
                        
                        <div class="form-group">
                            <label for="correo"  class="form-label">Indique correo electronico</label><br>
                            <input 
                                type="email" 
                                id="correo" 
                                name="correo" 
                                required
                                placeholder="Indique aqui el correo del personal"
                                maxlength="50"
                                class="form-control"
                                title="Completar el correo"
                                tabindex="3"/><br>
                        </div>
                        
                        <input type="submit" value="Registrar" name="registro" class="btn btn-primary"/>
                        <a href="index.php" class="btn btn-success">Lista de registro</a> 
                    </fieldset>
                    
                </form>
                
            </div>

            <div class="col-md-3">

            </div>
        </div>
    </div>
    
</body>
</html>