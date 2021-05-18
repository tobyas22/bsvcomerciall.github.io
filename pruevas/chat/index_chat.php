<?php
$conexioid = mysqli_connect("p:localhost", "root", "", "login_register_db");


/*
while($mostrar = mysqli_fetch_array($result)){
echo '
<script>

</script>

';

}
*/session_start();

if (isset($_SESSION['usuario'])) {
   
  
    echo '<div class="mostrar_usuario">'. " ".$_SESSION['usuario']. '</div>';
   
    
    
}else {
  echo'  <h1>Puedes seguir escribiendo sin iniciar sesion pero se recomienda hacerlo</h1>';
}








?>

    <style>
        .destruir_session {
            top: 180px;
            text-decoration: none;
            color: black;
            position: absolute;
            font-size: 30px;
        }
        
        .abajo {
            position: absolute;
            top: 95%;
        }
        
        .body_index {
            background-color: rgb(115, 115, 115);
        }
        
        .chat_dentro_de_index {
            position: absolute;
            left: 420px;
            height: 750px;
            width: 450px;
            background-color: aliceblue;
        }
        
        .ingrese_texto {
            cursor: auto;
            width: 450px;
            position: fixed;
            top: 780px;
            left: 420px;
            height: 40px;
            font-size: 100%;
            border-bottom-left-radius: 20px;
            border-top-left-radius: 20px;
            outline: none;
            box-shadow: 2px 2px 6px 12px rgb(68, 68, 68);
            background-color: rgb(224, 133, 48);
        }
        
        .boton_enviar {
            position: fixed;
            left: 869px;
            top: 780px;
            font-size: 17px;
            height: 40px;
            border: none;
            background-color: rgb(29, 125, 189);
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            width: 70px;
        }
        
        .texto1 {
            font-size: 35px;
            position: absolute;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: rgb(255, 255, 255);
        }
        
        .mostrar_usuario {
            position: absolute;
            left: 940px;
            font-size: 30px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        
        @media (max-width:450px) {
            .body_index {
                background-color: rgb(192, 250, 231);
            }
            .mostrar_usuario {
                position: absolute;
                left: 140px;
                z-index: 5;
                top: 80px;
                font-size: 17px;
                font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            }
            .destruir_session {
                top: 750px;
                text-decoration: none;
                color: black;
                position: absolute;
                font-size: 30px;
                left: 200px;
            }
            .chat_dentro_de_index {
                position: absolute;
                left: 0px;
                height: 550px;
                width: 350px;
                background-color: aliceblue;
            }
            .ingrese_texto {
                z-index: 5;
                cursor: auto;
                width: 250px;
                position: fixed;
                left: 20px;
                height: 40px;
                top: 85%;
                font-size: 100%;
                outline: none;
                box-shadow: 2px 2px 6px 3px rgb(68, 68, 68);
                background-color: rgb(224, 133, 48);
                border-bottom-left-radius: 20px;
                border-top-left-radius: 20px;
            }
            .boton_enviar {
                cursor: auto;
                width: 250px;
                z-index: 5;
                position: fixed;
                left: 270px;
                height: 40px;
                top: 85%;
                border: none;
                background-color: rgb(29, 125, 189);
                border-top-right-radius: 20px;
                border-bottom-right-radius: 20px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                width: 70px;
            }
            .texto1 {
                font-size: 25px;
                height: 100px;
                position: relative;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
                color: rgb(68, 68, 68);
            }
            .abajo {
                position: absolute;
                top: 96%;
            }
        }
    </style>




    <!DOCTYPE html>
    <html lang="es">

    <head>
        <script src="/bsvComercial/js/jquery-3.5.0.js"></script>
        <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>

        <link rel="stylesheet" href="/bdg/js/pushbar.css">
        <script src="/bdg/js/pushbar.js"></script>
        <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
        <script src="/bsvComercial/js/bootstrap.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BSV comercial chat grupal</title>
        <meta name="description" content="Chatea en vivo con cualquier usuario de bsvcomercial">

    </head>

    <body class="body_index">
        <div class="texto1">Bienvenidos al chat publico <br> de bsv comercial</div>
        <iframe class="chat_dentro_de_index" src="./chat.php" frameborder="5"></iframe>
        <form action="/pruevas/chat_grupal.php" method="POST">



            <input maxlength="133" inputmode="latin-prose" type="text" mozactionhint="next" name="mensaje" class="ingrese_texto" required>






            <button type="submit" class="boton_enviar">Enviar</button>




        </form>
        <br>
        <a class="destruir_session" href="/pruevas/phps/destruir_session.php">serrar sesion</a>
        <div class="abajo">BY Tobyas Sosa</div>

    </body>

    </html>


    <style>
        .ingrese_nombre {
            position: relative;
            left: 900px;
            width: 200px;
            height: 30px;
            font-size: 100%;
        }
        
        @media (max-width: 450px) {
            .ingrese_nombre {
                position: relative;
                top: -70px;
                left: 130px;
                width: 200px;
                height: 30px;
                font-size: 100%;
            }
        }
    </style>