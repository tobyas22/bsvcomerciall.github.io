

<?php

include 'conexion.php';









/*
$ver_productos_tablas = mysqli_query($conexion, "SELECT * FROM productosbsv  WHERE nombre and estado and precio and descripción");
*/


?>




<!DOCTYPE html>
<html lang="es" >

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Previa</title>
    <link rel="stylesheet" href="previa.css">
    <style>
        .resultado_de_procucto {
            background-color: rgb(163, 163, 163);
            position: absolute;
            width: 200px;
            height: 200px;
            border-radius: 10px;
        }
        
        .precio_resultado button {
            position: absolute;
            top: 165px;
            left: 10px;
            color: rgb(56, 56, 56);
        }
        
        .nombre_resultado button {
            position: absolute;
            top: 165px;
            left: 110px;
            color: rgb(56, 56, 56);
        }
        
        .estado_resultado button {
            position: absolute;
            top: 135px;
            left: 110px;
            color: rgb(56, 56, 56);
        }
        
        .detalles_resultado {
            color: rgb(65, 65, 65);
            font-family: Arial, Helvetica, sans-serif;
            font-style: normal;
            text-decoration: solid;
            cursor: pointer;
        }
    </style>
</head>

<body>
    
<?php
$sql = "SELECT * FROM productosbsv";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){

?>
    <div class="resultado_de_procucto">



        <div class="detalles_resultado">
            <h2 name="detalles_resultado_bd"><?php    echo  $mostrar['descripción'];    ?>   </h2>
        </div>
        <div class="precio_resultado"><button name="precio_resultado_bd"><?php    echo  $mostrar['precio'] ;   ?>   </button></div>
        <div class="estado_resultado"><button name="estado_resultado_bd"><?php    echo  $mostrar['estado'] ;   ?>   </button></div>
        <div class="nombre_resultado"><button name="nombre_resultado_bd"><?php    echo  $mostrar['nombre'];    ?>   </button></div>
   
   
    </div>
   <?php
   }
   
   
   ?>
</body>

</html>
