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
    <style>
        .ctn_servicios_contenedor {
            position: absolute;
            width: 99%;
            background-color: rgb(94, 71, 37);
        }
        
        .ctn_servicios {
            margin-top: 50px;
            margin-left: 285px;
            position: relative;
            width: 700px;
            height: 300px;
            background-color: rgb(58, 202, 29);
            border-radius: 20px;
            border: solid 10px;
            border-color: black;
            border: outset;
        }
        /*desde aqui los stilos de productos*/
        
        .nombre_de_servicio {
            position: absolute;
            top: 10px;
            left: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        .nombre_de_servicio button {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            outline: none;
            background-color: rgba(87, 87, 87, 0.918);
            outline: none;
            border-radius: 8px;
        }
        
        .detalles_del_servicio {
            background-color: black;
            position: absolute;
            left: 140px;
            width: 560px;
            height: 190px;
            top: 0px;
            border-top-right-radius: 20px;
        }
        
        .detalles_en_texto_de_servicio {
            color: aliceblue;
            font-size: 25px;
            font-family: arial;
            margin-left: 5px;
        }
        
        .fecha_de_servicio {
            position: absolute;
            left: 500px;
            top: 250px;
        }
        
        .fecha_de_servicio button {
            background-color: rgb(0, 238, 255);
            border-radius: 8px;
            outline: none;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        .disponivilidad_de_producto {
            position: absolute;
            top: 250px;
            left: 140px;
        }
        
        .disponivilidad_de_producto button {
            width: 90px;
            outline: none;
            height: 30px;
            border-radius: 10px;
            background-color: rgba(240, 255, 255, 0.822);
        }
        
        .parametros_de_servicio {
            position: absolute;
            top: 150px;
            left: 20px;
        }
        
        .parametros_de_servicio button {
            max-width: 120px;
            border-radius: 4px;
            border: none;
            outline: none;
        }
    </style>
    <style>
        .previa_de_servicio {
            z-index: 4;
            position: absolute;
            width: 100%;
            top: 1390px;
        }
        
        .nuevo_producto {
            top: 30px;
            left: 100px;
            width: 1070px;
            height: 1190px;
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


    <!DOCTYPE html>










    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSV herramientas de administracion - nuevo servicio</title>
    </head>

    <body>



        <div class="nuevo_producto">
            <center>
                <h1>bsv Administracion - nuevo servicio</h1>
                <fieldset>
                    <form method="POST" action="registrar_sevicio.php">
                        <br>
                        <h3>nombre del servicio</h3>
                        <br><br>
                        <input class="form-control" maxlength="25" placeholder="nombre del servicio" type="text" id="nombre_de_servicio" name="nombre_de_servicio"><br>

                        <details class="details1">
                            el nombre del servicio se muestra en el contenedor del servicio como modo de indentificacion para las busquedas y para que el usuario pueda reconocer el servicio
                        </details><br><br>
                        <h3>contenido del servicio</h3>
                        <br>
                        <input class="form-control" placeholder="contenido del servicio" type="text" id="" name="contenido_de_servicio"><br>

                        <details class="details1">
                            el nombre del servicio se muestra en el contenedor del servicio como modo de indentificacion para las busquedas y para que el usuario pueda reconocer el servicio
                        </details><br><br>
                        <h3>parametros del servicio</h3> <br>
                        <input class="form-control" type="text" placeholder="parametros del servicio" name="parametros_de_servicio" id="parametros_de_servicio">

                        <details class="details2">Los parametros son opcionales si no va a darle ningun valor no ponga nada en el camo incluyendo espacios, esto sirve para que se le ponga algun requerimiento al servicio se muestre </details>
                        <br>
                        <br>
                        <h3>estado del servicio</h3>
                        <input class="form-control" placeholder="el estado del servicio " list="estado_list" value="disponible" maxlength="12" name="estado_de_servicio" type="text">

                        <datalist id="estado_list">
                        <option value="Disponible">
                        <option value="indisponible">
                   </datalist>

                        <details class="details3">los estados tienen la misma funcion que la de los productos, para que el usuario pueda saver si se encuentra disponible actualmente
                        </details><br>

                        <br>
                        <h3>Detalle del servicio</h3>
                        <br>


                        <input class="form-control" placeholder="Los detalles del servicio" type="text" name="detalle_de_servicio" id="detalle_de_servicio">
                        <details class="details4">los detalles del servicio se imprimen en la parte mas grande de el contenedor de servicio podras ver un pequeño ejemplo de el resultado </details>
                        <br><br>

                        <h3>comentario del servicio</h3>
                        <br>


                        <input class="form-control" placeholder="El comentario del servicio" type="text" name="comentario_de_servicio" id="detalle_de_servicio">
                        <details class="details4">Los comentarios no se van a ver en servicios solo se mostraran cuando se oprima mostrar mas </details>
                        <br>
                        <br>
                        <h3>Feha de publicacion</h3>

                        <input type="button" value="este formulario se crea automaticamente">

                        <details class="details4">las fechas de publicacion son fechas que ayudan al usuario para calcular cuando fue el lansamiento del articulo, este contenido no puede ser editado porque se le crea el valor automaticamente por eso verifica si la fecha y hora
                            estan bien en tu ordenador </details>
                        <br><br>

                        <br>



                        <br>

                        <button class="btn btn-info" type="submit" name="submit" value="">Guardar</button>

                    </form>

                </fieldset>
            </center>



        </div>


    </body>

    </html>