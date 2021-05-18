
<?php

$conexion = mysqli_connect("localhost","root","","login_register_db");

$nombre_user = $_POST['nombre_de_usuario'];
$email = $_POST['correo'];
$contrasena = $_POST['contrasena'];



$validar_login = mysqli_query($conexion, "SELECT * FROM usuarios WHERE 	usuario='$nombre_user' 
 and correo='$email'    and contrasena='$contrasena' ");


if (mysqli_num_rows($validar_login) > 0){
    $_SESSION['usuario'] = $email;
   echo'
   <script>
   alert("Bienvenido a  La seccion para postear tus anuncios o elementos");
   window.location = "./202121t45o65b52y73a54/"
   
   </script>'; 
  
    
    exit();

}else {
    echo'
    <script>
   
    alert("ususario no existe por favor verifique los datos introdusido");
    window.location= ./index.html"
    </script>
    
    
    ';
    exit();
}

?>
