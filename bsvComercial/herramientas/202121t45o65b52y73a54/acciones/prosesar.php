<?php
session_start();
if (!isset($_SESSION['correo_usuario'])) {
   
  echo'

  <script>alert("no has iniciado sesion es obligatorio")</script>
  <script>location="./"</script>
  '; 
}else {


}

if ($_POST) {
    
$_SESSION['correo_usuario'];
$id = $_REQUEST['id'];
$id_usuario = $_REQUEST['id_usuario'];

//*valores 

$nombre_a = $_POST['nombre_a'];
$informacion_a = $_POST['informacion_a'];
$contenido_a = $_POST['contenido_a'];
$numero_tel = $_POST['numero_tel'];
$contacto_informacion = $_POST['contacto_informacion'];
$fuente_a = $_POST['fuente_a'];
$texto_color_a = $_POST['texto_color_a'];
$fondo_color_a = $_POST['fondo_color_a'];
$sombra_color_a = $_POST['sombra_color_a'];
$d_derecha = $_POST['d_derecha'];
$d_abajo = $_POST['d_abajo'];
$b_borde_r = $_POST['b_borde_r'];





  $conexion = mysqli_connect("localhost", "root","","bsv-administracion");
  $actualizar = "UPDATE herramientas_pu SET  nombre_a='$nombre_a', informacion_a='$informacion_a',contenido_a='$contenido_a', numero_tel='$numero_tel', contacto_informacion='$contacto_informacion',fuente_a='$fuente_a', texto_color_a='$texto_color_a', fondo_color_a='$fondo_color_a',sombra_color_a='$sombra_color_a', d_derecha='$d_derecha', d_abajo='$d_abajo', b_borde_r='$b_borde_r'WHERE id='$id' and id_usuario='$id_usuario'";





  $resultado = mysqli_query($conexion, $actualizar);
  if ($resultado) {
      echo '<script>alert("Tu datos an sido cambiados exitosamente")
      location="/bsvComercial/inicio.php"
      exit();
      </script>';
  } else {
    echo '
    <script>alert("Ha ocurrido un error, intentelo de nuevo")
    location="./editar.php"
    exit();
    </script>';

  }

 
}
?>