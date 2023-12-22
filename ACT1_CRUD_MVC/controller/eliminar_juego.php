<?php

if(!empty($_GET["id"]))
{
    $id=$_GET["id"];
    $sql=$conexion->query("DELETE from juegos WHERE id=$id" );
    if ($sql==1)
    {
        echo '<div class="alert alert-danger">JUEGO ELIMINADO CORRECTAMENTE</div>';
    }
    else
    {
        echo'<div class="alert alert-warning">HUBO UN ERROR AL ELIMINAR EL JUEGO</div>';
    }
}

?>