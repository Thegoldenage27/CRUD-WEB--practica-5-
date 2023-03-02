<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS ONLY-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"rel="stylesheet" 
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
      <script>
          function eliminar(){
            var respuesta=confirm("Estás seguro que deseas eliminar?");
            return respuesta
          }  
      </script>


    <h1 class="text-center p-3"> MODULO VII</h1>
    <div class="container-fluid row">

        <form class="col-4 p-3" method="POST">
            <h3 class="text-center text-secondary">Registro de Alumnos</h3>
            <?php
               include "modelo/conexion.php";
                include "controlador/eliminar_persona.php";
              include "controlador/registro_persona.php";
            ?>
            
            <div class="mb-3">
              
                <label for="exampleInputEmail1" class="form-label">Nombre del Alumno</label>
              <input type="text" class="form-control" name="nombre">
            
            </div>

            <div class="mb-3">
              
                <label for="exampleInputEmail1" class="form-label">Apellidos del Alumno</label>
              <input type="text" class="form-control" name="apellido">
            
            </div>

            <div class="mb-3">
              
                <label for="exampleInputEmail1" class="form-label">Numero de Cuenta</label>
              <input type="text" class="form-control" name="dni">
            
            </div>

            <div class="mb-3">
              
                <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
              <input type="date" class="form-control" name="fecha">
            
            </div>

            <div class="mb-3">
              
                <label for="exampleInputEmail1" class="form-label">Correo</label>
              <input type="text" class="form-control" name="correo">
            
            </div>
                <button tipe="submit" class="btn btn.primary" name="btnregistrar" value="ok"
                style="background-color:#25E9E6">Agregar Alumno</button>
            
        </form>
        
            <div class="col-8 p-4">
                <table class="table">
                <thead class="bg-info">
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDOS</th>
                        <th scope="col">CUENTA</th>
                        <th scope="col">FECHA DE NACIMIENTO</th>
                        <th scope="col">CORREO</th>
                        <th scope="col"></th>

                  </tr>
                </thead>
                <tbody>
                  <?php

                  //conectamos la BD
                  include "modelo/conexion.php";
                  $sql = $conexion->query(" SELECT * FROM persona");
                  While ($datos = $sql->fetch_object()){ ?>


                  <tr>
                    <td><?= $datos->id_persona ?></td>
                    <td><?= $datos->nombre     ?></td>
                    <td><?= $datos->apellido   ?></td>
                    <td><?= $datos->dni        ?></td>
                    <td><?= $datos->fecha_nac  ?></td>
                    <td><?= $datos->correo     ?></td>

                    <td>
                    
                        <a href="modificar.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-warning">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                              </svg><i class="bi bi-trash"></i>
                        </a>

                        <a onclick="return eliminar()" href="index.php?id=<?= $datos->id_persona ?>" class="btn btn-small btn-danger">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                              </svg><i class="bi bi-trash"></i>    
                        </a>
                    
                    </td>

                  </tr>

                    <?php }
                    ?>

                </tbody>
              </table>
        </div>
        
    </div>

<!-- JavaScript Bundle with Popper--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>   
</body>
</html>