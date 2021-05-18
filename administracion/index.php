<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admiistradores</title>
</head>

<body>
    <div class="txt1">Ya eres miembro accede </div>
    <div class="formularios">

        <form method="post">

<?php 
session_start();

if (isset($_SESSION['administradores'])) {
    echo '<center> <a style="color:blue; font-size: 20px; font-family:arial;" href="/administracion/principal.php">Acede a la pagina</a></center>';
} else {
  
}

if ($_POST) {
  
    $nombre_admin = $_POST['nombre_admin'];
    $idadmin = $_POST['idadmin'];
 ;
    
    if (empty($_POST['nombre_admin'])  ||  empty($_POST['idadmin'])        ) {
        echo' <p class="no">Error, campos obligatorios</p>';
    } else {
       
    $conexion = mysqli_connect("localhost","root","","login_register_db");
    
    
  
    
$validar_admin = mysqli_query($conexion, "SELECT * FROM administradores WHERE nombre_admin='$nombre_admin' and id_admin='$idadmin'

");
    


   if (mysqli_num_rows($validar_admin) > 0) {
       $_SESSION['administradores'] = $nombre_admin;
        echo'<p class="si">Has entrado correctamente</p>';
        echo'<center> <a style="color:blue; font-size: 20px; font-family:arial;" href="/administracion/principal.php">Acede a la pagina</a></center>';
   } else {
     echo' <p class="no">Error No se encuentrar datos validos</p>';
   }
   



    
    
    
    
      
   
    
    
}
    }

?>


            <p>Su nombre de administrador</p>

            <input type="text" class="nombreadmin" name="nombre_admin">
            <p>La id de su cuenta</p>
            <input type="text" class="iduseradmin" name="idadmin"> <br>
            <button type="submit" class="entrar">Entrar</button>

        </form>
        <div class="txt2">La id de su cuenta se crea automáticamente cuando se crea la cuenta, si desconoce esta información por favor comunícate con el administrador del servidor para mas atención</div>

        <div class="txt3">Tambien puedes crear una cuenta de administrador para otra persona <a href="./create.php">Aqui</a></div>


    </div>

</body>

</html>
<style>
    .si {
        position: relative;
        font-size: 20px;
        left: 300px;
        background-color: chartreuse;
        width: 256px;
    }
    
    .no {
        position: relative;
        font-size: 20px;
        left: 300px;
        background-color: red;
        width: 250px;
        color: black;
    }
    
    .formularios {
        position: relative;
        left: 200px;
        z-index: 4;
        height: 500px;
        background-color: rgb(219, 219, 219);
        top: 100px;
        padding-top: 50px;
        width: 860px;
    }
    
    .formularios input {
        width: 200px;
        height: 30px;
        font-size: 100%;
        border-radius: 20px;
        border: solid 1px black;
        outline: none;
        padding-left: 8px;
        margin-left: 310px;
    }
    
    .txt2 {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 35px;
    }
    
    .formularios input:hover {
        width: 200px;
        height: 30px;
        font-size: 120%;
        border-radius: 20px;
        border: solid 1px rgb(255, 255, 255);
        outline: none;
        padding-left: 8px;
        color: aliceblue;
        background-color: rgb(0, 0, 0);
        margin-left: 310px;
    }
    
    p {
        position: relative;
        left: 320px;
        width: 400px;
        font-family: arial;
    }
    
    .entrar {
        position: relative;
        left: 390px;
        margin-top: 30px;
    }
    
    .txt3 {
        font-family: arial;
        font-size: 30px;
    }
    
    a {
        text-decoration: none;
    }
    
    .txt1 {
        position: absolute;
        left: 390px;
        font-size: 40px;
        z-index: 5;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>