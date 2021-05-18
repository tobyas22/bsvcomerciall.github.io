<?php
session_start();
if (!isset($_SESSION['usuario'])) {
   
    echo'

    <script>alert("no has iniciado sesion es obligatorio")</script>
    <script>location="./"</script>
    '; 
}else {
  

}

?>

    <!DOCTYPE html>
    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <html lang="es">
    <style>
        .contrasena {
            position: relative;
            width: 570px;
            height: 40px;
            padding-left: 0px;
            font-size: 100%;
        }
        
        .ctn_editar {
            position: relative;
            background-color: rgb(194, 194, 194);
            height: 200px;
            padding-top: 50px;
            font-family: arial;
        }
        
        .texto_prinsipal {
            font-size: 50px;
        }
        
        .text_2 {
            font-size: 30px;
        }
        
        @media(max-width:450px) {
            .contrasena {
                position: relative;
                width: 270px;
                height: 60px;
                padding-left: 0px;
                font-size: 100%;
            }
        }
    </style>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar contraseña</title>
    </head>

    <body>
        <center>
            <?php
        $conexion = mysqli_connect("localhost", "root","","login_register_db");
        $_SESSION['usuario'];
        if ($_REQUEST) {
            # code...
        
            $id =  $_REQUEST['id'];
            $correo = $_REQUEST['correo'];
            if ($id !=  $_SESSION['id_usuario'] || $correo != $_SESSION['correo_usuario'] ) {
                echo '
                <script>alert("!!solo se puede editar tu cuenta madita sea¡¡");
    
                location="/";
                exit();
                
                </script>
    
                
                ';}
            $sql = 'SELECT * FROM usuarios  WHERE id="'.$id.'" and  usuario="'.$_SESSION['usuario'].'"';
            
            
        
    
    
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) > 0 ) {
        
        }
        while($mostrar_datos = mysqli_fetch_array($query)){
            

        
                 echo ' 
                  ';


      
        
       ?>
                <div class="container bg-dark mt-5 p-1">
                    <div style="font-size: 50px;color:black;">BSV<sub style="font-size: 57px; color: rgb(0, 119, 255);">comercial</sub></div>
                    <div class="text-info" style="font-size: 40px;">Vamos a cambiar tu contraseña</div>
                    <button class="btn-info">La contraseña no se puede mostrar ya que dispone de una ecriptacion nivel 10</button>

                    <form action="./prosesar_pass.php" method="POST">
                        <div class="text_2">Ingrese su nueva contraseña</div>
                        <input type="hidden" value="<?php echo $mostrar_datos['id']; ?>" class="nueva_contrasena" name="id">
                        <input type="txt" required minlength="6" placeholder="Ingresé la nueva contraseña" vadlue="<?php echo '********'; ?>" class="form-control w-75" name="cam_contrasena"><br>
                        <button class="btn btn-success">Guardar</button>
                    </form>
                    <?php    }
}
  ?>
                </div>
        </center>
    </body>

    </html>