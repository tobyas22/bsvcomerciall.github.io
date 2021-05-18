<?php
    session_start();
    if (!$_SESSION['usuario']) {
      echo'error';  
    } 


    $id_usuario = $_REQUEST['id_usuario'];
       
            $id = $_REQUEST['id'];
        
    
    
    if ($id_usuario != $_SESSION['id_usuario'] ) {
        echo '
        <script>alert("!!solo se puede editar tu cuenta madita sea¡¡");

        location="/";
        exit();
        
        </script>

        
        ';}
    
    
    ?>

    <style>
        .pregunat {
            font-size: 60px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: black;
        }
        
        .aceptar {
            position: absolute;
            left: 44%;
            top: 300px;
            width: 120px;
            height: 30px;
            background-color: red;
            border: solid 1px black;
        }
    </style>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Borra una publicacion</title>
    </head>

    <body>
        <div class="pregunat">¿Estas seguro de que quieres eliminar esa publicacion</div>

        <form action="./prosesar_borrar.php" method="post">
            <?php
    echo '<input type="hidden" value="'.$id.'" name="id">';
    echo '<input type="hidden" value="'.$id_usuario.'" name="id_usuario">';
    
    ?>
                <button class="aceptar">Aceptar </button>
        </form>
        <script>
            function regresar() {
                history.back();
            }
        </script>
        <button onclick="regresar()">Cancelar</button>
    </body>

    </html>