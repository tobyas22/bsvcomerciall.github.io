

<?php
session_start();
$_SESSION['usuario'];
$_SESSION['correo_usuario'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV Herramientas </title>
</head>

<body>
    <?php


  

                                                                       

  
 
  
  
  if (!isset($_SESSION['usuario'])) {
     
      echo'
  
      <script>
      alert("No has iniciado session Obligatorio");
      window.location="../index.php"
      </script>
     
      '; 
  }else {

  }
  
       
        echo '<div class="oction_ver_publicados" style=" z-index: 99;"><a href="./admin.php">Ver y administrar tus publicaciones</a></div>';
  
echo '
<div class="texto_bsv_comercial">
    <a class="bsv_link" href="/bsvComercial/"><sup> BSV comercial</sup></a> <sub class="txt_mas_pequeño">Herramientas</sub></div>
<hr class="divisoria1">
<div class="condiciones_de_usu">Esta herramienta esta exclusivamente reservada para publicar artículos con el objetivo de proporcionar una forma de vender artículos facilmente </div>



<div class="ctn_forms">
    <div class="nombres_input">
        <h3>El nnmbre de su articulo</h3>
        <h3>La iformacion del articulo</h3>
        <h3>El contenido de su publicacion</h3>
        <h3>El nombre con el que se registro</h3>
        <h3>Su correo electrotico para el contacto</h3>
        <h3>Su nuemero de telefono Ej: +595 984985759</h3>
    </div>
    <form  method="post" enctype="multipart/form-data">
        <br><br>
        <input  type="hidden" value="'.$_SESSION['id'] .'" name="id_usuario">
        <input  maxlength="40" placeholder="Nombre de su articulo" class="input_txt" type="txt" name="nombre_a" id=""> <br>
        <input  maxlength="250" placeholder="Informacion de articulo" class="input_txt" type="txt" name="informacion_a" id=""> <br>
        <input  maxlength="250" placeholder="contenido de articulo" class="input_txt" type="txt" name="contenido_a" id=""> <br>
        <input  maxlength="30" value="'.$_SESSION['usuario'].'"disabled class="input_txt" type="txt" name="usuario_n" id=""> <br>
        <input  maxlength="40" disabled value="'.$_SESSION['correo_usuario'].'" class="input_txt" type="txt" name="correo_e" id=""> <br>
        <input  maxlength="27" placeholder="Su numero de telefono " class="input_txt" value="+595 " type="txt" name="numero_tel" id=""> <br>
        <p>Imagen de producto</p>
        <input type="file"accept=" .jpe, .jpg, .jpeg, .gif, .png, .bmp, .ico, .svg, .svgz, .tif, .tiff, .ai, .drw, .pct, .psp, .xcf, .psd, .raw" name="foto_a" id=""> <br>

        <textarea maxlength="550"  name="contacto_informacion" id="" placeholder="informacion de contacto " cols="40" rows="10"></textarea><br>
        <br>
        <p>seleccione su tipo de texto</p>
        <select name="fuente_a" list="d_fuentes" id="">
        <option value="arial">Pretederminado</option>
        <option value="monospace">Mas chica</option>
        <option value="sans-serif">estylo firme</option>
        <option value="Georgia">Con bordes anchos</option>
        <option value="serif">Con bordes mas cortos</option>
        <option value="Times">Estandar</option>
        <option value="Impact">Negrita</option>
    </select>
        <datalist id="funtes_desplegables">
            <option value="Arial">
            <option value="monospace">
            <option value="sans-serif">
            <option value="Georgia">
            <option value="serif">
            <option value="Times">
            <option value="Impact">
        </datalist>



        <p>color de texto</p><br>
        <input  type="color" name="texto_color_a" id=""><br>
        <p>color de fondo</p><br>
        <input  type="color" value="#80fff0" name="fondo_color_a" id=""><br>
        <p>color de sombra</p><br>
        <input  type="color" value="#5e5e5e" name="sombra_color_a" id=""><br>

        <h3>Direcion de sombras</h3><br>

        <p>Hacia la derecha</p>
        <input  maxlength="20" value="8" type="range" name="d_derecha" id=""><br>
        <p>Hacia la abajo</p>
        <input  max="20" value="15" type="range" name="d_abajo" id=""><br><br>
        <p>Radio del borde</p>
        <input  max="50" min="5" value="15" type="range" name="b_borde_r" id=""><br>

        <button type="submit">Guardar</button> <button class="restaurar_b" type="reset">Restaurar</button>
    </form>
</div>';





$conexion = mysqli_connect("localhost","root","","bsv-administracion") ;

if (!empty($_POST)) {
   

$alert='';

if (empty($_POST['nombre_a']) ||  empty($_POST['informacion_a']) || empty($_POST['contenido_a']) || empty($_POST['numero_tel']) ||   empty($_POST['contacto_informacion']) ||  empty($_POST['fuente_a']) || empty($_POST['texto_color_a']) ||  empty($_POST['fondo_color_a']) ||  empty($_POST['sombra_color_a'])   ) {
   echo '
   <div class="todos_requeridos">!Todos los campos requeridos¡</div>
   <meta http-equiv="refresh" content="3; url=./">
   ';
}else {

      $id_usuario = $_POST['id_usuario'];
      $nombre_a = $_POST['nombre_a'];
      $informacion_a = $_POST['informacion_a'];
      $contenido_a = $_POST['contenido_a'];
      $usuario_n = $_SESSION['usuario'];
      $correo_e = $_SESSION['correo_usuario'];
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


$query ="INSERT INTO herramientas_pu(id_usuario, nombre_a,  informacion_a,    contenido_a,   usuario_n,    correo_e,    numero_tel,   contacto_informacion,    fuente_a,  texto_color_a,    fondo_color_a,   sombra_color_a,    d_derecha,      d_abajo,      b_borde_r,      imgProducto)
                            VALUES('$id_usuario', '$nombre_a','$informacion_a', '$contenido_a','$usuario_n', '$correo_e','$numero_tel','$contacto_informacion', '$fuente_a','$texto_color_a','$fondo_color_a','$sombra_color_a', '$d_derecha',   '$d_abajo',   '$b_borde_r',   '$imgProducto')";


$ejecutar = mysqli_query($conexion, $query);

if ($ejecutar) {
  echo(' 
  <div class="funciono_mensage">Publicado exitosamente</div>
  <meta http-equiv="refresh" content="5; url=./">
  ');
} else {
  echo('
  <p class="error_mensaje">error por favor intentarlo de nuevo</p>
  <meta http-equiv="refresh" content="3; url=./">
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



</body>

</html>
