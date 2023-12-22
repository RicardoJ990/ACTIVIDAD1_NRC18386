<?php

include "model/conexión.php";

$id=$_GET["id"];

$sql=$conexion->query(" select * from juegos where id=$id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Juegos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    
<form class="col-4 p-3 m-auto" method="POST">
  <h2 class="text-center alert alert-secondary">Modificación de Videojuegos</h3>  
  <input type="hidden" name="id" value="<?=$_GET["id"] ?>">

  <?php

    include "controller/modificar_juego.php";
    while($datos=$sql->fetch_object())
    {
                ?>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NOMBRE DEL JUEGO</label>
            <input type="text" class="form-control" name="nombre" value="<?= $datos->nombre?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">PLATAFORMA DEL JUEGO</label>
            <input type="text" class="form-control" name="plataforma"value="<?= $datos->plataforma?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">FECHA DE LANZAMIENTO</label>
            <input type="date" class="form-control" name="lanzamiento"value="<?= $datos->lanzamiento?>">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">REGIÓN DEL JUEGO</label>
            <input type="text" class="form-control" name="region"value="<?= $datos->region?>">
        </div>
        

                <?php

    }


  ?>

 
  <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">MODIFICAR</button>
</form>

</body>
</html>