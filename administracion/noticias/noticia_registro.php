<?php

$conexion = mysqli_connect("localhost", "root","","bsv-administracion");

$titulo_noticia = $_POST['titulo_noticia'];

$contenido_noticia = $_POST['contenido_noticia'];

$color_fondo = $_POST['color_fondo'];

$color_texto = $_POST['color_texto'];

$link_imagen = $_POST['link_imagen'];

$radio_b = $_POST['radio_b'];

$fuente_slt = $_POST['fuente_slt'];





$query = "INSERT INTO noticiasbsv(titulo_noticia , contenido_noticia , color_fondo,colorcolor_texto, link_imagen, radio_b,fuente_slt)
 VALUES('$titulo_noticia', '$contenido_noticia', '$color_fondo','$color_texto', '$link_imagen', '$radio_b', '$fuente_slt' )";





$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
  echo(' 
  <script>
  alert("producto almasenado exitosamente");
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  window.location="./noticias.html"

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