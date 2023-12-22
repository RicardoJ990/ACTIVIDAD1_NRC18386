<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACTIVIDAD 1_CRUD_MVC</title>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/6986299fe3.js" crossorigin="anonymous"></script>
</head>
<body>
  <script>
      function eliminar()
      {
        var respuesta=confirm("ESTÁ SEGURO QUE DESEA ELIMINAR EL REGISTRO?!");
        return respuesta
      }
  </script>

<h1 class="text-center p-3">ACTIVIDAD 1 - NRC18386 - RICARDO JARAMILLO </h1>
<?php
include "model/conexión.php";
include "controller/eliminar_juego.php";

?>

<div class="container-fluid row">

<form class="col-4 p-3" method="POST">
  <h4 class="text-center text-secondary">Registro de Videojuegos</h3>  
  <?php
    include "controller/registro_juego.php";
  ?>

  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">NOMBRE DEL JUEGO</label>
    <input type="text" class="form-control" name="nombre">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">PLATAFORMA DEL JUEGO</label>
    <input type="text" class="form-control" name="plataforma">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">FECHA DE LANZAMIENTO</label>
    <input type="date" class="form-control" name="lanzamiento">
  </div>
  <div class="mb-1">
    <label for="exampleInputEmail1" class="form-label">REGIÓN DEL JUEGO</label>
    <input type="text" class="form-control" name="region">
  </div>
  
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">ENVIAR</button>
</form>

<div class="col-8 p-4">

<table class="table table-dark table-striped">
  <thead class="bg-secondary">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">PLATAFORMA</th>
      <th scope="col">LANZAMIENTO</th>
      <th scope="col">REGIÓN</th>
      <th scope="col"></th>


    </tr>
  </thead>
  <tbody>

    <?php
        include "model/conexión.php";
        $sql=$conexion->query("select * from juegos ");
        while($datos=$sql->fetch_object())
        {
         ?>

<tr>
      <td><?=$datos->id?></td>
      <td><?=$datos->nombre?></td>
      <td><?=$datos->plataforma?></td>
      <td><?=$datos->lanzamiento?></td>
      <td><?=$datos->region?></td>
      <td>
      
      <a href="modificar_juego.php?id=<?=$datos->id?>" class="btn btn-small btn-warning"><i class="fa-regular fa-pen-to-square"></i></a>
      <a onclick="return eliminar()" href="index.php?id=<?= $datos->id?> "class="btn btn-small btn-danger"><i class="fa-regular fa-trash-can"></i></a>
   
     


      </td>

    </tr>
   
        <?php
        }

        ?>

  </tbody>
</table>

</div>

</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>    
</body>
</html>