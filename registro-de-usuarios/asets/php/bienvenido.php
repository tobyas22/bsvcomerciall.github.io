<?php 



session_start();
if (!isset($_SESSION['usuario'])) {
   echo '
   <script>
   alert("por favor debes iniciar sesión ");
   window.location = "iniciar-secion.php";
   </script>
 
   
   ';  
session_destroy();
die();




}else {
    echo '
    <script>
    alert("has iniciado secion");
    
    </script>
  
    
    ';  
}




?>


<html>

<head>
    <title>Bienvenido</title>
    <meta charset=“UTF-8”>
  

    <meta http-equiv="refresh" content="7; url=/bsvcomercial/inicio.php">
    <style>
        .spinner {
       
            width: 36px;
            height: 36px;
      
        }
        
        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <script>
    </script>
    <center>
        <h1>lo estamos redirigiendo a la pagina prinsipal porvafor espera 8 segundos </h1>
    <img class="cargando" src="/bsvComercial/asets/img/cargando.gif"> 
      
    </center>
</body>

</html>
<style>
    .cargando {
        width: 30px;
        
    }
    @media (max-width:600px){
        h1 {
            position:relative;
            font-size:30px;
            width:300px;
        }
    }
</style>