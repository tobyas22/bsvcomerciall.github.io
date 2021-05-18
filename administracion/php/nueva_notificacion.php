
<!DOCTYPE html>

<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV herramientas de administracion</title>
    <link rel="stylesheet" href="style.css">

    <style>
        .nuevo_producto {
            top: 30px;
            left: 100px;
            width: 1070px;
            height: 800px;
            background-color: rgb(149, 155, 75);
            position: relative;
            border-radius: 39px;
        }
        
        h3 {
            color: rgb(66, 66, 66);
            font-family: sans-serif;
        }
        
        input {
            position: relative;
            width: 350px;
            height: 30px;
            font-size: 100%;
            outline: none;
        }
        
        h1 {
            font-family: cursive;
        }
        
        fieldset {
            position: absolute;
            left: 33%;
            border-color: black;
            border-top-color: blue;
            animation-duration: 1s;
            animation: ease infinite;
        }
        
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }
        
        .details1 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            position: absolute;
            background-color: rgb(173, 173, 173);
            margin-left: 33.4%;
            z-index: 5;
            border: none;
        }
        
        .details2 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            position: absolute;
            background-color: rgb(196, 196, 196);
            margin-left: 33.4%;
            z-index: 4;
        }
        
        .details3 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            position: absolute;
            background-color: rgb(219, 219, 219);
            margin-left: 33.4%;
            z-index: 3;
        }
        
        .details4 {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size: 19px;
            position: absolute;
            background-color: rgb(177, 177, 177);
            margin-left: 33.4%;
            z-index: 2;
        }
    </style>
</head>

<body>
    
    <script>
        var color
        do {
            color = prompt("contraseña de administrador para entrar", "");
        }





        while (color != "bsv-82-82")
    </script>


    <div class="nuevo_producto">
        <center>
            <h1>bsv Administracion - nueva Notificación</h1>
            <fieldset>
                <form method="POST" action="registrar_producto.php">
                    <br>
                    <h3>Titulo de la notificacion</h3>
                    <input>
            </fieldset>
        </center>



    </div>

</body>

</html>