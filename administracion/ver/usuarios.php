<script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script><?php
session_start();
if (isset($_SESSION['administradores'])) {
    echo '<div style="font-size: 30px;font-family: arial;color:dimgray;position:relative;left:30%;width:800px;" class="bienvenida">Bienvenido: '.$_SESSION['administradores'].' </div>';
} else {
    echo '<script>alert("en esta seccion es obligatori tener una cuenta de administrador para proceder, comunicate conel administrador para mas informacion");</script>
    <script>location="/administracion/"</script>
    ';
}
$conexion = mysqli_connect("p:localhost", "root" ,"","login_register_db");
$sql = "SELECT * FROM usuarios";
$query = mysqli_query($conexion, $sql);




?>

<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV Administracion | usuarios</title>
</head>

<body style="background-color: rgb(202, 255, 237);">
    <div class="container">
        <div class="display-2">Lista de usuarios</div>
        <div class="row">

            <div class="col ">
                <table class="table bg-dark " style="color: rgb(255, 255, 255);">
                    <tr>

                        <td class=" border">Id</td>
                        <td class=" border">Nombre</td>
                        <td class=" border">Usuario</td>
                        <td class=" border">Correo</td>
                        <td class=" border">Contraseña</td>
                        <td class=" border">Fecha</td>
                        <td class=" border">Acciones</td>


                    </tr>
                    <?php
                    if (mysqli_num_rows($query) > 0) {
    while ($mostrar = mysqli_fetch_array($query)) {
        
        echo '
        
           <tr>

                        <td class=" border">'.$mostrar['id'].'</td>
                        <td class=" border">'.$mostrar['nombre_usuario'].'</td>
                        <td class=" border">'.$mostrar['usuario'].'</td>
                        <td class=" border">'.$mostrar['correo'].'</td>
                        <td class=" border">********</td>
                        <td class=" border">'.$mostrar['fecha'].'</td>
                        <td class="border"> <a href="/administracion/ver/acciones/eliminar.php?idusuario='.$mostrar['id'].'">eliminar</a></td>

                    </tr>
        
        ';
    }
} else {
    # code...
}?>
                 
                </table>
            </div>
        </div>
    </div>



</body>

</html>