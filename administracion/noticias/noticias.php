<?php
session_start();
if (isset($_SESSION['administradores'])) {
    echo '<div style="font-size: 30px;font-family: arial;color:dimgray;position:relative;left:30%;width:800px;" class="bienvenida">Bienvenido: '.$_SESSION['administradores'].' </div>';
} else {
    echo '<script>alert("en esta seccion es obligatori tener una cuenta de administrador para proceder, comunicate conel administrador para mas informacion");</script>
    <script>location="/administracion/"</script>
    ';
}


?>

<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV Administracion | Notificacion</title>
</head>
<!-- <input type="range" max="50" min="5" value="5" name="imagen" id="">/* -->

<body>
    <div class="nueva_noticia_ctn">
        <h3>Hola , bienvenido en este formulario vas a tener que llenar todos los campos para que la noticia se guarde perfectamente</h3>
        <form action="noticia_registro.php" method="POST">
            <center>
                <input type="text" required placeholder="Titulo de la noticia" class="Titulo_noticia" name="titulo_noticia">


                <input required type="text" placeholder="Contenido de la noticia" class="Contenido_noticia" name="contenido_noticia">

                <p class="txt1">Seleccione el color del fondo para su noticia</p>

                <input required class="selec_color_fondo" value="#6e8b66" title="seleccione un color" type="color" name="color_fondo">

                <p class="txt2">Seleccione el color de las letras </p>

                <input required class="selec_color_texto" value="#242424" title="seleccione un color" type="color" name="color_texto">

                <input required placeholder="El link de el icono para la noticia" type="url" name="link_imagen" class="link_imagen_1">

                <p class="txt3">Un servidor genial para subir imágenes gratis y sin registrarse <a href="https://es.imgbb.com/" target="_blank" rel="noopener noreferrer">imgbb</a> <br> el link se abrirá en una nueva pestaña automáticamente, No olvides <br> ponerle el
                    tiempo de vencimiento a la imagen. Puedes ver un tutorial en imagenes <a href="./tutorial/" target="_blank" rel="noopener noreferrer">aquí</a></p>

                <input required title="seleccionar el radio del borde de la noticia" type="range" max="50" class="selec_radio_borde" min="5" value="10" name="radio_b" id="">

                <p class="txt4">Selecciona el radio de el borde de la noticia</p>

                <select  required  placeholder="Seleccione una fuente recom. 'Arial'"  class="fuente_slt" name="fuente_slt">

            <option value="Arial">Pretederminado</option>
            <option value="Franklin">grande</option>
            <option value="Lucida Sans">normal</option>
            <option value="Arial, Helvetica, sans-serif">balanseado</option>
            <option value=" Courier, monospace">gruezo</option>
                     
                </select>

                <p class="txt5">Seleccione una fuente para toda la noticia esto es independiente como todo lo demás es decir que no va a afectar a las que ya están publicadas</p>

                <button class="enviar_form" type="submit">enviar</button>

                <button class="reset_form" type="reset">restaurar pretederminado</button>
            </center>
        </form>

        <datalist id="slt_fuentes">

            
</datalist>

</body>

</html>
<style>
    .txt1 {
        position: absolute;
        top: 240px;
        left: 300px;
        font-family: arial;
    }
    
    .txt2 {
        position: absolute;
        top: 320px;
        left: 300px;
        font-family: arial;
    }
    
    .txt3 {
        position: absolute;
        top: 450px;
        left: 200px;
        font-family: arial;
    }
    
    .txt4 {
        position: absolute;
        top: 570px;
        left: 290px;
        font-family: arial;
    }
    
    .txt5 {
        position: absolute;
        top: 670px;
        left: 200px;
        max-width: 500px;
        font-family: arial;
    }
    
    .nueva_noticia_ctn {
        position: absolute;
        left: 180px;
        width: 900px;
        height: 800px;
        border: groove #000000 5px;
        border-radius: 10px;
        margin-top: 30px;
        padding-top: 30px;
        padding-left: 30px;
        background-color: rgb(177, 177, 177);
    }
    
    .Titulo_noticia {
        position: absolute;
        left: 32%;
        top: 20%;
        width: 300px;
        height: 30px;
        font-size: 100%;
        outline: none;
        border-radius: 10px;
    }
    
    .Contenido_noticia {
        position: absolute;
        left: 32%;
        top: 25%;
        width: 300px;
        height: 30px;
        font-size: 100%;
        outline: none;
        border-radius: 10px;
    }
    
    .selec_color_fondo {
        position: absolute;
        top: 35%;
        left: 45%;
    }
    
    .selec_color_texto {
        position: absolute;
        top: 45%;
        left: 45%;
    }
    
    .link_imagen_1 {
        position: absolute;
        left: 32%;
        top: 50%;
        width: 300px;
        height: 30px;
        font-size: 100%;
        outline: none;
        border-radius: 10px;
    }
    
    .selec_radio_borde {
        position: absolute;
        left: 39%;
        top: 65%;
        width: 190px;
        height: 30px;
        font-size: 100%;
        outline: none;
        border-radius: 10px;
    }
    
    .fuente_slt {
        position: absolute;
        left: 32%;
        top: 75%;
        width: 300px;
        height: 30px;
        font-size: 100%;
        outline: none;
        max-width: 500px;
        border-radius: 10px;
    }
    
    .enviar_form {
        position: absolute;
        top: 95%;
        left: 420px;
    }
    
    .reset_form {
        position: absolute;
        top: 95%;
        left: 720px;
    }
</style>