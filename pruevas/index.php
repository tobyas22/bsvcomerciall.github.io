

<?php


                                                                       


session_start();

if (isset($_SESSION['usuario'])) {
    header('location: ./chat/index_chat.php');
    echo'

   
    
    '; 
}else {
  echo' 

 <script>alert("No has iniciado sesión")</script>
 <script>location="/registro-de-usuarios/"</script>
 
 
 ';
 
}



   


    




?>


