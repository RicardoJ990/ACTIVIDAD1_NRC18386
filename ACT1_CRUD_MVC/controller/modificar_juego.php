<?php

if(!empty($_POST["btnregistrar"]))
{
    if(!empty($_POST["nombre"]) and !empty($_POST["plataforma"]) and !empty($_POST["lanzamiento"]) and !empty($_POST["region"])) 
    {
        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $plataforma=$_POST["plataforma"];
        $lanzamiento=$_POST["lanzamiento"];
        $region=$_POST["region"];
        $sql=$conexion->query("UPDATE juegos SET nombre='$nombre', plataforma='$plataforma', lanzamiento='$lanzamiento', region='$region' where id=$id ");
        if ($sql==1)
        {
            header("location:index.php");
        }
        else
        {
            echo "<div class='alert alert-danger'>OCURRIÓ UN ERROR AL MODIFICAR EL JUEGO</div>";
        }
    }
    else 
    {
        echo "<div class='alert alert-warning'>LOS CAMPOS NO DEBEN QUEDAR VACIOS!!</div>";
    }
}

