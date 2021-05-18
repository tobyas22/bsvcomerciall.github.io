<?php
session_start();

$conexion = mysqli_connect("localhost", "root","","bsv-administracion");

if (!isset($_SESSION['usuario'])) {
   
    echo'<script>alert("No has iniciado sesion es obligatorio para entrar en el blog")
    location="../registro-de-usuarios/"
    </script>'; 
}


?>

    <!DOCTYPE html>


    <html lang="es">

    <head>
        <link rel="stylesheet" href="/bdg/js/pushbar.css">
        <script src="/bdg/js/pushbar.js"></script>
        <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
        <script src="/bsvComercial/js/bootstrap.js"></script>

        <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
        <script src="/bsvComercial/js/popper.js"></script>
        <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
        <meta name="autor" content="Tobyas Sosa">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width">
        <title>BSV comercial | Blog </title>
        <link rel="stylesheet" href="./css/pushbar.css">
        <script src="./js/pushbar.js"></script>
        <link rel="stylesheet" href="/bsvComercial/css/stylo1.css">
        <link rel="stylesheet" href="/bsvComercial/css/blog.css">
        <link rel="shortcut icon" href="./asets/img/icono.jpg" type="image/x-icon">
        <style>

        </style>

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
                                <a class="nav-link " data-toggle="dropdown" href="#"><img class="w-25 " src="/bsvComercial/asets/img/icon-mnu.gif" alt=""></a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item " href="./inicio.php">Inicio</a>
                                    <a class="dropdown-item active" href="./blog.php"> Blog </a>
                                    <a class="dropdown-item " href="./productos.php"> Productos </a>
                                    <a class="dropdown-item " href="./contactos.php"> Contacto </a>
                                    <hr class="nav">
                                    <a href="/bsvComercial/servicios.php" class="dropdown-item">Servicios</a>
                                    <a href="/bsvComercial/accesos/promociones/" class="dropdown-item">Publicaciones</a>
                                    <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>

                                    <a href="/pruevas/" class="dropdown-item">Chat Grupal</a></div>

                            </li>
                        </ul>
                    </div>

                    <!--para PCs-->
                    <div class="col-7  col-md ">
                        <ul class="nav d-none d-sm-flex justify-content-sm-end  nav-pills">
                            <li class="nav-item"><a class="nav-link " href="./inicio.php">Inicio</a></li>
                            <li class="nav-item"><a class="nav-link active" href="./blog.php"> Blog </a></li>
                            <li class="nav-item "><a class="nav-link  " href="./productos.php"> Productos </a></li>
                            <li class="nav-item"><a class="nav-link " href="./contactos.php"> Contacto </a></li>
                            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> más </a>
                                <div class="dropdown-menu">
                                    <a href="/bsvComercial/servicios.php" class="dropdown-item">Servicios</a>
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
            </style>
        </header>
        <header class="ctn-blog-header">

            <div class="ctn_de_blog">
                <div class="txtbog_1">Bienvenidos al blog de bsvComercial</div>
                <div class="txtbog_2">Esta sección es para las preguntas y mensajes</div>

                <div class="mensajes_blog">
                    <div class="txtblog_3">Mensajes de BSVcomercial &hookleftarrow;</div>
                    <!-- comienso de mensaje -->
                    <?php
$conexion2 = mysqli_connect("localhost", "root","","bsv-administracion");

$sql = "SELECT * FROM mensajes";
$result = mysqli_query($conexion2, $sql);

if (mysqli_num_rows($result )> 0) {
    


while($mostrar = mysqli_fetch_array($result)){
echo '<div class="ctn_mensajes_blog"> <div class="logo_bsv_mensajes"><img src="./asets/img/logo mensajes.jpg" alt=""></div>


<div class="mensaje_blog"><b>Dice:&emsp13;</b>'.$mostrar['mensaje'].'</div>
<div class="fecha_mensaje"><b>Publicado el:&emsp13; '.$mostrar['fecha'].'</b></div>

<div class="numbre_usuario"><b>De:&emsp13;</b>
    <details open class="detalles_usuario" name="" id="">
        <summary>'.$mostrar['usuario'].'</summary>
        <div class="detalles_ctn_usuario">
            <br>
            <br>
            <div class="dispositivo_send"><b>Enviado desde:&emsp13;'.$mostrar['dispositivo'].' </b></div>
            <div class="email_send"><b>Nombre Real:&emsp13; </b>'.$mostrar['nombre'].'</div>
            <div class="email_send"><b>Correo:&emsp13; </b> <a href="mailto:'.$mostrar['correo'].'">'.$mostrar['correo'].'</a></div>

        </div>
    </details>

</div> </div>';
}} else {
    echo '<br><br><br> <h1 class="float-left align-top bg-danger justify-content-lg-center">Parece que no hay mensajes te invitamos a ser el primero</h1>';
}
?>





                        <!-- fin de mensaje -->
                </div>





            </div>

            <script>
                formulario = screen.width;

                if (formulario >= 800) {
                    document.write("<div class='herramientas_ctn_blog'><div class='ctn_formularios'><div class='txt_publi_1'>Publica un mensaje en BSV</div><form action='' method='post'><textarea placeholder='Ingresé mensaje' class='ingrese_mensaje' name='mensaje'></textarea><button class='bu_enviar' type='submit'>Enviar</button> <br><div class='marcadores'><p>Mostrar informacion en el mensaje: </p><b>si&emsp13; </b> <input type='radio'checked value='si' name='si_no' ><br><b>no&emsp13;</b><input type='radio' value='no' name='si_no' ><br><p>La información solo muestra tu nombre real, correo electrónico y en que dispositivo se envio al mensaje</p></div>");
                } else {
                    document.write("<button class='btn_des_mensajes' data-pushbar-target='des-mensaje'><img class='logo_mensajes' src='./asets/img/chat_icono.png' ></button><div data-pushbar-direction='left' data-pushbar-id='des-mensaje' class='pushbar from_left des_mensaje'><button class='serrar_v_m' data-pushbar-close>serrar</button><div class='herramientas_ctn_blog_m'><div class='ctn_formularios_m'><div class='txt_publi_1_m'>Publica un mensaje en BSV</div><form action='' method='post'><textarea placeholder='Ingresé mensaje' class='ingrese_mensaje_m' name='mensaje'></textarea><button class='btn btn-success pb-2 bu_enviar_m' type='submit'>Enviar</button> <br><div class='marcadores_m'><p>Mostrar informacion en el mensaje: </p><b><label > si&emsp13; </b> <input type='radio' checked value='si' name='si_no'></label><br><b><label >no&emsp13;</b><input type='radio' value='no' name='si_no'></label><br><p>La información solo muestra tu nombre real, correo electrónico y en que dispositivo se envio al mensaje</p></div></div>");

                }
            </script>

            <script>
                var pushbar = new Pushbar({
                    blur: true,
                    overlay: true
                });
            </script>


            <script>
                pantalla = screen.width;

                if (pantalla >= 900) {
                    document.write("<input hidden type='txt' class='dispositivo_ssend' value='una pc' name='dispositivo'>");
                } else {
                    document.write("<input hidden type='txt' class='dispositivo_ssend' value='un telefono' name='dispositivo'>");

                }
            </script>


            </form>

            </div>

            <?php


 


if ($_POST) {
   
$mensaje = $_POST['mensaje'];
$string = $mensaje;
$mensaje  = htmlspecialchars( 
    $string,
    $flags = ENT_COMPAT | ENT_HTML401,
    $encoding = 'UTF-8',
    $double_encode = true
    
  );


$usuario = $_SESSION['usuario']; 
$conexion1 = mysqli_connect("localhost", "root","","login_register_db");
   
    
    $sql = 'SELECT * FROM usuarios WHERE usuario="'.$_SESSION['usuario'].'"';
    
    


    $query = mysqli_query($conexion1, $sql);
    if (mysqli_num_rows($query) > 0 ) {
    
    
    while($mostrar_datos = mysqli_fetch_array($query)){
    
$si_no = $_POST['si_no'];

if ($si_no == 'si') {
    $dispositivo = $_POST['dispositivo'];
    $nombre  = '' .$mostrar_datos['nombre_usuario'] .'';                        
    $correo  = '' .$mostrar_datos['correo'] .'';
  
}else {
    $dispositivo = 'dispositivo es oculto';
    $nombre = 'El usuario no permite su info'; 
    $correo  = 'El usuario no permite su info';
}

}
}









$query = "INSERT INTO mensajes(mensaje,usuario,nombre,correo,dispositivo) 
VALUES('$mensaje', '$usuario', '$nombre', '$correo', '$dispositivo')";

$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
  echo('<script>

    
    location="./blog.php"
    exit();
    </script>');
} else {
  echo('
  
  <script>

  alert("Error, mensaje no enviado");
  location="./blog.php"
  exit();
  </script>
  ');
}

}


?>
                </div>






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
                                z-index: 1;
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