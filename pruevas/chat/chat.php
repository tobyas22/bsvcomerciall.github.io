<?php
session_start(); 
$conexion = mysqli_connect("p:localhost", "root", "", "bsv-administracion");
$ping = mysqli_ping($conexion);



$sql = "SELECT * FROM chat";
$result = mysqli_query($conexion, $sql);


while($mostrar = mysqli_fetch_array($result)){
echo '
<header class="contenedor_de_mensage">
        <div class="id_mensage"> '.$mostrar['id'].'</div><hr class="divisoria">
        <div class="mensage">'.$mostrar['mensage'].'</div>
        <div class="mostrar_usuario">'.$mostrar['usuario'].'</div>
        <div class="fecha_mensage">'.$mostrar['fecha'].'</div></header><hr class="divisoria2">';
?>
<!DOCTYPE php>
<html lang="es">
<head>    <script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
</head>
<body>

    <?php
}
    ?>
</body>
 
<style>
    .contenedor_de_mensage {
        position: relative;
        background-color: rgb(116, 202, 116);
        width: 340px;
        height: 100px;
        font-family:Arial, Helvetica, sans-serif;
        border-bottom-right-radius: 15px;
        border-top-right-radius: 15px;
        margin:20px 0px;
        border: solid 2px #2b2b2b;
    }   
    .divisoria{
        border: solid 0.5px #2b2b2b;
        position:relative;
        
    }
    .divisoria2{
        width:60%;
        position: relative;
        border: solid 0.5px #2b2b2b;
        left:-80px;
        
    }
    .mensage {
        top: 0px;
        left: 10px;
        max-width: 300px;
        
        position: relative;
    }   .fecha_mensage {
        position: absolute;
        left: 240px;
        top: 5px;
        
        font-size:10px;
        background-color: rgb(196, 196, 196);
    }
    .mostrar_usuario {
        position: absolute;
        top: 5px;
        left:50px;
        color: black;
    }
</style>
