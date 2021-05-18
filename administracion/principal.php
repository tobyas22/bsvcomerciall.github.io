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
    <script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gestor de Administracion</title>
    </head>

    <body>
        <div class="instruccion">Hola bienvenido al gestor de administraciones </div>
        <div class="txt1">En esta sección podrás entrar fácilmente a todos tus espacios de trabajos administrativos</div>
        <div class="txt2_enlases">Enlases:</div>
        <div class="ctn_enlases">
            <nav>
                <a class="n_noticia" href="./noticias/noticias.php">Nueva Noticia</a>
                <a class="n_producto" href="./php/nuevo_producto.php">Nuevo Producto</a>
                <a class="n_servicio" href="./php/registrar_editar_servicio.php">Nuevo Servicio</a>
            </nav>
            <div class="nav"><a href="/administracion/ver/usuarios.php">Ver lista de Usuarios</a></div> <br>
          <div class="nav">  <a href="/administracion/covid/actualizar.php">Actualizar datos de coronavirus</a></div>
            
        </div>

    </body>

    </html>
    <style>
        body {
            transition: 3s;
        }
        
        .instruccion {
            position: absolute;
            left: 100px;
            font-size: 50px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        .txt1 {
            position: absolute;
            top: 100px;
            font-size: 25px;
            font-family: arial;
            left: 100px;
        }
        
        .txt2_enlases {
            position: absolute;
            top: 150px;
            font-size: 25px;
            font-family: arial;
            left: 100px;
        }
        
        .ctn_enlases {
            position: absolute;
            top: 200px;
            left: 100px;
            width: 77.7%;
            transition: 5s;
            height: 600px;
            background-color: rgb(179, 179, 179);
        }
        
        .ctn_enlases:hover {
            position: absolute;
            top: 200px;
            left: 100px;
            width: 77.7%;
            transition: 5s;
            height: 600px;
            background-color: rgb(156, 156, 156);
        }
        
        .ctn_enlases nav {
            position: inherit;
            margin-top: 200px;
            margin-left: 50px;
            transition: 5s;
        }
        
        .n_noticia {
            margin-left: 100px;
            position: absolute;
            background-color: rgb(75, 75, 75);
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            transition: 1s;
            width: 200px;
            font-family: arial;
            color: black;
            padding-top: 40px;
        }
        
        .n_noticia:hover {
            margin-left: 100px;
            position: absolute;
            background-color: rgb(0, 0, 0);
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            width: 200px;
            transform: translateY(110px);
            transition: 1s;
            font-family: arial;
            color: rgb(255, 255, 255);
            padding-top: 40px;
        }
        
        .n_producto {
            margin-left: 340px;
            position: absolute;
            background-color: rgb(75, 75, 75);
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            transition: 1s;
            width: 220px;
            font-family: arial;
            color: black;
            padding-top: 40px;
        }
        
        .n_producto:hover {
            margin-left: 340px;
            position: absolute;
            background-color: rgb(0, 0, 0);
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            width: 220px;
            transition: 1s;
            font-family: arial;
            color: rgb(255, 255, 255);
            padding-top: 40px;
            transform: translateY(110px);
        }
        
        .n_servicio {
            margin-left: 610px;
            position: absolute;
            background-color: rgb(75, 75, 75);
            width: 200px;
            padding-top: 40px;
            transition: 1s;
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            font-family: arial;
            color: black;
        }
        
        .n_servicio:hover {
            margin-left: 610px;
            position: absolute;
            background-color: rgb(0, 0, 0);
            width: 200px;
            padding-top: 40px;
            transition: 1s;
            font-size: 29px;
            text-decoration: none;
            height: 80px;
            font-family: arial;
            color: rgb(255, 255, 255);
            transform: translateY(110px);
        }
    </style>