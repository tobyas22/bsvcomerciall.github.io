<?php

$conexion = mysqli_connect("localhost","root","", "bsv-administracion" );

session_start();



$mensage = $_POST['mensaje'];
$string = $mensage;
$mensage = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);
  
if (!$_SESSION['usuario']) {
  $usuario = "Usuario De BSV";
} else {
  $usuario = $_SESSION['usuario'];
}


$query =" INSERT INTO    chat(mensage,usuario )      VALUES('$mensage','$usuario')"  ;



/*
if ($conexion) {
    echo ("conectado exitosamentee a la base de datos");
} else {
    echo ("no se pudo conectar a la base de datos");
}

*/

$ejecutar = mysqli_query($conexion, $query);
if ($ejecutar) {
  echo(' 
  <script>
  
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  
window.location = "./chat/index_chat.php";
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