<script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>

<?php
session_start();
if (isset($_SESSION['administradores'])) {
    echo '<div style="font-size: 30px;font-family: arial;color:dimgray;position:relative;left:30%;width:800px;" class="bienvenida">Bienvenido: '.$_SESSION['administradores'].' </div>';
} else {
    echo '<script>alert("en esta seccion es obligatori tener una cuenta de administrador para proceder, comunicate conel administrador para mas informacion");</script>
    <script>location="/administracion/"</script>
    ';
}
$conexion = mysqli_connect("p:localhost", "root" ,"","login_register_db");
$seguridad = mysqli_ping($conexion);
if ($_GET) {
    # code...

$id_usuario = $_GET['idusuario'];
if ($_GET['idusuario'] = NULL) {
    echo '<script>alert("No existe ningun usuario con esa id")</script>';
}
$sql = "SELECT * FROM usuarios WHERE id='$id_usuario'";

$ver_usuario = mysqli_query($conexion, $sql);
while ($mostrar_u = mysqli_fetch_array($ver_usuario)) {
    echo "<script>
    $(document).ready(function () {
        $('#nombre_u_i').html('".$mostrar_u["usuario"]."');
    });
    
    
    </script>";
   $id_user = $mostrar_u["id"];
    
   
}

}

?>

<!DOCTYPE html>
<html lang="es>">

<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
</head>

<body style="background-color: rgb(180, 111, 111);">
    <div class="display-3">¿Estas seguro de que quieres eliminar a <b id="nombre_u_i"></b></div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div align="center" class=" "><form method="POST"> <input type="hidden" name="id_a_b" value="<?php echo $id_user; ?>"> <button class="btn btn-danger ">Aceptar</botton></form></div>
    <br>
    <br>
    <div align="" class=""> <button class="btn btn-primary ">Cancelar</botton></div>
</body>
</html>
<script>
    $(document).ready(function () {
        $(".btn-primary").click(function () {
            history.back();
        })
    });
</script>





<?php
if ($_POST) {
    $id_a_b = $_POST['id_a_b'];

$consulta = "DELETE FROM `usuarios` WHERE id='$id_a_b'";
$query = mysqli_query($conexion, $consulta);
if ($query) {
    echo '<script>alert("Usuarios Borrado exitosamente")</script>';
}else{
    
}

}


?>