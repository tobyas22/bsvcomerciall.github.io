<?php
session_start();
if (isset($_SESSION['administradores'])) {
    echo '<div style="font-size: 30px;font-family: arial;color:dimgray;position:relative;left:30%;width:800px;" class="bienvenida">Bienvenido: '.$_SESSION['administradores'].' </div>';
} else {
    echo '<script>alert("en esta seccion es obligatori tener una cuenta de administrador para proceder, comunicate conel administrador para mas informacion");</script>
    <script>location="/administracion/"</script>
    ';
}


?>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <?php

include 'conexion.php';

if ($_POST) {
  
$nombre = $_POST['nombre_de_articulo'];
$precio =  $_POST['precio_de_producto' ];
$estado = $_POST['estado_de_articulo'];
$pos = $_POST['pos'];
$detalle = $_POST['detalle_de_articulo'];

$query = "INSERT INTO  productosbsv(nombre, estado,  precio, descripción, pos) 
VAlUES('$nombre', '$estado', '$precio','$detalle','$pos')";




$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
  echo(' 
  <center><h2>producto almasenado exitosamente</h2></center>
  ');
} else {
  echo('
  <center><h2>Fallo, por vafor intente lo de nuevo</h2></center>

  ');
} 
}


?>
        <!DOCTYPE html>

        <html lang="es">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>BSV herramientas de administracion - nuevo producto</title>
            <link rel="stylesheet" href="style.css">

            <style>
                .pos {
                    display: none;
                }
                
                .nuevo_producto {
                    top: 30px;
                    left: 100px;
                    width: 1070px;
                    height: 800px;
                    background-color: rgb(149, 155, 75);
                    position: relative;
                    border-radius: 39px;
                }
                
                h3 {
                    color: rgb(66, 66, 66);
                    font-family: sans-serif;
                }
                
                input {
                    position: relative;
                    width: 350px;
                    height: 30px;
                    font-size: 100%;
                    outline: none;
                }
                
                h1 {
                    font-family: cursive;
                }
                
                fieldset {
                    position: absolute;
                    left: 33%;
                    border-color: black;
                    border-top-color: blue;
                    animation-duration: 1s;
                    animation: ease infinite;
                }
                
                @keyframes spin {
                    0% {
                        transform: rotate(0deg);
                    }
                    100% {
                        transform: rotate(360deg);
                    }
                }
                
                .details1 {
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    font-size: 19px;
                    position: absolute;
                    background-color: rgb(173, 173, 173);
                    margin-left: 33.4%;
                    z-index: 5;
                    border: none;
                }
                
                .details2 {
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    font-size: 19px;
                    position: absolute;
                    background-color: rgb(196, 196, 196);
                    margin-left: 33.4%;
                    z-index: 4;
                }
                
                .details3 {
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    font-size: 19px;
                    position: absolute;
                    background-color: rgb(219, 219, 219);
                    margin-left: 33.4%;
                    z-index: 3;
                }
                
                .details4 {
                    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                    font-size: 19px;
                    position: absolute;
                    background-color: rgb(177, 177, 177);
                    margin-left: 33.4%;
                    z-index: 2;
                }
            </style>
        </head>

        <body>

            <div class="nuevo_producto">
                <center>
                    <h1>bsv Administracion - nuevo producto</h1>
                    <fieldset>
                        <form method="POST">
                            <br>
                            <h3>nombre del producto</h3>
                            <br><br>
                            <input required maxlength="25" class="form-control" placeholder="nombre del producto no debe ser largo" type="text" id="nombre_de_articulo" name="nombre_de_articulo"><br>

                            <details class="details1">el nombre es el que va a determina el tipo de producto que se esta ofreciendo, no debe ser muy largo si es posible porque podria salirce de proporciones ademas de que en algun tiempo se va a usar el nombre para un sitema de
                                busqueda de productos, encargaos de poner el nombre si es posible sin asentos ni comas o puntos
                            </details><br><br>
                            <br><br>
                            <h3>precio del producto</h3> <br>
                            <input required type="text" value="" class="form-control" placeholder="aqui el precio y y tambien el 'gs' " name="precio_de_producto" id="precio_de_producto">

                            <details class="details2">Se debe poner cualquier numero y al resultado se le va a agregar un '000 gs' automaticamente, ojo con este campo el valor maximo que se debe escrivir es de 10.000.000 en el campo</details>
                            <br>
                            <br><br><br>
                            <h3>estado del producto</h3>


                            <select id="estado_list" name="estado_de_articulo">
                                
                        <option value="Disponible">Disponible</option>
                        <option value="Agotado">Agotado</option>
                   </select>
                            <br>
                            <br>
                            <br>

                            <details align="center" class="details3">El estado de un producto determina que si esta disponible actualmente en stock los valores pueden ser 'disponible' o 'agotado' pero usted puede poner cualquier valor pero se recomienda que no exceda los 12 caracteres
                            </details><br>

                            <br>
                            <h3>Detalle del producto</h3>
                            <br>


                            <input required maxlength="90" class="form-control" placeholder="Los detalles del producto !max 89 caracteres¡" type="text" name="detalle_de_articulo" id="detalle_de_articulo">
                            <details class="details4">los detalles del producto se van a imprimir en vez de la foto del producto en el cabesalero de el recuadro</details>
                            <br><br>


                            <br>



                            <br>

                            <button type="submit" name="submit" value="">Guardar</button>
                            <input type="txt" class="pos" value="1" name="pos">
                        </form>
                    </fieldset>
                </center>



            </div>

        </body>

        </html>