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

<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear cuenta de administrador</title>
</head>

<body>
    <div class="ctn_todo">
        <div class="txt1">Cree una cuenta de administrador en BSVcomercial</div>

        <div class="ctn_formularios">
            <form  method="post">
<?php


$conexion2 = mysqli_connect("localhost","root","","login_register_db");


$_SESSION['administradores'];






   
    
    
    
    
    
   

    
    
      
    

if ($_POST) {
  
$nombre_admin = $_POST['nombre_admin'];
$idadmin = $_POST['idadmin'];
$telefono = $_POST['telefono'];

if (empty($_POST['nombre_admin'])  ||  empty($_POST['idadmin'])   ||  empty($_POST['telefono'])        ) {
    echo' <p class="no">Error, campos obligatorios</p>';
} else {
   
$conexion = mysqli_connect("localhost","root","","login_register_db");
$sql = "INSERT INTO administradores(nombre_admin, id_admin, numero_tel) 
VALUE('$nombre_admin', '$idadmin', '$telefono')";

$query = mysqli_query($conexion, $sql);

if ($query) {
    echo'<p class="si">Administrador registrado correctamente</p>';
} else {
    echo' <p class="no">Error al registrar</p>';
}



  
}


}


?>
                    <p>Su nombre de administrador</p>
                    <input type="text" name="nombre_admin">

                    <p>Su numero de telefono</p>
                    <input type="tel" name="telefono">
                    <p></p>
                    <button type="submit">Guardar</button>

                    <script>
                        var num = Math.floor((Math.random() * (11443321 + 32154345)) + 825)

                        document.write("<input class='num' value='" + num + "' type='text' name='idadmin'>")
                    </script>
            </form>
            <p>Este atento para anotar la id de administrador !importante¡</p>
        </div>


    </div>
<?php
    if ($_POST) {
        
    

    echo "
    <div class='mostrar_result'>
        <h2>Resultado</h2>
        <hr>
        <div class='nombre_r'>$nombre_admin</div>
        <div title='Su id' id='id_copiar' class='id_r'>Su id: <q>$idadmin</q></div>
        <div class='telefono_r'>$telefono</div>

    </div>";
}

?>

</body>

</html>
<style>
    .nombre_r {
        position: absolute;
        left: 180px;
        font-family: arial;
        font-size: 19px;
        top: 70px
    }
    
    .id_r {
        position: absolute;
        left: 180px;
        font-family: arial;
        font-size: 19px;
        top: 120px
    }
    .bienvenida{
        font-size: 30px;
        font-family: arial;
        color:dimgray;
        position:relative;
        left:30%;
        width:800px;
    }
    .telefono_r {
        position: absolute;
        left: 180px;
        font-family: arial;
        font-size: 19px;
        top: 170px
    }
    
    .mostrar_result {
        position: absolute;
        background-color: rgb(226, 226, 226);
        left: 400px;
        width: 450px;
        height: 300px;
    }
    
    h2 {
        position: relative;
        left: 170px;
        font-family: arial;
    }
    
    .si {
        position: relative;
        font-size: 20px;
        left: 70px;
        background-color: chartreuse;
        width: 356px;
    }
    
    .no {
        position: relative;
        font-size: 20px;
        left: 170px;
        background-color: red;
        width: 150px;
        color: black;
    }
    
    .num {
        display: none;
    }
    
    .txt1 {
        font-family: arial;
        font-size: 40px;
        color: rgb(43, 43, 43);
        color-interpolation-filters: sRGB;
    }
    
    .ctn_formularios {
        position: relative;
        left: 370px;
        width: 500px;
        background-color: rgb(173, 173, 173);
        border-radius: 20px;
    }
    
    .ctn_formularios input {
        width: 200px;
        height: 25px;
        position: relative;
        border-radius: 19px;
        left: 150px;
        outline: none;
    }
    
    button {
        position: relative;
        left: 220px
    }
    
    p {
        color: rgb(66, 66, 66);
        font-size: 30px;
        font-family: arial;
    }
</style>