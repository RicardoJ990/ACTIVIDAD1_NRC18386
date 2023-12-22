<?php

//validamos boton enviar del index
if(!empty($_POST["btnregistrar"]))
{
    if(!empty($_POST["nombre"]) and !empty($_POST["plataforma"]) and !empty($_POST["lanzamiento"]) and !empty($_POST["region"]))
    {
        $nombre=$_POST["nombre"];
        $plataforma=$_POST["plataforma"];
        $lanzamiento=$_POST["lanzamiento"];
        $region=$_POST["region"];

        $sql=$conexion->query("insert into juegos(nombre,plataforma,lanzamiento,region)values('$nombre','$plataforma','$lanzamiento','$region')");
        if($sql==1)
        {
            echo '<div class="alert alert-success">EL JUEGO HA SIDO REGITRADO CORRECTAMENTE</div>';
        }
        else
        {
            echo '<div class="alert alert-danger">ERROR AL REGISTRAR EL JUEGO</div>';

        }
        


    }
    else
    {
        echo '<div class="alert alert-warning">ALGUNO DE LOS CAMPOS SE ENCUENTRA VACÍO</div>';

    }
}


?>