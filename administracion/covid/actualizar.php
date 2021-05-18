<?php
session_start();

if (isset($_SESSION['administradores'])) {
    echo '<div style="font-size: 30px;font-family: arial;color:dimgray;position:relative;left:30%;width:800px;" class="bienvenida">Bienvenido: '.$_SESSION['administradores'].' </div>';
} else {
    echo '<script>alert("en esta seccion es obligatori tener una cuenta de administrador para proceder, comunicate conel administrador para mas informacion");</script>
    <script>location="/administracion/"</script>
    ';
}

$conexion = mysqli_connect("p:localhost","root","","bsv-administracion");

?>


<!DOCTYPE html>
<html lang="en">
<?php
if ($_POST) {
   
$a_infectados = $_POST['a_infectados'];
$a_recuperados = $_POST['a_recuperados'];
$a_infectados_t = $_POST['a_infectados_t'];
$a_fallecidos = $_POST['a_fallecidos'];

$sql = "UPDATE `e_covid` SET `Infectados`='$a_infectados',`Recuperados`='$a_recuperados',`Infectados_t`='$a_infectados_t',`fallecidos`='$a_fallecidos'";
$query = mysqli_query($conexion, $sql);
if ($query) {
    echo '<script>alert("Cambios guardados exitosamente")</script>';
} else {
    echo '<script>alert("Error, Intentelo de nuevo")</script>';
}



}

?>
<head>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>

    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <script src="/administracion/covid/script.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar datos de Covid-19</title>
</head>
<style>
    .hide {
        display: none;
    }
</style>

<body>
    <div class="display-3">Vamos a actualizar datos de Coronavirus</div>
    <div class="alert-warning display-4">Para actualizar los datos ingrese la nueva informacion y pulse actualizar</div>
    <div class="container ">
        <div class="row ">
            <div class="col">
                <table class="table border-0">
                    <tr>

                        <td class=" border">Infectados</td>
                        <td class=" border">Recuperados</td>
                        <td class=" border">Infectados En Tolal</td>
                        <td class=" border">Fallecidos</td>
                    </tr>
                    <tr>
                        <form method="POST">
                            <?php

$conexion_c = mysqli_connect("p:localhost","root","","bsv-administracion");
$ping = mysqli_ping($conexion_c);
$sql_c = "SELECT * FROM e_covid";

$query_c = mysqli_query($conexion_c, $sql_c);
while ($mostrar_c = mysqli_fetch_array($query_c)) {
     
     echo'
     <td class=" border"><p id="n_infectados" >'.$mostrar_c['Infectados'].'</p>
      <input type="number" class="hide i_infectados" value="'.$mostrar_c['Infectados'].'" name="a_infectados"></td>
     <td class=" border"> <p id="n_recuperados"> '.$mostrar_c['Recuperados'].'</p>
     <input type="number" class="hide i_recuperados" value="'.$mostrar_c['Recuperados'].'" name="a_recuperados"></td>
     <td class=" border"><p id="n_infectados_t">'.$mostrar_c['Infectados_t'].'</p>
     <input type="number" class="hide i_infectados_t" value="'.$mostrar_c['Infectados_t'].'" name="a_infectados_t"></td>
     <td class=" border"><p id="n_fallecidos">'.$mostrar_c['fallecidos'].'</p>
     <input type="number" class="hide i_fallecidos" value="'.$mostrar_c['fallecidos'].'" name="a_fallecidos"></td>';
}


?>

                    </tr>
                </table>

            </div>
        </div>
    </div>
    <div align="center">
        <button class="btn btn-primary">Guardar</button>
    </div>
    </form>
</body>

</html>