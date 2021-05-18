<?php

session_start();


if (isset($_SESSION['usuario'])) {
    header('location: bienvenido.php');
}


   

    if (isset($_SESSION['usuario'])) {
      
        echo'
    
       
        
        '; 
    }else {
      echo'  <h4 class="no_secion_user">No has iniciado sesión </h4>';
    }
    
    
    
    
    
   
?>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <meta name="autor" content="Tobyas Sosa">
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
            width: 600px;
            height: 500px;
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
            top: 118px;
            left: 60px;
            font-size: 20px;
            border-radius: 10px;
            position: absolute;
            outline: none;
        }
        
        .nombre-input {
            width: 350px;
            height: 50px;
            z-index: 5;
            top: 15px;
            left: 60px;
            font-size: 20px;
            border-radius: 10px;
            position: absolute;
            outline: none;
        }
        
        .nombre_usuario {
            width: 350px;
            height: 50px;
            z-index: 5;
            top: 66px;
            left: 60px;
            font-size: 20px;
            border-radius: 10px;
            position: absolute;
            outline: none;
        }
        
        .password-input {
            width: 350px;
            height: 50px;
            z-index: 5;
            top: 170px;
            left: 60px;
            font-size: 20px;
            border-radius: 10px;
            position: absolute;
            outline: none;
        }
        
        form img {
            height: 500px;
            width: 780px;
            transition: 5s;
            z-index: 2;
            border-radius: 30px;
        }
        
        form div button {
            z-index: 5;
            position: absolute;
            top: 250px;
            left: 190px;
            width: 100px;
            height: 30px;
        }
        
        .inputs-form {
            border-radius: 20px;
            z-index: 7;
            top: 100px;
            left: 120px;
            width: 80%;
            height: 60%;
            background-color: rgba(0, 0, 0, 0.616);
            position: absolute;
            backdrop-filter: 30px;
        }
        
        .icono-device-pc {
            display: block;
            width: 110px;
            height: 110px;
            left: 600px;
            position: relative;
        }
        
        .icono-device-movil {
            position: absolute;
            width: 80px;
            height: 80px;
            top: 50px;
            left: 463px;
            display: none;
        }
        
        @media screen and (max-width:600px) {
            .inputs-form {
                border-radius: 10px;
                z-index: 7;
                top: 30px;
                left: -290px;
                width: 290px;
                height: 60%;
                background-color: rgba(0, 0, 0, 0.712);
                position: absolute;
                backdrop-filter: 30px;
            }
            form img {
                left: -320px;
                height: 340px;
                width: 360px;
                transition: 5s;
                z-index: 2;
                position: inherit;
                border-radius: 50px;
            }
            .nombre-input {
                width: 240px;
                height: 50px;
                z-index: 5;
                top: 0px;
                left: 20px;
                font-size: 15px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            .email-input {
                width: 240px;
                height: 50px;
                z-index: 5;
                top: 50px;
                left: 20px;
                font-size: 15px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            .nombre_usuario {
                width: 240px;
                height: 50px;
                z-index: 5;
                top: 50px;
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
                top: 150px;
                left: 20px;
                font-size: 15px;
                border-radius: 10px;
                position: absolute;
                outline: none;
            }
            form div button {
                z-index: 5;
                position: absolute;
                top: 250px;
                left: 90px;
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
                left: 133px;
                display: block;
            }
            .cambio-de-pagina {
                position: absolute;
                left: 250px;
                top: 12px;
            }
        }
    </style>


    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Iniciar Seción | BSV comercial</title>
        <meta name="description" content="Inicia sesion desde cualquier dispositivo en bsvcomercial">

    </head>

    <body>


        <img class="icono-device-pc" title="en una pc" src="../img/pc-icono.gif" alt="">
        <img class="icono-device-movil" title="en un movil" src="../img/movil-icono.gif" alt="">
        <div class="cambio-de-pagina">
            <p>¿Nuevo?</p> <a href="./registrarse.php"><button class="btn btn-success pasar-formulario">Registrarse</button></a></div>

        <form class="parte-de-inicio" method="POST">
            <img src="../img/fondo-de-secion.png" alt="">
            <div class="formularios">
                <div class="inputs-form">

                    <input required type="email" class="form-control mt-5 " name="correo" placeholder="correo" required>
                    <div class="mt-2">&blk14;</div>
                    <input required type="password" class="form-control mt-5" placeholder="Contraseña" name="contrasena">
                    <button class="btn btn-primary" style="height:auto;">Entrar</button>
                </div>
            </div>




        </form>




    </body>

    </html>

    <?php
    
    if ($_REQUEST) {
        
$conexion = mysqli_connect("localhost","root","","login_register_db");



$correo = $_POST['correo'];
$password = $_POST['contrasena'];





$validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  correo='$correo'");




 
if (mysqli_num_rows($validar_inicio) > 0){
 
 $result = mysqli_num_rows($validar_inicio);
 
if ($result > 0) {
    while ($data = mysqli_fetch_array($validar_inicio)) {
       

if (password_verify($password, $data['contrasena'])) {
    

$_SESSION['correo'] = $correo;
$_SESSION['correo'];
    
    $sql = 'SELECT * FROM usuarios WHERE correo="'.$_SESSION['correo'].'"';
    
   


    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0 ) {
    
    
    while($mostrar_datos = mysqli_fetch_array($query)){
        $_SESSION['id'] = $mostrar_datos['id'] ;
        $_SESSION['id_usuario'] = $mostrar_datos['id'] ;
        $_SESSION['correo_usuario'] = $mostrar_datos['correo'];
        $_SESSION['usuario'] = $mostrar_datos['usuario'];
        $_SESSION['fecha_usu'] = $mostrar_datos['fecha'];
         
}
    
    }
   
;
    echo'  <script>
    alert("has iniciado secion");
    window.location = "./bienvenido.php";
    exit();
    </script>
   
    
    
    ';
}else {
  
    echo'
    <script>
    alert("ususario no existe por favor verifique los datos introdusido");
    window.location = "./iniciar-secion.php";
    </script>
    
    
    ';
    exit;
} 
    }


   /* */


 exit();
}else {
 
    
}
 
  

   
  /*  header("location: bienvenido.php");*/
   
    

}else {
    
 
}














    }
    
    
    ?>