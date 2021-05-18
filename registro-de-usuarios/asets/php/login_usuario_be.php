<?php 

session_start();

$conexion = mysqli_connect("localhost","root","","login_register_db");



$usuario = $_POST['usuario'];
$pass = $_POST['contrasena'];
$pass = hash('sha512', $pass);

$validar_inicio = mysqli_query($conexion, "SELECT * FROM usuarios WHERE  usuario='$usuario'and contrasena='$pass'");

$sql = $validar_inicio;



if (mysqli_num_rows($validar_inicio) > 0){
  $_SESSION['usuario'] = $usuario;

   echo'
   <script>
   alert("has iniciado secion");
   window.location = "./bienvenido.php";
   exit();
   </script> 
    
    
    ';
  /*  header("location: bienvenido.php");*/
    exit();
    

}else {
    echo'
    <script>
    alert("ususario no existe por favor verifique los datos introdusido");
    window.location = "./iniciar-secion.php";
    </script>
    
    
    ';
    exit;
}















?>