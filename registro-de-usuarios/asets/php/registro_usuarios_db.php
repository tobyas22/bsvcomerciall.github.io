<?php 


      include 'conexion_be.php';

      $nombre_usuario = $_POST["nombre_usuario"];
      $correo = $_POST["correo"];
      $usuario = $_POST["usuario"];
      $contrasena = $_POST["contrasena"];
    
      $string = $nombre_usuario;
$nombre_usuario = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);

$string = $correo;
$correo = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);

$string = $usuario;
$usuario = htmlspecialchars( 
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
      $contrasena = hash('sha512', $contrasena);
$verificar_usu = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo' and usuario='$usuario'");

      $query = "INSERT INTO usuarios(nombre_usuario, correo, usuario, contrasena) 
          VALUES('$nombre_usuario','$correo', '$usuario', '$contrasena')";



// verificar que el correo no se rrepita
if (mysqli_num_rows($verificar_usu) > 0) {
  session_destroy();
  echo' 
  <script>
  alert("Usuario Ya existe por favor prueve con otro diferente");
  // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
  
location = "iniciar-secion.php";
  </script>
  ';



} else {
  # code...








      $ejecutar = mysqli_query($conexion, $query);
      if ($ejecutar) {
        echo' 
        <script>
        alert("Usuario almasenado exitosamente");
        // aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien
        
      window.location = "iniciar-secion.php";
        </script>
        ';
      } else {
        echo'
        
        <script>

        alert("Fallo, por vafor intente lo de nuevo");
        window.location = "./registrarse.php";
        </script>
        ';
      }
     }
      
?>