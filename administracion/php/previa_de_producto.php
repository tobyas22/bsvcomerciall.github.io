<?php



$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");


$sql = "SELECT * FROM productosbsv";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){
echo '
<div class="ctn_contenedor_de_productos" >
<div class="resultado_de_procucto">

<div class="detalles_resultado"><h2 name="detalles_resultado_bd">' .$mostrar['descripción'] .     ' </h2></div>
<div class="precio_resultado"><button name="precio_resultado_bd">' .$mostrar['precio'] .     ' </button></div>
<div class="estado_resultado"><button name="estado_resultado_bd">' .$mostrar['estado'] .     ' </button></div>
<div class="nombre_resultado"><button name="nombre_resultado_bd">' .$mostrar['nombre'] .     ' </button></div>

</div>


</div>



';


}






?>
 <style>
     .ctn_contenedor_de_productos{
         display:inline-flex;
        position:relative;
        padding-left:20px;
        padding-top:20px;
        
        }
        .resultado_de_procucto {
            background-color:rgb(101, 124, 100);
            position: relative;
            width: 200px;
            height: 200px; 
            border: 4px;
            border-color: rgba(73, 104, 172, 0.753);
            border-radius: 10px;
            box-shadow: 12px 7px 3px rgb(66, 66, 66) ;
        }
        
        .precio_resultado button {
            position: relative;
            top: 41px;
            left: 10px;
            color: rgb(56, 56, 56);
            box-shadow: 12px 7px 3px black ;
        }
        
        .nombre_resultado button {
            position: relative;
            top: -2px;
            left: 110px;
            color: rgb(56, 56, 56);
             box-shadow: 12px 7px 3px black ;
        }
        
        .estado_resultado button {
            position: relative;
            top: -17px;
            left: 110px;
            color: rgb(56, 56, 56);
             box-shadow: 12px 7px 3px black ;
        }
        
        .detalles_resultado {
            color: rgb(65, 65, 65);
            font-family: Arial, Helvetica, sans-serif;
            font-style: normal;
            position:relative;
            height:100px;
            text-decoration: solid;
            cursor: pointer;
        }
    </style>