<?php
session_start();
$conexion = mysqli_connect("localhost","root","","bsv-administracion") ;

if (!empty($_POST)) {
   

$alert='';

if (empty($_POST['nombre_a']) ||  empty($_POST['informacion_a']) || empty($_POST['contenido_a']) || empty($_POST['correo_e']) || empty($_POST['numero_tel']) ||   empty($_POST['contacto_informacion']) ||  empty($_POST['fuente_a']) || empty($_POST['texto_color_a']) ||  empty($_POST['fondo_color_a']) ||  empty($_POST['sombra_color_a'])   ) {
   echo '
   <script>alert("todos los campos son obligatorios")</script>
   ';
}else {

     
      $nombre_a = $_POST['nombre_a'];
      $informacion_a = $_POST['informacion_a'];
      $contenido_a = $_POST['contenido_a'];
      $usuario_n = $_POST['usuario_n'];
      $correo_e = $_POST['correo_e'];
      $numero_tel = $_POST['numero_tel'];
      $contacto_informacion = $_POST['contacto_informacion'];
      $fuente_a = $_POST['fuente_a'];
      $texto_color_a = $_POST['texto_color_a'];
      $fondo_color_a = $_POST['fondo_color_a'];
      $sombra_color_a = $_POST['sombra_color_a'];
      $d_derecha = $_POST['d_derecha'];
      $d_abajo = $_POST['d_abajo'];
      $b_borde_r = $_POST['b_borde_r'];
      
      /*fotos*/
$foto_a = $_FILES['foto_a'];
      $nombre_foto = $foto_a['name'];
      $type = $foto_a['type'];
      $url_tem = $foto_a['tmp_name'];

      $imgProducto = 'img_producto.png';

if ($nombre_foto !='') {
   $destino       = './suvidasImagenes/';
   $imgNombre     = 'img_' .md5(date('d-m-Y H:m:s'));
   $imgProducto   = $imgNombre .'.jpg';
   $src           = $destino.$imgProducto;
}


$query ="INSERT INTO herramientas_pu(nombre_a,  informacion_a,    contenido_a,   usuario_n,    correo_e,    numero_tel,   contacto_informacion,    fuente_a,  texto_color_a,    fondo_color_a,   sombra_color_a,    d_derecha,      d_abajo,      b_borde_r,      imgProducto)
                            VALUES('$nombre_a','$informacion_a', '$contenido_a','$usuario_n', '$correo_e','$numero_tel','$contacto_informacion', '$fuente_a','$texto_color_a','$fondo_color_a','$sombra_color_a', '$d_derecha',   '$d_abajo',   '$b_borde_r',   '$imgProducto')";


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



 if ($ejecutar) {
   if ($nombre_foto !=''){
      move_uploaded_file($url_tem,$src);
   }



 }




 
}



}



?>