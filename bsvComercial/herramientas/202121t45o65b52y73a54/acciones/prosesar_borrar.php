<?php
session_start();
if (!isset($_SESSION['usuario'])) {
   
  echo'

  <script>alert("no has iniciado sesion es obligatorio")</script>
  <script>location="./"</script>
  '; 
}else {


}
$id = $_POST['id'];
$id_usuario = $_POST['id_usuario'];


$conexion = mysqli_connect("localhost", "root","","bsv-administracion");

$query = "DELETE FROM herramientas_pu WHERE id='".$id."' and id_usuario='".$id_usuario."'";


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
    echo '<script>alert("eliminado exitosamente");
    location="../admin.php";
    </script>';
} else {
    echo '<script>alert("Error");
    location="../admin.php";
    </script>';
}




?>