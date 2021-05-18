<?php

include 'conexion.php';


$nombre = $_POST['nombre_de_servicio'];
$contenido = $_POST['contenido_de_servicio'];
$parametros = $_POST['parametros_de_servicio' ];
$estado = $_POST['estado_de_servicio'];
$comentario = $_POST['comentario_de_servicio'];
$detalle = $_POST['detalle_de_servicio'];

$query = "INSERT INTO  serviciosbsv(nombre,contenido, parametros,  estado, Detalles,comentario) 
VAlUES('$nombre','$contenido', '$parametros','$estado', '$detalle','$comentario')";

 


$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
  echo(' 
  <script>
  alert("servicio almasenado exitosamente");
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  
location = "registrar_editar_servicio.php";
exit();
  </script>
  ');
} else {
  echo('
  
  <script>

  alert("Fallo, por vafor intente lo de nuevo");
history.back();
  </script>
  ');
}

?>
