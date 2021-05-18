<style>
    @media screen and (max-width: 1200px) {
        .posts {
            grid-template-columns: repeat(3, 1fr);
        }
    }
    
    @media screen and (max-width: 900px) {
        .posts {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    
    @media screen and (max-width: 580px) {
        .posts {
            grid-template-columns: repeat(1, 1fr);
        }
    }
    
    body {
        animation: infinite;
        animation-duration: 30s;
        animation-name: fondo_transicion;
    }
    
    @keyframes fondo_transicion {
        0% {
            background-color: rgb(255, 255, 255);
        }
        10% {
            background-color: rgb(80, 172, 107);
        }
        20% {
            background-color: rgb(80, 166, 172);
        }
        30% {
            background-color: rgb(82, 80, 172);
        }
        40% {
            background-color: rgb(172, 80, 164);
        }
        50% {
            background-color: rgb(172, 80, 80);
        }
        60% {
            background-color: rgb(172, 148, 80);
        }
        70% {
            background-color: rgb(88, 172, 80);
        }
        80% {
            background-color: rgb(168, 115, 85);
        }
        80% {
            background-color: rgb(255, 0, 0);
        }
        100% {
            background-color: rgb(255, 255, 255);
        }
    }
    
    .portada-arriva {
        box-shadow: 0 4px 25px -22px black;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 150px;
        background: #fff;
        box-shadow: 0 18px 25px -22px black;
        z-index: 10;
    }
    
    .texto-deportada {
        list-style: none;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
    
    .menu-de-arriva {
        position: absolute;
        display: flex;
    }
    
    .menus-de-arriva {
        padding: auto;
        justify-content: space-between;
    }
    
    .menus-de-arriva ul {
        padding-left: 900px;
        margin-top: -160px;
        display: flex;
        justify-content: space-between;
    }
    
    .menus-de-arriva ul li {
        height: 100%;
        margin: -29px 5px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
    }
    
    .bienvenidos {
        justify-content: center;
        z-index: 1;
    }
    
    .menu-seleted {
        background-color: rgb(255, 255, 255);
    }
    
    .menu-seleted:hover {
        background-color: aquamarine;
        color: rgb(51, 255, 0);
    }
    
    .menus-listas a:hover {
        font-size: 24px;
        background-color: rgba(0, 0, 0, 0.548);
    }
    /*desde aqui se trata de el blog */
    /*DESPLEGABLES*/
    
    .desplegable-hover-blog:hover {
        transition: 0.5s;
        background-color: rgba(66, 66, 66, 0.562);
    }
    
    .ctn-productos-desplegable1 {
        z-index: 15;
        list-style: none;
        position: fixed;
        top: 129px;
        left: 1066px;
    }
    
    .ctn-productos-desplegable1 a {
        position: absolute;
        width: 92px;
        color: rgb(44, 44, 44);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-decoration: none;
        padding: 8px;
        background-color: rgba(0, 0, 0, 0.336);
    }
    
    .ctn-productos-desplegable2 {
        z-index: 15;
        list-style: none;
        position: fixed;
        top: 156px;
        left: 1058px;
        width: 92px;
        padding: 8px;
    }
    
    .ctn-productos-desplegable2 a {
        position: absolute;
        text-decoration: none;
        width: 92px;
        padding: 8px;
        color: rgb(44, 44, 44);
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        background-color: rgba(0, 0, 0, 0.336);
    }
    /*/DESPLEGABLES*/
    
    @media screen and (max-width: 1220px) {
        .header-content,
        .container-footer footer {
            max-width: 1000px;
            padding: 0 20px;
        }
    }
    
    @media screen and (max-width: 1030px) {
        .portada-arriva {
            box-shadow: 0 4px 25px -22px black;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 120px;
            background: #fff;
            box-shadow: 0 18px 25px -22px black;
            z-index: 10;
        }
        .login_register {
            position: absolute;
            z-index: 10;
            width: 120px;
            height: 100px;
            left: 250px;
        }
    }
</style>


<head>


    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <meta name="autor" content="Tobyas Sosa">
    <title>BSV | promociones</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/php;charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <header class="portada-arriva">
        <li class="texto-deportada">
            <img class="bsv-logo" src="/bsvComercial//asets/img/logo-bsv.gif" alt="bsvcomercial logo de empresa Bernardo Sosa B S V COMERCIAL" srcset="">
        </li>
        <div class="separador"></div>
        <script></script>
        <div class="container-fluid ">
            <div class="row ">
                <!--para dispositivos-->
                <div class="w-50 d-inline d-sm-none justify-content-end " style="position: relative; left: 80%;top:-30px;">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"><img class="w-25 " src="/bsvComercial/asets/img/icon-mnu.gif" alt=""></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item " href="/bsvComercial/inicio.php">Inicio</a>
                                <a class="dropdown-item " href="/bsvComercial/blog.php"> Blog </a>
                                <a class="dropdown-item " href="/bsvComercial/productos.php"> Productos </a>
                                <a class="dropdown-item " href="/bsvComercial/contactos.php"> Contacto </a>
                                <hr class="nav">
                                <a href="/bsvComercial/servicios.php" class="dropdown-item">Servicios</a>
                                <a href="/bsvComercial/accesos/promociones/" class="dropdown-item active">Publicaciones</a>
                                <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>
                                <a href="/pruevas/" class="dropdown-item">Chat Grupal</a>
                            </div>

                        </li>
                    </ul>
                </div>

                <!--para PCs-->
                <div class="col-7  col-md ">
                    <ul class="nav d-none d-sm-flex justify-content-sm-end  nav-pills">
                        <li class="nav-item"><a class="nav-link " href="/bsvComercial/inicio.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link " href="/bsvComercial/blog.php"> Blog </a></li>
                        <li class="nav-item "><a class="nav-link  " href="/bsvComercial/productos.php"> Productos </a></li>
                        <li class="nav-item"><a class="nav-link " href="/bsvComercial/contactos.php"> Contacto </a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> más </a>
                            <div class="dropdown-menu">
                                <a href="/bsvComercial/servicios.php" class="dropdown-item ">Servicios</a>
                                <a href="/bsvComercial/accesos/promociones/" class="dropdown-item active">Publicaciones</a>
                                <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>
                                <a href="/pruevas/" class="dropdown-item">Chat Grupal</a>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <style>
            .separador {
                position: relative;
                margin-top: 70px;
            }
            
            .bsv-logo {
                position: absolute;
                width: 20%;
                z-index: 2;
            }
            
            .form_buscar {
                position: relative;
                z-index: 999;
            }
            
            @media (max-width:450px) {
                .bsv-logo {
                    top: 0px;
                    width: 60%;
                    z-index: 1;
                }
            }
        </style>
    </header>

</body>




<?php

$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");


$sql = "SELECT * FROM Herramientas_pu";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){
echo '

<div style="color: '.$mostrar['texto_color_a'].'; 
font-family:'.$mostrar['fuente_a'].';  
box-shadow: '.$mostrar['d_derecha'].'px/* Direccion dercha*/
'.$mostrar['d_abajo'].'px/* Direccion abajo*/
6px/* color sombra*/'.$mostrar['sombra_color_a'].';
border-radius: '.$mostrar['b_borde_r'].'px;

background-color:'.$mostrar['fondo_color_a'].' ;
" class="ctn_public">
    <div class="nombre_a">'.$mostrar['nombre_a'].'
        <n>De:'.$mostrar['usuario_n'].'
            <!-- nombre de usuario -->


        </n>
    </div>
    <div class="ctn_imagen"><img class="imagen_a" src="/bsvComercial/herramientas/202121t45o65b52y73a54/suvidasImagenes/'.$mostrar['imgProducto'].'" alt="'.$mostrar['nombre_a'].'">
        <div class="detalles_articulo">
            <div class="emitido_por">Publicado por : '.$mostrar['usuario_n'].' </div><hr>
            <div class="informacion_a">Informacion: '.$mostrar['informacion_a'].' </div><hr>
            <div class="contenido_a">Contenido: '.$mostrar['contenido_a'].' </div><hr>
            <div class="contacto_a">Detalles De contacto: '.$mostrar['contacto_informacion'].' </div>
        </div>
    </div>


    <div class="informacion_contactos">
        <p>Informacion de Contacto</p>
        <a href="tel'.$mostrar['numero_tel'].':  ">Numero de telefono</a> <br>
        <a href="mailto:'.$mostrar['correo_e'].'  ">Gmail</a> <br>
    </div>


    <div class="ctn_fecha">Fue publicado el: '.$mostrar['Fecha'].'</div>


</div>

<style>
    .ctn_public {
        position: relative;
        min-height: 400px;
        width: 800px;
        left: 200px;
        padding: 20px 20px;
        margin-top: 100px;
        border: solid 5px black;
        top:100px;
       
    }
    
    .ctn_imagen {
        width: 100px;
        position: relative;
        display: flex;
    }
    
    .imagen_a {
        width: 300px;
    }
    
    .informacion_contactos {
        position: relative;
    }
    
    .informacion_contactos p {
        font-size: 20px;
    }
    
    .informacion_contactos a {
        text-decoration: none;
        font-size: 17px;
    }
    
    .detalles_articulo {
        position: relative;
        top: 0px;
        left: 10px;
        width: 300px;
    }
    
    .emitido_por {
        position: relative;
        top: 0px;
        left: 0px;
        width: 300px;
    }
    
    .nombre_a {
        font-size: 50px;
    }
    
    .ctn_fecha {
        position: absolute;
        left: 550px;
        top:0px;
    }
    
    .emitido_por {
        position: relative;
        font-size: 30px;
        width: 400px;
    }
    
    .informacion_a {
        position: relative;
        font-size: 20px;
    }
    
    .contenido_a {
        position: relative;
        font-size: 24px;
    }
    .contacto_a{  
        position: relative;
        font-size: 20px;
    }
</style>


';







}

?>
    <style>
        @media (max-width: 1050px) {
            .ctn_public {
                position: relative;
                min-height: 400px;
                width: 358px;
                left: 0px;
                padding: 20px 20px;
                margin-top: 100px;
                border: solid 5px black;
                top: 50px;
            }
            .ctn_imagen {
                width: 50px;
                position: relative;
                display: flex;
            }
            .imagen_a {
                width: 100px;
                height: 150px;
            }
            .informacion_contactos {
                position: relative;
            }
            .informacion_contactos p {
                font-size: 15px;
            }
            .informacion_contactos a {
                text-decoration: none;
                font-size: 17px;
            }
            .detalles_articulo {
                position: relative;
                top: 0px;
                left: 10px;
                width: 220px;
            }
            .emitido_por {
                position: relative;
                top: 0px;
                left: 0px;
                width: 300px;
            }
            .nombre_a {
                font-size: 20px;
            }
            .ctn_fecha {
                position: relative;
                left: 100px;
                width: 220px;
                top: 0px;
                font-size: 20px;
            }
            .emitido_por {
                position: relative;
                font-size: 15px;
                width: 200px;
            }
            .informacion_a {
                position: relative;
                font-size: 15px;
                width: 200px;
            }
            .contenido_a {
                position: relative;
                font-size: 14px;
                width: 220px;
            }
            .contacto_a {
                position: relative;
                font-size: 15px;
                width: 220px;
                z-index: 5;
            }
        }
    </style>