<?php

                                                                       


session_start();

if (isset($_SESSION['usuario'])) {
    header('location: ./202121t45o65b52y73a54/');
    echo'

   
    
    '; 
}else {
  echo' 

 <script>alert("No has iniciado sesión")</script>
 <script>location="/registro-de-usuarios/"</script>
 
 
 ';
 
}



   


    




?>
