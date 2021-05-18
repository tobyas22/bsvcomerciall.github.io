<?php

include 'conexion.php';
$perciomas = (000) ;


$nombre = $_POST['nombre_de_articulo'];
$precio = $perciomas + $_POST['precio_de_producto' ];
$estado = $_POST['estado_de_articulo'];
$detalle = $_POST['detalle_de_articulo'];

$query = "INSERT INTO  productosbsv(nombre, estado,  precio, descripción) 
VAlUES('$nombre', '$estado', '$precio','$detalle')";




$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
  echo(' 
  <script>
  alert("producto almasenado exitosamente");
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  
window.location = "nuevo_producto.php";
exit();
  </script>
  ');
} else {
  echo('
  
  <script>

  alert("Fallo, por vafor intente lo de nuevo");

  </script>
  ');
}

?>
