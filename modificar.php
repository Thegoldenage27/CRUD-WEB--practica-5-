<?php
include "modelo/conexion.php";
$id=$_GET["id"];
$sql=$conexion->query("SELECT * FROM persona WHERE id_persona=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form class="col-4 p-3 m-auto" method="POST">
            <h3 class="text-center text-secondary">Modificar Alumnos</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "controlador/modificar_persona.php";  
            while($datos=$sql->fetch_object()) { ?>

                <div class="mb-3">
                    
                <label for="exampleInputEmail1" class="form-label">ID Alumno</label>
                <input type="text" class="form-control" name="id_persona" value="<?=$datos->id_persona?>">   
                
                <label for="exampleInputEmail1" class="form-label">Nombre del Alumno</label>
                <input type="text" class="form-control" name="nombre" value="<?=$datos->nombre?>">

                <div class="mb-3">
                    
                    <label for="exampleInputEmail1" class="form-label">Apellidos del Alumno</label>
                <input type="text" class="form-control" name="apellido" value="<?=$datos->apellido?>">

                <div class="mb-3">
                    
                    <label for="exampleInputEmail1" class="form-label">Numero de Cuenta</label>
                <input type="text" class="form-control" name="dni"value="<?=$datos->dni?>">

                <div class="mb-3">
                    
                    <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
                <input type="text" class="form-control" name="fecha" value="<?=$datos->fecha_nac?>">

                <div class="mb-3">
                    
                    <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo"value="<?=$datos->correo?>">
                
                </div>
                <?php } 
                ?>
            
            
                <button tipe="submit" class="btn btn.primary" name="btnregistrar" value="ok"
                style="background-color:#25E9E6">Guardar Modificacion</button>
            
</form>
</body>
</html>