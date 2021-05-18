<!DOCTYPE html>

<html lang="es">

<head>
    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <meta name="athor" content="Tobyas Sosa">
    <meta name="autor" content="Tobyas Sosa">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Observa y decubre todos los servicios que ofrece bsvcomercial">

    <title>BSV comercial | Servicios </title>
    <link rel="stylesheet" href="./css/servicios.css">
    <link rel="shortcut icon" href="./asets/img/icono.jpg" type="image/x-icon">


</head>

<body>

    <header class="portada-arriva">
        <li class="texto-deportada">
            <img class="bsv-logo" src="./asets/img/logo-bsv.gif" alt="bsvcomercial logo de empresa Bernardo Sosa B S V COMERCIAL" srcset="">
        </li>
        <div class="separador"></div>
        <script></script>
        <div class="container-fluid ">
            <div class="row ">
                <!--para dispositivos-->
                <div class="w-50 d-inline d-sm-none justify-content-end " style="position: relative; left: 83%;top:-30px;">
                    <ul class="nav nav-pills">
                        <li class="nav-item dropdown">
                            <a class="nav-link" data-toggle="dropdown" href="#"><img class="w-25 " src="/bsvComercial/asets/img/icon-mnu.gif" alt=""></a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item " href="./inicio.php">Inicio</a>
                                <a class="dropdown-item " href="./blog.php"> Blog </a>
                                <a class="dropdown-item " href="./productos.php"> Productos </a>
                                <a class="dropdown-item " href="./contactos.php"> Contacto </a>
                                <hr class="nav">
                                <a href="/bsvComercial/servicios.php" class="dropdown-item active">Servicios</a>
                                <a href="/bsvComercial/accesos/promociones/" class="dropdown-item">Publicaciones</a>
                                <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>

                                <a href="/pruevas/" class="dropdown-item">Chat Grupal</a>
                            </div>

                        </li>
                    </ul>
                </div>

                <!--para PCs-->
                <div class="col-7  col-md ">
                    <ul class="nav d-none d-sm-flex justify-content-sm-end  nav-pills">
                        <li class="nav-item"><a class="nav-link " href="./inicio.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link " href="./blog.php"> Blog </a></li>
                        <li class="nav-item "><a class="nav-link  " href="./productos.php"> Productos </a></li>
                        <li class="nav-item"><a class="nav-link " href="./contactos.php"> Contacto </a></li>
                        <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> más </a>
                            <div class="dropdown-menu">
                                <a href="/bsvComercial/servicios.php" class="dropdown-item active">Servicios</a>
                                <a href="/bsvComercial/accesos/promociones/" class="dropdown-item">Publicaciones</a>
                                <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>

                                <a href="/pruevas/" class="dropdown-item">Chat Grupal</a></div>
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
            
            .ctn-servicios-all {
                position: relative;
                background-color: #87b958;
                border: #253318 solid 1px;
                border-radius: 4px;
                padding: 20px 20px;
                font-family: arial;
                font-size: x-large;
                font-style: normal;
                text-overflow: ellipsis;
                margin-top: 20px;
                width: 700px;
                height: 280px;
            }
            
            .ctn-servicios-all:active {
                position: relative;
                background-color: #8abe58;
                border: #253318 solid 2px;
                border-radius: 5px;
                padding: 21px 21px;
                font-family: arial;
                font-size: x-large;
                font-style: normal;
                text-overflow: ellipsis;
            }
            
            .ctn-servicios-all:hover {
                position: relative;
                background-color: #7baa4e;
                border: #526e38 solid 1px;
                border-radius: 4px;
                padding: 20px 20px;
                font-family: arial;
                font-size: x-large;
                font-style: normal;
                text-overflow: ellipsis;
            }
            
            .btn-nombre {
                position: absolute;
                margin-top: 4px;
                padding: 10px;
                left: 7px;
                font-size: 19px;
                max-width: 150px;
                background-color: #3685e0;
                border: none;
                box-shadow: 0px 0px 12px black;
                border-radius: 7px;
                color: black;
            }
            
            .btn-condiciones {
                position: absolute;
                top: 30%;
                left: 0px;
                font-size: 20px;
                max-width: 150px;
                background-color: #0278ff;
                border: none;
                box-shadow: 0px 0px 12px black;
                border-radius: 7px;
                color: black;
            }
            
            .btn-disponibilidad {
                position: absolute;
                top: 82%;
                left: 80%;
                padding: 10px;
                font-size: 19px;
                max-width: 150px;
                background-color: #3685e0;
                border: none;
                border-radius: 7px;
                color: black;
            }
            
            .txt-contenido {
                position: absolute;
                font-size: 100%;
                margin-left: 150px;
                top: 10px;
                border-left: solid 2px black;
                width: 75%;
                height: 75%;
            }
            
            .link-saver-mas {
                position: absolute;
                top: 239px;
                left: 330px;
                color: rgb(60, 60, 255);
                text-decoration: none;
            }
            
            .link-saver-mas:hover {
                color: rgb(0, 0, 255);
                text-decoration: underline;
            }
            
            .ctn-fecha {
                position: absolute;
                top: 65%;
                left: 0px;
                font-size: 20px;
                padding: 1px;
                border: solid 1px #575757;
            }
            
            .ctn-info-servi {
                position: absolute;
                top: 80%;
                padding: 5px;
                left: 24%;
            }
            
            @media (max-width:1030px) {
                .ctn-servicios-all {
                    position: relative;
                    background-color: #87b958;
                    border: #253318 solid 1px;
                    border-radius: 4px;
                    padding: 20px 20px;
                    font-family: arial;
                    font-size: x-large;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 650px;
                    height: 240px;
                }
                .btn-nombre {
                    top: 0px;
                }
                .ctn-info-servi {
                    position: absolute;
                    top: 170px;
                    padding: 5px;
                    left: 24%;
                }
                .link-saver-mas {
                    position: absolute;
                    top: 149px;
                    left: 80%;
                    color: rgb(60, 60, 255);
                    text-decoration: none;
                }
                .link-saver-mas:hover {
                    color: rgb(0, 0, 255);
                    text-decoration: underline;
                }
                .ctn-fecha {
                    position: absolute;
                    top: 60%;
                    left: 0px;
                    font-size: 20px;
                    padding: 1px;
                    border: solid 1px #575757;
                }
            }
            
            @media (max-width:830px) {
                .ctn-servicios-all {
                    position: relative;
                    background-color: #87b958;
                    border: #253318 solid 1px;
                    border-radius: 4px;
                    padding: 20px 20px;
                    font-family: arial;
                    font-size: x-large;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 530px;
                    height: 210px;
                }
                .btn-nombre {
                    position: absolute;
                    margin-top: 5px;
                    padding: 3px;
                    left: 2px;
                    font-size: 19px;
                    max-width: 150px;
                    background-color: #3685e0;
                    border: none;
                    box-shadow: 0px 0px 12px black;
                    border-radius: 7px;
                    color: black;
                }
                .btn-condiciones {
                    position: absolute;
                    top: 30%;
                    left: 0px;
                    font-size: 13px;
                    background-color: #0278ff;
                    border: none;
                    box-shadow: 0px 0px 12px black;
                    border-radius: 7px;
                    color: black;
                }
                .ctn-fecha {
                    position: absolute;
                    top: 55%;
                    font-size: 15px;
                    padding: 2px;
                    left: 1px;
                    border: solid 1px #575757;
                }
                .ctn-info-servi {
                    font-size: 20px;
                    left: 10px;
                    top: 71%;
                    max-width: 400px;
                    text-decoration: underline;
                    text-transform: capitalize;
                }
                .link-saver-mas {
                    position: absolute;
                    top: 170px;
                    font-size: 18px;
                    left: 330px;
                    color: rgb(60, 60, 255);
                    text-decoration: none;
                }
                .link-saver-mas:hover {
                    color: rgb(0, 0, 255);
                    text-decoration: underline;
                }
                .txt-contenido {
                    position: absolute;
                    font-size: 70%;
                    margin-left: 150px;
                    top: 10px;
                    border-left: solid 2px black;
                    width: 60%;
                    height: 75%;
                }
                .btn-disponibilidad {
                    position: absolute;
                    top: 82%;
                    left: 80%;
                    padding: 1px;
                    font-size: 19px;
                    max-width: 150px;
                    background-color: #3685e0;
                    border: none;
                    border-radius: 7px;
                    color: black;
                }
            }
            
            @media (max-width:610px) {
                .ctn-servicios-all {
                    position: relative;
                    background-color: #87b958;
                    border: #253318 solid 1px;
                    border-radius: 4px;
                    padding: 20px 20px;
                    font-family: arial;
                    font-size: 15px;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 450px;
                    height: 200px;
                }
                .ctn-servicios-all:hover {
                    position: relative;
                    background-color: #87c051;
                    border: #253318 solid 1px;
                    border-radius: 4px;
                    padding: 20px 20px;
                    font-family: arial;
                    font-size: 15px;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 450px;
                    height: 200px;
                }
                .btn-disponibilidad {
                    position: absolute;
                    top: 160px;
                    left: 80%;
                    padding: 1px;
                    font-size: 19px;
                    max-width: 150px;
                    background-color: #3685e0;
                    border: none;
                    border-radius: 7px;
                    color: black;
                }
                .ctn-fecha {
                    position: absolute;
                    top: 45%;
                    left: 0px;
                    font-size: 13px;
                    padding: 1px;
                    border: solid 1px #575757;
                }
                .ctn-info-servi {
                    position: absolute;
                    top: 140px;
                    padding: 5px;
                    left: 0px;
                }
                .txt-contenido {
                    font-size: 14px;
                }
                .link-saver-mas {
                    position: absolute;
                    top: 130px;
                    left: 80%;
                    color: rgb(60, 60, 255);
                    text-decoration: none;
                }
                .link-saver-mas:hover {
                    color: rgb(0, 0, 255);
                    text-decoration: underline;
                }
            }
            
            @media (max-width:400px) {
                .ctn-servicios-all {
                    position: relative;
                    background-color: #87b958;
                    border: #253318 solid 1px;
                    border-radius: 3px;
                    padding: 10px 10px;
                    font-family: arial;
                    font-size: 14px;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 320px;
                    min-height: 70px;
                }
                .ctn-servicios-all:hover {
                    position: relative;
                    background-color: #87b958;
                    border: #253318 solid 1px;
                    border-radius: 3px;
                    padding: 10px 10px;
                    font-family: arial;
                    font-size: 14px;
                    font-style: normal;
                    text-overflow: ellipsis;
                    width: 320px;
                    min-height: 70px;
                }
                .btn-nombre {
                    position: absolute;
                    margin-top: 1px;
                    padding: 1px;
                    left: 2px;
                    font-size: 12px;
                    max-width: 80px;
                    background-color: #3685e0;
                    border: none;
                    box-shadow: 0px 0px 12px black;
                    border-radius: 2px;
                    color: black;
                }
                .btn-condiciones {
                    position: relative;
                    top: 17px;
                    left: -115px;
                    font-size: 11px;
                    background-color: #0278ff;
                    border: none;
                    max-width: 85px;
                    box-shadow: 0px 0px 12px black;
                    border-radius: 7px;
                    color: black;
                }
                .btn-disponibilidad {
                    position: absolute;
                    top: 82%;
                    left: 80%;
                    padding: 1px;
                    font-size: 13px;
                    max-width: 150px;
                    background-color: #3685e0;
                    border: none;
                    border-radius: 7px;
                    color: black;
                }
                .ctn-info-servi {
                    display: none;
                }
                .ctn-fecha {
                    position: relative;
                    top: 56px;
                    left: -110px;
                    font-size: 12px;
                    border: solid 1px #575757;
                }
                .txt-contenido {
                    position: absolute;
                    font-size: 100%;
                    margin-left: 80px;
                    top: 10px;
                    border-left: solid 2px black;
                    width: 75%;
                    height: 75%;
                }
                .link-saver-mas {
                    position: absolute;
                    top: 170px;
                    left: 120px;
                    font-size: 14px;
                    color: rgb(60, 60, 255);
                    text-decoration: none;
                }
                .link-saver-mas:hover {
                    position: absolute;
                    color: rgb(0, 0, 255);
                    text-decoration: underline;
                }
            }
        </style>
        <form class="d-flex  justify-content-center form_buscar" action="busqueda.php" method="GET">

            <input class="btn-block    btn-group-sm w-50 " placeholder="Buscar productos" name="busqueda" type="text">

            <div><button class="border h-100 badge-danger" type="submit"><i type="button" ><svg viewBox="0 0 16 16" width="16px" height="16px" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px;"><path d="M10.5 0C11.0052 0 11.4922 0.0651042 11.9609 0.195312C12.4297 0.325521 12.8672 0.510417 13.2734 0.75C13.6797 0.989583 14.0495 1.27865 14.3828 1.61719C14.7214 1.95052 15.0104 2.32031 15.25 2.72656C15.4896 3.13281 15.6745 3.57031 15.8047 4.03906C15.9349 4.50781 16 4.99479 16 5.5C16 6.00521 15.9349 6.49219 15.8047 6.96094C15.6745 7.42969 15.4896 7.86719 15.25 8.27344C15.0104 8.67969 14.7214 9.05208 14.3828 9.39062C14.0495 9.72396 13.6797 10.0104 13.2734 10.25C12.8672 10.4896 12.4297 10.6745 11.9609 10.8047C11.4922 10.9349 11.0052 11 10.5 11C9.84896 11 9.22396 10.8906 8.625 10.6719C8.03125 10.4531 7.48438 10.138 6.98438 9.72656L0.851562 15.8516C0.752604 15.9505 0.635417 16 0.5 16C0.364583 16 0.247396 15.9505 0.148438 15.8516C0.0494792 15.7526 0 15.6354 0 15.5C0 15.3646 0.0494792 15.2474 0.148438 15.1484L6.27344 9.01562C5.86198 8.51562 5.54688 7.96875 5.32812 7.375C5.10938 6.77604 5 6.15104 5 5.5C5 4.99479 5.0651 4.50781 5.19531 4.03906C5.32552 3.57031 5.51042 3.13281 5.75 2.72656C5.98958 2.32031 6.27604 1.95052 6.60938 1.61719C6.94792 1.27865 7.32031 0.989583 7.72656 0.75C8.13281 0.510417 8.57031 0.325521 9.03906 0.195312C9.50781 0.0651042 9.99479 0 10.5 0ZM10.5 10C11.1198 10 11.7031 9.88281 12.25 9.64844C12.7969 9.40885 13.2734 9.08594 13.6797 8.67969C14.0859 8.27344 14.4062 7.79688 14.6406 7.25C14.8802 6.70312 15 6.11979 15 5.5C15 4.88021 14.8802 4.29688 14.6406 3.75C14.4062 3.20312 14.0859 2.72656 13.6797 2.32031C13.2734 1.91406 12.7969 1.59375 12.25 1.35938C11.7031 1.11979 11.1198 1 10.5 1C9.88021 1 9.29688 1.11979 8.75 1.35938C8.20312 1.59375 7.72656 1.91406 7.32031 2.32031C6.91406 2.72656 6.59115 3.20312 6.35156 3.75C6.11719 4.29688 6 4.88021 6 5.5C6 6.11979 6.11719 6.70312 6.35156 7.25C6.59115 7.79688 6.91406 8.27344 7.32031 8.67969C7.72656 9.08594 8.20312 9.40885 8.75 9.64844C9.29688 9.88281 9.88021 10 10.5 10Z"></path></svg></i></button></div>

        </form>
    </header>


    <header class="ctn_servicios_contenedor">
        <center>
            <?php



$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");


$sql = "SELECT * FROM serviciosbsv";
$result = mysqli_query($conexion, $sql);
if (mysqli_num_rows($result)>0) {
    # code...


while($mostrar = mysqli_fetch_array($result)){
echo '


        <div class="ctn-servicios-all">
            <div class="ctn-servicios">
                <button class="btn-nombre ">'.$mostrar['nombre'].' </button>
                <button class="btn-condiciones">'.$mostrar['parametros'].'</button>
                <button class="btn-disponibilidad">'.$mostrar['estado'].'</button>
                <div class="ctn-fecha w-25">se emitio el: ' .$mostrar['fecha'].'</div>
                <div class="txt-contenido">'.$mostrar['Detalles'].' </div>
                <div class="ctn-info-servi">
                    
                </div>
                <a href="./servicios/info.php?referencia='.$mostrar['id'].'" class="link-saver-mas">Saver mas</a>
            </div>
        </div>

';









?>
                <?php
}} else {
    # code...
}
?>
        </center>
        <div class="ctn-indormacion-abajo">
            <div class="ctn-seguridad">
                <a class="Terminos-de-uso" href="./accesos/terminos-de-uso/">Terminos de uso</a>
                <a href="./accesos/politica-de-privacidad/" class="politica-de-privacidad">Politica de privacidad</a>
                <a href="./accesos/propositos/" class="propositos">Propositos</a>
                <a href="./accesos/informacion/" class="informacion">Informacion</a>
            </div>
            <div class="referencia">
                <a href="./accesos/donde_estamos/" class="donde-estamos">¿Donde estamos?</a>
                <a href="./accesos/noticias/" class="noticias">noticias</a>
                <a href="./accesos/indice/" class="indice-bsv">indice</a>
                <a href="./accesos/promociones/" class="promociones">Promociones</a>
                <style>
                    .promociones {
                        position: relative;
                        color: rgb(255, 255, 255);
                        text-decoration: none;
                        font-family: arial;
                        top: 200px;
                        left: 365px;
                        z-index:1;
                    }
                    
                    @media (max-width:450px) {
                        .promociones {
                            position: relative;
                            color: #fff;
                            text-decoration: none;
                            font-family: arial;
                            top: 137px;
                            left: -33px;
                        }
                    }
                </style>

            </div>
            <img class="logo2-bsv" src="./asets/img/logo2.png" alt="">
            <div class=""align="center"> <div  class="" style="position:relative;top:125px; z-index:0; color:#fff;"><h2><b> © </b>BSVcomercial</h2> Todos los derechos reservados</div></div>
        </div>

    </header>


</body>

</html>