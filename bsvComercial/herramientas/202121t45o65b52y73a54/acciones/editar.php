<?php
session_start();

if (!isset($_SESSION['usuario'])) {
   
    echo'

    <script>alert("no has iniciado sesion es obligatorio")</script>
    <script>location="./"</script>
    '; 
}else {
  

}



?>

    <!DOCTYPE html>
    <html lang="es">
    <style>
        .contrasena {
            position: relative;
            height: 40px;
            padding-left: 0px;
            font-size: 100%;
        }
        
        .txt_insert {
            width: 300px;
            height: 40px;
            margin-top: 10px;
            outline: none;
            border: solid 2px black;
            font-size: 100%;
            border-radius: 40px;
        }
        
        .contacto_informacion {
            outline: none;
            font-family: arial;
            font-size: 20px;
        }
        
        .ctn_editar {
            position: relative;
            background-color: rgb(194, 194, 194);
            padding-top: 50px;
            font-family: arial;
        }
        
        .texto_prinsipal {
            font-size: 50px;
        }
        
        .text_2 {
            font-size: 30px;
        }
    </style>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar contraseña</title>
    </head>

    <body>
        <center>
            <?php
        $conexion = mysqli_connect("localhost", "root","","bsv-administracion");
        $_SESSION['usuario'];
        if ($_REQUEST) {
            # code...
        
        $id_usuario = $_REQUEST['id_usuario'];
        
        $id = $_REQUEST['id'];
        
        if ($id_usuario != $_SESSION['id_usuario'] ) {
            echo '
            <script>alert("!!solo se puede editar tu cuenta madita sea¡¡");

            location="/";
            exit();
            
            </script>

            
            ';}
        
        $sql = "SELECT * FROM herramientas_pu WHERE id='$id' and id_usuario='$id_usuario' ";
        
        
    
    
        $query = mysqli_query($conexion, $sql);
        if (mysqli_num_rows($query) > 0 ) {
        
        
        while($mostrar_datos = mysqli_fetch_array($query)){
            

        
                 

      
        
       ?>
                <div class="ctn_editar">
                    <div class="texto_prinsipal">Vamos a cambiar tu Publicacion</div>


                    <form action="./prosesar.php" method="POST">
                        <div class="text_2">Ingrese sus Nuevos valores</div>

                        <div><input type="hidden" value="<?php echo $mostrar_datos['id']; ?>" name="id"></div>
                        <div><input type="hidden" value="<?php echo $mostrar_datos['id_usuario']; ?>" name="id_usuario"></div>
                        <b>El nuevo nombre</b>
                        <div><input type="txt" value="<?php echo $mostrar_datos['nombre_a']; ?>" class="nombre_n txt_insert" name="nombre_a"></div>
                        <b>La nueva informacion</b>
                        <div><input type="txt" value="<?php echo $mostrar_datos['informacion_a']; ?>" class="info_n txt_insert" name="informacion_a"></div>
                        <b>El nuevo contenido de su publicacion</b>
                        <div><input type="txt" value="<?php echo $mostrar_datos['contenido_a']; ?>" class="contenido_a txt_insert" name="contenido_a"></div>
                        <b>Su nuevo numero de telefono</b>
                        <div><input type="tel" value="<?php echo $mostrar_datos['numero_tel']; ?>" class="numero_tel txt_insert" name="numero_tel"></div>
                        <b>Ingrese su informacion de contacto</b>
                        <div><textarea cols="50" rows="13" type="txt" value="" class="contacto_informacion" name="contacto_informacion"> <?php echo $mostrar_datos['contacto_informacion']; ?></textarea></div>
                        <b>Seleccione su nuevo estilo de texto</b>
                        <div>
                            <select name="fuente_a" value="<?php echo $mostrar_datos['fuente_a']; ?>" list="fuente_a" id="">
                                <option value="arial">Pretederminado</option>
                                <option value="monospace">Mas chica</option>
                                <option value="sans-serif">Estylo firme</option>
                                <option value="Georgia">Con bordes anchos</option>
                                <option value="serif">Con bordes mas cortos</option>
                                <option value="Times">Estandar</option>
                                <option value="Impact">Negrita</option>
                            </select>
                        </div>
                        <b>El color del texto</b>
                        <div><input type="color" value="<?php echo $mostrar_datos['texto_color_a']; ?>" class="texto_color_a" name="texto_color_a"></div>
                        <b>El color del fondo</b>
                        <div><input type="color" value="<?php echo $mostrar_datos['fondo_color_a']; ?>" class="fondo_color_a" name="fondo_color_a"></div>
                        <b>el color de la sombra</b>
                        <div><input type="color" value="<?php echo $mostrar_datos['sombra_color_a']; ?>" class="sombra_color_a" name="sombra_color_a"></div>
                        <b>Direccion de la sombra en sentido a la dercha</b>
                        <div><input max="20" type="range" value="<?php echo $mostrar_datos['d_derecha']; ?>" class="d_derecha" name="d_derecha"></div>
                        <b>Direccion de la sombra en sentido acia abajo</b>
                        <div><input max="20" type="range" value="<?php echo $mostrar_datos['d_abajo']; ?>" class="d_abajo" name="d_abajo"></div>
                        <b>El radio del borde de su publicacion</b>
                        <div><input type="range" max="50" value="<?php echo $mostrar_datos['b_borde_r']; ?>" class="b_borde_r" name="b_borde_r"></div>
                        <br>
                        <br>
                        <div><button type="submit">Guardar</button></div>
                    </form>
                    <?php    }
}}
  ?>
                </div>
        </center>