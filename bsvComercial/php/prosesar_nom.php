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
    
$_SESSION['usuario'];
$id = $_REQUEST['id'];


  $conexion = mysqli_connect("localhost", "root","","login_register_db");

  $cam_nombre = $_REQUEST['cam_nombre'];


  $actualizar = "UPDATE usuarios SET nombre_usuario='$cam_nombre' WHERE id='$id'";


  $resultado = mysqli_query($conexion, $actualizar);
  if ($resultado) {
      echo '<script>alert("Tu Nombre a sido cambiada exitosamente")
      location="/bsvComercial/inicio.php"
      exit();
      </script>';
  } else {
    echo '
    <script>alert("Ha ocurrido un error, intentelo de nuevo")
    location="./prosesar_pass.php"
    exit();
    </script>';

  }
  
}
?>