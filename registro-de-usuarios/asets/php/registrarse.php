<?php


session_start();
if( !isset( $_SESSION['usuario'])) {
    session_destroy();
}

?>






    <?php

$conexion =mysqli_connect("localhost", "root", "", "login_register_db");

 
if ($_REQUEST) {
    
    $nombre_usuario = $_POST["nombre_usuario"];
    $correo = $_POST["correo"];
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
  
$pass_sifrado = password_hash($password, PASSWORD_DEFAULT);

$verificar_usu = "SELECT * FROM usuarios WHERE nombre_usuario='$nombre_usuario'|| correo='$correo'|| usuario='$usuario'";
$verificar_usu_query = mysqli_query($conexion, $verificar_usu);
// verificar que el correo no se rrepita
if (mysqli_num_rows($verificar_usu_query) > 0) {
    
    echo' 
    <script>
    alert("Usuario Ya existe por favor prueve con otro diferente");
    // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
    
  location = "./registrarse.php";
    </script>
    ';
  die;
  
  
  }else {
      # code...
  
$sql = "INSERT INTO usuarios(nombre_usuario, correo, usuario, contrasena)  VALUES('$nombre_usuario','$correo', '$usuario', '$pass_sifrado')";


$ejecutar = mysqli_query($conexion, $sql);
if ($ejecutar) {
  echo' 
  <script>
  alert("Usuario almasenado exitosamente");
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  
window.location = "iniciar-secion.php";
  </script>
  ';
} else {
  echo'
  
  <script>

  alert("Fallo, por vafor intente lo de nuevo");
  window.location = "./registrarse.php";
  </script>
  ';
}


}
}




?>





        <!DOCTYPE html>
        <html lang="es">

        <head>
            <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
            <script src="/bsvComercial/js/bootstrap.js"></script>
            <script src="/bsvComercial/js/bootstrap.js"></script>
            <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
            <script src="/bsvComercial/js/popper.js"></script>
            <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
            <meta name="autor" content="Tobyas Sosa">
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>registrarse | BSV comercial</title>
            <meta name="description" content="Registrate desde cualquier dispositivo en bsv comercial">

            <style>
                .nombre-usuario-bd {
                    width: 350px;
                    height: 50px;
                    z-index: 4;
                    top: 30px;
                    left: 140px;
                    font-size: 20px;
                    border-radius: 10px;
                    position: absolute;
                    outline: none;
                }
                
                .serrraesecion {
                    position: absolute;
                    left: 590px;
                }
                
                @media (max-width:600px) {
                    .nombre-usuario-bd {
                        width: 240px;
                        height: 50px;
                        z-index: 5;
                        top: -20px;
                        left: 20px;
                        font-size: 20px;
                        border-radius: 10px;
                        position: absolute;
                        outline: none;
                    }
                    .serrraesecion {
                        position: absolute;
                        left: 560px;
                        top: 140px;
                    }
                }
            </style>
        </head>

        <body>
            <div class="ctn_todos"></div>
            <div align="center" class="container w-50">
                <img align="center" class="icono-device-pc w-25 " title="en una pc" src="../img/pc-icono.gif" alt="">
                <img class="icono-device-movil" title="en un movil" src="../img/movil-icono.gif" alt=""></div>
            <div class="cambio-de-pagina">
                <p>¿Ya tienes cuenta? </p> <a href="./iniciar-secion.php"><button class="btn btn-success">Iniciar
                    Secion</button></a>
            </div>
            <main>

                <form method="POST" class="parte-de-inicio">
                    <img src="../img/fondo-de-secion.png" alt="">
                    <div class="formularios">
                        <div class="inputs-form">
                            <input required type="text" class=" nombre-usuario" name="nombre_usuario" placeholder="Nombre completo">
                            <input required type="text" class="nombre-usuario-bd" name="usuario" placeholder="Nombre de usuario">
                            <input required type="email" class="email-input" name="correo" placeholder="correo electronico">
                            <input required minlength="6" type="password" class="password-input" name="password" placeholder="Contraseña">
                            <button class="btn pb-2 btn-primary">Entrar</button>
                        </div>
                    </div>





                </form>
            </main>

            <?php


if( isset( $_SESSION['usuario'])) {
   
    echo'
<a class="serrraesecion " href="serrar_sesion.php">
        <button>serrar sesión </button></a>';
}

?>


                </div>
        </body>

        </html>
        <style>
            body {
                background-color: rgb(156, 156, 156);
            }
            
            .cambio-de-pagina {
                position: absolute;
                left: 1100px;
                top: 12px;
            }
            
            .pasar-formulario {
                width: 90px;
                color: rgb(199, 129, 129);
            }
            
            .parte-de-inicio {
                display: flex;
                top: 190px;
                left: 320px;
                width: 800px;
                height: 800px;
                position: absolute;
            }
            
            .parte-de-inicio {
                transition: 8000ms;
                border-radius: 40px;
            }
            
            .email-input {
                width: 350px;
                height: 50px;
                z-index: 5;
                top: 250px;
                left: 140px;
                font-size: 20px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            
            .password-input {
                width: 350px;
                height: 50px;
                z-index: 5;
                top: 340px;
                left: 140px;
                font-size: 20px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            
            form img {
                position: absolute;
                left: -170px;
                height: 700px;
                width: 980px;
                transition: 5s;
                z-index: 2;
                border-radius: 30px;
            }
            
            form div button {
                z-index: 5;
                position: absolute;
                top: 450px;
                left: 259px;
            }
            
            .inputs-form {
                border-radius: 20px;
                z-index: 7;
                top: 100px;
                left: 0px;
                width: 80%;
                height: 70%;
                background-color: rgba(0, 0, 0, 0.616);
                position: absolute;
                backdrop-filter: 30px;
            }
            
            .nombre-usuario-bd {
                width: 350px;
                height: 50px;
                z-index: 4;
                top: 30px;
                left: 140px;
                font-size: 20px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            
            .nombre-usuario {
                width: 350px;
                height: 50px;
                z-index: 5;
                top: 130px;
                left: 140px;
                font-size: 20px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            
            .icono-device-movil {
                position: absolute;
                width: 80px;
                height: 80px;
                top: 50px;
                left: 463px;
                display: none;
            }
            
            @media (max-width:600px) {
                .inputs-form {
                    border-radius: 10px;
                    z-index: 7;
                    top: 30px;
                    left: -286px;
                    width: 290px;
                    height: 55%;
                    background-color: rgba(0, 0, 0, 0.712);
                    position: absolute;
                    backdrop-filter: 30px;
                }
                form img {
                    left: -320px;
                    height: 340px;
                    width: 359px;
                    transition: 1s;
                    z-index: 2;
                    border-radius: 50px;
                }
                .nombre-usuario {
                    width: 240px;
                    height: 50px;
                    z-index: 5;
                    top: 90px;
                    left: 20px;
                    font-size: 20px;
                    border-radius: 10px;
                    position: absolute;
                    outline: none;
                }
                .email-input {
                    width: 240px;
                    height: 50px;
                    z-index: 5;
                    top: 180px;
                    left: 20px;
                    font-size: 15px;
                    border-radius: 10px;
                    position: absolute;
                    outline: none;
                }
                .password-input {
                    width: 240px;
                    height: 50px;
                    z-index: 5;
                    top: 280px;
                    left: 20px;
                    font-size: 15px;
                    border-radius: 10px;
                    position: absolute;
                    outline: none;
                }
                form div button {
                    z-index: 5;
                    position: absolute;
                    top: 360px;
                    left: 100px;
                }
                .icono-device-pc {
                    display: none;
                    width: 110px;
                    height: 110px;
                }
                .icono-device-movil {
                    position: absolute;
                    width: 80px;
                    height: 80px;
                    top: 50px;
                    left: 143px;
                    display: block;
                }
                .cambio-de-pagina {
                    position: absolute;
                    left: 270px;
                    top: 12px;
                }
                .nombre-usuario-bd {
                    width: 240px;
                    height: 50px;
                    z-index: 5;
                    top: 10px;
                    left: 20px;
                    font-size: 20px;
                    border-radius: 10px;
                    position: absolute;
                    outline: none;
                }
                .serrraesecion {
                    position: absolute;
                    left: 140px;
                    top: 150px;
                }
            }
        </style>