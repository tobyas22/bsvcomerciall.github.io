
<?php
session_start();
$conexion = mysqli_connect("localhost","root","","login_register_db");

$nombre_user = $_POST['nombre_de_usuario'];
$email = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$string = $nombre_user;
$nombre_user = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);
$string = $email;
$email = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);
$string = $contrasena;
$contrasena = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);

$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 	usuario='$nombre_user' 
 and correo='$email' ");


if (mysqli_num_rows($validar_login) > 0){



  
 
 $result = mysqli_num_rows($validar_login);
 
 if ($result > 0) {
     while ($data = mysqli_fetch_array($validar_login)) {
        
 
 if (password_verify($contrasena, $data['contrasena'])) {
  $_SESSION['correo'] = $email;
  
$_SESSION['correo'];
$_SESSION['correo'];
    
    $sql = 'SELECT * FROM usuarios WHERE correo="'.$_SESSION['correo'].'"';
    
   


    $query = mysqli_query($conexion, $sql);
    if (mysqli_num_rows($query) > 0 ) {
    
    
    while($mostrar_datos = mysqli_fetch_array($query)){
        $_SESSION['id'] = $mostrar_datos['id'] ;
        $_SESSION['id_usuario'] = $mostrar_datos['id'] ;
        $_SESSION['correo_usuario'] = $mostrar_datos['correo'];
        $_SESSION['usuario'] = $mostrar_datos['usuario'];
        $_SESSION['fecha_usu'] = $mostrar_datos['fecha'];
        
}
    
    }
  echo'
  <script>
  alert("has entrado en el chat");
  window.location = "../chat/index_chat.php";
  exit();
  </script>'; 
 }else {
   
  echo'
  <script>
 
  alert("ususario no existe por favor verifique los datos introdusido");
  window.location= "../index.php"
  </script>
  
  
  ';
  exit;
 } 
     }
 
 
    /* */
 
 
  exit();
 }else {
  
     
 }
  
   
 
    
   /*  header("location: bienvenido.php");*/
    
     
 
 }
    
  
    
    



?>
