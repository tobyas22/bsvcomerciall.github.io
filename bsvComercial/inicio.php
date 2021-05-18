<?php
  

                                                                       

session_start();

?>
    <script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>

    <meta name="author" content="Tobyas Sosa">
    <meta name="autor" content="Tobyas Sosa">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>BSV comercial | sitio oficial </title>
    <link rel="stylesheet" href="/bsvComercial/css/stylo1.css">
    <link rel="shortcut icon" href="./asets/img/icono.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/bsvComercial/css/inicio.css">
    <script src="./js/pushbar.js"></script>
    <style>
        .mostrar_usuario {
            position: fixed;
            z-index: 13;
            left: 900px;
            top: 0px;
            max-width: 279px;
            font-size: 20px;
            font-family: arial;
            text-transform: capitalize;
        }
        
        @media (max-width: 450px) {
            .mostrar_usuario {
                position: fixed;
                z-index: 11;
                left: 90px;
                text-transform: capitalize;
                top: 0px;
                font-size: 20px;
                font-family: arial;
            }
        }
    </style>

    <style>
        .no_secion_user {
            position: fixed;
            z-index: 11;
            left: 900px;
            top: 0px;
        }
        
        .fecha_uniste {
            width: 200px;
            height: 30px;
            font-size: 20px;
        }
        
        .btn_des_info {
            position: absolute;
            background: none;
            border: none;
            top: 1px;
            display: block;
            outline: none;
            z-index: 9090;
            border-radius: 100%;
        }
        
        @media (max-width: 450px) {
            .no_secion_user {
                position: fixed;
                z-index: 11;
                left: 50px;
                top: 0px;
            }
            .desplegar_info {
                position: absolute;
                left: 83%;
                background: none;
                border: none;
                top: 1px;
                display: block;
                outline: none;
                z-index: 20;
                border-radius: 100%;
            }
            .fecha_uniste {
                width: 170px;
                height: 25px;
                font-size: 16px;
            }
            .btn_des_info {
                position: absolute;
                left: 73%;
                background: none;
                border: none;
                top: 1px;
                display: block;
                outline: none;
                border-radius: 100%;
            }
            .logo_login_desplegable {
                position: absolute;
                left: -30px;
                width: 50px;
            }
        }
        
        .logo_login_desplegable {
            width: 50px;
        }
        
        .cerrar_secion_info {
            position: relative;
            top: 50px;
        }
    </style>
    <?php

if (!isset($_SESSION['usuario'])) {
   
    echo'

    <h4 class="no_secion_user">No has iniciado sesión </h4>
   
    '; 
}else {
   echo '<div class="mostrar_usuario">'. "hola ".$_SESSION['usuario']. '</div>';

}
    ?>


        <!DOCTYPE html>


        <script>
            $(document).ready(function() {





                h = new Date();


                hora = h.getHours();


                //== 7, 8, 9 || 10, 11 || 12, 13, 14, 15, 16, 17

                if (hora == 7) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 8) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 9) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 10) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 11) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 12) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 13) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 14) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 15) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 16) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 17) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 18) {

                    $(".ctn-body-header-inicio").addClass("d-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("d-portada-arriva-2");
                    $(".body").addClass("d-body");
                }
                if (hora == 0) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 1) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 2) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 3) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 4) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 5) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 6) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 18) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 19) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 20) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 21) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 22) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
                if (hora == 23) {


                    $(".ctn-body-header-inicio").addClass("n-ctn-body-header-inicio");
                    $(".portada-arriva-2").addClass("n-portada-arriva-2");
                    $(".body").addClass("n-body");
                }
            });
        </script>

        <html lang="es">
        <style>
            .ctn-body-header-inicio {
                position: relative;
                top: 260px;
                border-radius: 20px;
                padding: 100px 100px;
            }
            
            .portada-arriva-2 {
                position: fixed;
                width: 100%;
                top: 0px;
                height: 150px;
                z-index: 10;
            }
            
            .n-ctn-body-header-inicio {
                position: relative;
                top: 260px;
                border-radius: 20px;
                padding: 100px 100px;
                background-color: rgb(26, 26, 26);
            }
            
            .n-body {
                background-color: rgb(37, 42, 43);
                color: #fff;
            }
            
            .d-body {
                background-color: rgb(180, 214, 221);
                color: rgb(26, 26, 26);
            }
            
            .n-portada-arriva-2 {
                background-color: rgb(150, 150, 150);
                position: fixed;
                width: 100%;
                top: 0px;
                height: 150px;
                z-index: 10;
            }
            
            .d-ctn-body-header-inicio {
                position: relative;
                top: 260px;
                border-radius: 20px;
                padding: 100px 100px;
                background-color: rgb(247, 232, 232);
            }
            
            .d-portada-arriva-2 {
                background-color: rgb(255, 255, 255);
                position: fixed;
                width: 100%;
                top: 0px;
                height: 150px;
                z-index: 10;
            }
            .ctn-indormacion-abajo {
                    position: relative;
                    top: 270px;
                    width: 100%;
                    z-index: 11;
                    background-color: rgb(24, 24, 24);
                    height: 280px;
                }
            @media (max-width: 450px) {
                .ctn-indormacion-abajo {
                    position: relative;
                    top: 270px;
                    width: 100%;
                    z-index: 11;
                    background-color: rgb(24, 24, 24);
                    height: 200px;
                }
            }
        </style>

        <head>

            <meta name="description" content="El sitio oficial de bsv comercial donde puedes encontrar productos, y explorar partes del sitio">

        </head>

        <body class="body">

            <script src="./scripsJs/push.js-master/push.min.js">
            </script>

            <header class="portada-arriva-2">
                <li class="texto-deportada">
                    <img class="bsv-logo" src="./asets/img/logo-bsv.gif" alt="bsvcomercial logo de empresa Bernardo Sosa B S V COMERCIAL" srcset="">
                </li>
                <div class="separador"></div>

                <nav class="menus-de-arriva">
                    <?php  

if (isset($_SESSION['usuario']) ){
   
  echo " 
  <div class='desplegar_info'>
<button class='justify-content-end close ' data-pushbar-target='des-info'>
<img class='logo_login_desplegable' src='/bsvComercial/asets/img/login_icono.gif' >
</button>
  </div>  
  
    ";
    $conexion = mysqli_connect("localhost", "root","","login_register_db");
    $_SESSION['usuario'];
    
    $sql = 'SELECT * FROM usuarios WHERE usuario="'.$_SESSION['usuario'].'"';
    
   


    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0 ) {
    
    
    while($mostrar_datos = mysqli_fetch_array($query)){
        $_SESSION['id'] = $mostrar_datos['id'] ;
        $_SESSION['id_usuario'] = $mostrar_datos['id'] ;
        $_SESSION['correo_usuario'] = $mostrar_datos['correo'];
       
             echo '
             <div  data-pushbar-direction="right" data-pushbar-id="des-info" class="pushbar from_left des_info "><div align="end"><button class=" btn btn-danger mt-5" data-pushbar-close>serrar</button></div>
             <div class="logo_bsv_info"><img src="/bsvComercial/asets/img/logo-bsv.gif" alt=""></div>

             <div style="color:black;" class="ctn_infos_txt">
                 <div class="txt1_info">Esta es la Información De tu cuenta BSV</div> <br>
                 <div class="id_info"><b>La id de tu cuenta es: ' .$mostrar_datos['id'] .' </b></div><br>
                 <div class="nombre_infot"><b>Tu nombre es: </b> ' .$mostrar_datos['nombre_usuario'] .'<a class="links_de_editar_info" title="editar este elemento" href="./php/edicion_nom.php?id='.$mostrar_datos['id'].'&correo='.$mostrar_datos['correo'].'"><img src="/bsvComercial/asets/img/icono_edicion.png" alt="bsv comercial">Editar</a> </div><br>
                 <div class="usuario_info"><b>Tu nombre de usuario es: </b> ' .$mostrar_datos['usuario'] .'  </div><br>
                 <div class="correo_info"><b>Tu correo es: </b> ' .$mostrar_datos['correo'] .'  </div><br>
                 
                 <div class="contrasena_info"><b>Tu clave es: </b> <i title="la contraseña no se puede mostrar ya que dispone de una ecriptacion paralela"> *************</i>  <a class="links_de_editar_info" title="editar este elemento" href="./php/edicion_pass.php?id='.$mostrar_datos['id'].'&correo='.$mostrar_datos['correo'].'"><img src="/bsvComercial/asets/img/icono_edicion.png" alt="bsv comercial">Editar</a>  </div><br>
                 <div class="fecha_info"><b>Te uniste el: </b> <input type="date" class="fecha_uniste" name="" disabled value="' .$mostrar_datos['fecha'] .'" id=""> </div>
             </div>
             <div class=" cerrar_secion_info"><a href="/registro-de-usuarios/asets/php/serrar_sesion.php"><button class="btn btn-danger">Cerrar Sesion</button></a></div>
         </div>';
}
    
    }
   
;

?>
                    <?php


} else {
    
   echo'
    <div class="entrar_registro">
        <a href="../registro-de-usuarios/asets/php/registrarse.php">
            <img title="cuenta" class="login_register" src="./asets/img/login_icono.gif" alt="">
        </a>
    </div>
    ';
     

      
        
     }
?>
                </nav>
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
                    
                    .ctn-body {
                        width: 70%;
                    }
                    
                    @media (max-width:450px) {
                        .bsv-logo {
                            top: 0px;
                            width: 60%;
                            z-index: 1;
                        }
                    }
                    
                    @media (max-width:600px) {
                        .ctn-body-header-inicio {
                            position: relative;
                            top: 260px;
                            width: 100%;
                            border-radius: 20px;
                            padding: 0px 0px;
                        }
                    }
                    
                    body {
                        background-color: rgb(37, 42, 43);
                        color: #fff;
                    }
                </style>
                <div class="container-fluid ">
                    <div class="row ">
                        <!--para dispositivos-->
                        <div class="w-50 d-inline d-sm-none justify-content-end " style="position: relative; left: 83%;top:-30px;">
                            <ul class="nav nav-pills">
                                <li class="nav-item dropdown">
                                    <a class="nav-link " data-toggle="dropdown" href="#"><img class="w-25 " src="/bsvComercial/asets/img/icon-mnu.gif" alt=""></a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item active" href="./inicio.php">Inicio</a>
                                        <a class="dropdown-item" href="./blog.php"> Blog </a>
                                        <a class="dropdown-item " href="./productos.php"> Productos </a>
                                        <a class="dropdown-item" href="./contactos.php"> Contacto </a>
                                        <hr class="nav">
                                        <a href="/bsvComercial/servicios.php" class="dropdown-item">Servicios</a>
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
                                <li class="nav-item"><a class="nav-link active" href="./inicio.php">Inicio</a></li>
                                <li class="nav-item"><a class="nav-link" href="./blog.php"> Blog </a></li>
                                <li class="nav-item "><a class="nav-link  " href="./productos.php"> Productos </a></li>
                                <li class="nav-item"><a class="nav-link " href="./contactos.php"> Contacto </a></li>
                                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"> más </a>
                                    <div class="dropdown-menu">
                                        <a href="/bsvComercial/servicios.php" class="dropdown-item">Servicios</a>
                                        <a href="/bsvComercial/accesos/promociones/" class="dropdown-item">Publicaciones</a>
                                        <a href="/bsvComercial/accesos/noticias/" class="dropdown-item">Noticias</a>
                                        <a href="/pruevas/" class="dropdown-item">Chat Grupal</a>

                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <script>
                var pushbar = new Pushbar({
                    blur: true,
                    overlay: true
                });
            </script>

            <script>
                Push.create("Bienvenidos"

                )
            </script>
            <div align="center" class="">
                <header class="ctn-body-header-inicio ctn-body " align="center">
                    <?php
               if (!isset($_SESSION['usuario']) ){
echo ' <button type="button" class="btn-primary justify-content-center" data-toggle="modal" data-target="#mimodal">precione</button>';

               }
 
               ?>



                        <div class="modal fade" id="mimodal">

                            <div class="modal-dialog">

                                <div class="modal-content">

                                    <!--cabezera-->
                                    <div class="modal-header">

                                        <h2 class="modal-title" style="color: black;">Te invitamos a suscribirte😏</h2>
                                        <button type="button" class="close " data-dismiss="modal">&times;</button>
                                    </div>
                                    <!--cuerpo-->
                                    <div class="modal-body">

                                        <form method="POST">
                                            <h4 style="color: black;">Nombre</h4>
                                            <input required type="text" class="form-control" name="nombre_usuario" placeholder="Nombre completo">
                                            <h4 style="color: black;">Usuario</h4>
                                            <input required type="text" class="form-control" name="usuario" placeholder="Nombre de usuario">
                                            <h4 style="color: black;">Correo</h4>
                                            <input required type="email" class="form-control" name="correo" placeholder="correo electronico">
                                            <h4 style="color: black;">Contraseña</h4>
                                            <input required minlength="6" type="password" class="form-control" name="password" placeholder="Contraseña">
                                            <br>

                                            <button class="btn btn-block btn-primary">Entrar</button>
                                        </form>
                                        <br><br>
                                        <?php

$conexion =mysqli_connect("localhost", "root", "", "login_register_db");
if(!isset( $_SESSION['usuario'])) {





if ($_REQUEST) {

$nombre_usuario = $_POST["nombre_usuario"];
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];

$pass_sifrado = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO usuarios(nombre_usuario, correo, usuario, contrasena)  VALUES('$nombre_usuario','$correo', '$usuario', '$pass_sifrado')";
$verificar_usu = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'|| correo='$correo'|| usuario='$usuario'";
$verificar_usu_query = mysqli_query($conexion, $verificar_usu);// verificar que el correo no se rrepita
if (mysqli_num_rows($verificar_usu_query) > 0) {
echo' 
<script>
alert("Usuario Ya existe por favor prueve con otro diferente");    
window.location = "./inicio.php";
</script>
';
}else {
$ejecutar = mysqli_query($conexion, $sql);
if ($ejecutar) {
echo' 
<script>
alert("Usuario almasenado exitosamente");
window.location = "/registro-de-usuarios/asets/php/iniciar-secion.php";
</script>
';
} else {
echo'
<script>
alert("Fallo, por vafor intente lo de nuevo");
window.location = "./inicio.php";
</script>
';
}
}
}



}

?>
                                    </div>
                                    <!--pie de pagina-->
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Serrar</button>

                                </div>
                            </div>
                        </div>

                        <div align="center" class="display-4 display-sm-4">Bienvenidos</div>

                        <hr>
                        <ol>
                            <p class="texto-1"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem vel ipsum recusandae dolorem perferendis alias id impedit, ducimus similique velit, corporis aut consectetur architecto suscipit mollitia! Ipsa dicta earum doloremque
                                quibusdam eos! Voluptatibus eum, ipsa excepturi ipsum fuga corporis dolorem ab vitae perspiciatis cum facilis, rem dolor nihil deserunt minima! Nam dolorem veritatis similique ad repudiandae. Labore eveniet soluta quaerat
                                minima maiores ullam dolorem cupiditate accusamus commodi iste, magni aliquam corrupti adipisci. Accusamus consequatur eveniet aperiam. Inventore deserunt atque earum odio dolorum? Eius nostrum officiis dignissimos cumque
                                architecto voluptates, minima facilis! A expedita, in ratione aperiam quos corrupti dolorum ab asperiores architecto tempore assumenda dicta iure distinctio possimus, ut provident sunt voluptates minima repellendus quis
                                fugiat impedit magni quia harum. Laboriosam veritatis voluptatem tempora iure corporis cum voluptatibus rerum inventore, error obcaecati repudiandae consectetur labore beatae eveniet ipsam, vel vitae saepe fugit iste quisquam
                                ratione eos molestias. Doloremque, nobis minima.
                            </p>
                        </ol>

                        <h2 align="center" class="display-5">¿Qué encontraras aquí?</h2>

                        <hr>
                        <ol>
                            <p class="texto-1">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum officiis totam, perspiciatis numquam enim necessitatibus quas ex et ipsum eum ducimus, culpa, porro nihil obcaecati! Fuga magnam voluptatum qui maiores, quia
                                delectus eveniet voluptatibus repellat, alias enim nostrum modi velit iure placeat quod. Voluptate, et omnis? Quos deserunt unde enim non eveniet, cumque fuga porro odio aliquid officiis eligendi voluptates mollitia earum
                                excepturi quisquam facilis, aliquam eius saepe quis, vel repellendus. Facere labore possimus a. Nam, consequatur. Ipsa beatae vitae pariatur itaque hic facilis commodi! Ut aut cum earum molestias illo pariatur quam, nam
                                ipsa repellendus ab ipsum aliquid iure? </p>
                        </ol>

                        <h2 align="center" class="display-5">¿Quiénes somos?</h2>


                        <hr>
                        <p class="texto-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. At hic ad sed enim culpa blanditiis non quo sapiente, ut animi cum, vitae quod. Id quam qui, rerum soluta cum distinctio. Vitae aut molestias repellendus accusamus, qui ullam!
                            Officiis enim quae quo vitae sequi repudiandae, neque illum dolorum aliquam tempora perspiciatis repellat exercitationem assumenda magni magnam expedita minus dicta eum adipisci impedit a cupiditate doloribus! A odio vero eveniet
                            deserunt. Soluta odio quo fugiat. Totam consequuntur fugit nisi, quos, tenetur sequi beatae dolore assumenda sunt, quia necessitatibus. Animi quae sit voluptas, neque veritatis maxime eveniet, non corrupti impedit illo, necessitatibus
                            cum!
                        </p>


                        <h2 align="center" class="display-5">¿que ofrecemos?</h2>


                        <hr>


                        <p tyle="font-size: 22px;" class="">Nosotros ofresemos servicios de
                            <div style="font-size: 20px;" class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere modi quae, repellat explicabo fugiat, magni ipsa corporis repellendus laudantium odio totam nam minus fugit. Numquam mollitia omnis error asperiores aperiam, maiores
                                odit quibusdam culpa. Ad sapiente quasi, commodi ab ex cupiditate cum necessitatibus quam, ipsum pariatur eveniet? Eveniet fugit accusamus minima, deleniti sequi molestias placeat, repudiandae consequatur suscipit recusandae
                                assumenda facere. Nihil molestiae vitae id veniam assumenda? Corporis, totam velit.</div>
                        </p>

                        <h2 align="center" class="display-5">¿Por que el sitio?</h2>


                        <hr>


                        <p tyle="font-size: 22px;" class="">
                            <div style="font-size: 20px;" class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic magni esse officiis nostrum? Ex accusantium dolore eaque laboriosam at, ipsam tenetur dolor recusandae ullam minus voluptate quam dolores odit aut excepturi necessitatibus,
                                ipsa perferendis sit veniam. Voluptatibus repudiandae accusantium quis pariatur obcaecati ratione molestias nemo ullam vel tenetur error, similique consectetur dicta cumque alias aspernatur soluta rem, harum quibusdam quod.</div>
                        </p>

                        <h2 align="center" class="display-5">¿Los motivos?</h2>


                        <hr>


                        <p tyle="font-size: 22px;" class="">
                            <div style="font-size: 20px;" class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere modi quae, repellat explicabo fugiat, magni ipsa corporis repellendus laudantium odio totam nam minus fugit. Numquam mollitia omnis error asperiores aperiam, maiores
                                odit quibusdam culpa. Ad sapiente quasi, commodi ab ex cupiditate cum necessitatibus quam, ipsum pariatur eveniet? Eveniet fugit accusamus minima, deleniti sequi molestias placeat, repudiandae consequatur suscipit recusandae
                                assumenda facere. Nihil molestiae vitae id veniam assumenda? Corporis, totam velit.</div>
                        </p>
                </header>
            </div>

            <br>

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
                        
                        .serrar_v_m {
                            top: 20px;
                        }
                    </style>

                </div>
                <img class="logo2-bsv" src="./asets/img/logo2.png" alt="">
               <div class=""align="center"> <div  class="" style="position:relative;top:125px; z-index:0;"><h2><b> © </b>BSVcomercial</h2> Todos los derechos reservados</div></div>
            </div>

        </body>

        </html>
        <script src="/bsvComercial/js/bootstrap.js"></script>
        <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
        <script src="/bsvComercial/js/popper.js"></script>
        <script src="/bsvComercial/js/bootstrap.bundle.js"></script>