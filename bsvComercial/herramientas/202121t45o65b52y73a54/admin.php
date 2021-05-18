<?php
session_start();

//* la id de session se vrea en inicio

?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edita Tus Publicacione</title>
        <link rel="stylesheet" href="./admin.css">
        <style>
            body {
                background-color: aquamarine;
            }
        </style>
    </head>

    <body>
        <img src="/bsvComercial/asets/img/logo-bsv.gif" alt="" class="logo_bsv_1">
        <div class="texto_1">Puedes ver, editar y borrar tus publicaciones en esta seccion</div>

        <?php

$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");
$_SESSION['id_usuario'];

$sql = "SELECT * FROM Herramientas_pu WHERE id_usuario='". $_SESSION['id']."'";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){
     
echo '

<div style="color: '.$mostrar['texto_color_a'].'; 
font-family:'.$mostrar['fuente_a'].';  
box-shadow: '.$mostrar['d_derecha'].'px/* Direccion dercha*/
'.$mostrar['d_abajo'].'px/* Direccion abajo*/
6px/* color sombra*/'.$mostrar['sombra_color_a'].';
border-radius: '.$mostrar['b_borde_r'].'px;

background-color:'.$mostrar['fondo_color_a'].' ;
" class="ctn_public">
    <div class="nombre_a">'.$mostrar['nombre_a'].'
        <n>De:'.$mostrar['usuario_n'].'</n>
            <!-- nombre de usuario -->


        
    </div>
    <div class="ctn_imagen"><img class="imagen_a" src="/bsvComercial/herramientas/202121t45o65b52y73a54/suvidasImagenes/'.$mostrar['imgProducto'].'" alt="'.$mostrar['nombre_a'].'">
        <div class="ctn_optiones_publucos"><a href="./acciones/editar.php?id='.$mostrar['id'].'&id_usuario='.$mostrar['id_usuario'].'">Editar</a>||<a href="./acciones/borrar.php?id='.$mostrar['id'].'&id_usuario='.$mostrar['id_usuario'].'">Eliminar</a></div>
       
    </div>
 <div class="detalles_articulo">
            <div class="emitido_por">Publicado por : '.$mostrar['usuario_n'].' </div> <hr>
            <div class="informacion_a">Informacion: '.$mostrar['informacion_a'].' </div> <hr>
            <div class="contenido_a">Contenido: '.$mostrar['contenido_a'].' </div> <hr>
            <div class="contacto_a">Detalles De contacto: '.$mostrar['contacto_informacion'].' </div> <hr>
        </div>

    <div class="informacion_contactos">
        <p>Informacion de Contacto</p>
        <a href="tel'.$mostrar['numero_tel'].':  ">Numero de telefono</a> <br>
        <a href="mailto:'.$mostrar['correo_e'].'  ">Gmail</a> <br>
    </div>


    <div class="ctn_fecha">Fue publicado el: <br> '.$mostrar['Fecha'].'</div>


</div>

<style>


    .ctn_public {
        position: relative;
        min-height: 400px;
        width: 800px;
        left: 200px;
        padding: 20px 20px;
        margin-top: 100px;
        border: solid 5px black;
        top:0px;
       
    }
    
    .ctn_imagen {
        width: 100px;
        position: relative;
        display: flex;
    }
    
    .imagen_a {
        width: 300px;
    }
    
    .informacion_contactos {
        position: relative;
    }
    
    .informacion_contactos p {
        font-size: 20px;
    }
    
    .informacion_contactos a {
        text-decoration: none;
        font-size: 17px;
    }
    
    .detalles_articulo {
        position: relative;
        top: 0px;
        left: 10px;
        width: 300px;
    }
    
    .emitido_por {
        position: relative;
        top: 0px;
        left: 0px;
        width: 300px;
    }
    
    .nombre_a {
        font-size: 50px;
    }
    
    .ctn_fecha {
        position: absolute;
        left: 560px;
        top:0px;
    }
    
    .emitido_por {
        position: relative;
        font-size: 30px;
        width: 400px;
    }
    
    .informacion_a {
        position: relative;
        font-size: 20px;
    }
    
    .contenido_a {
        position: relative;
        font-size: 24px;
    }
    .contacto_a{  
        position: relative;
        font-size: 20px;
    }
    @media(max-width:600px){

.ctn_public {
    position: relative;
    min-height: 400px;
    width: 94%;
    left: 0px;
    padding: 20px 20px;
    margin-top: 100px;
    border: solid 1px black;
    top:0px;
   
}

.ctn_imagen {
    width: 100px;
    position: relative;
    display: flex;
}

.imagen_a {
    width: 150px;
}

.informacion_contactos {
    position: relative;
}

.informacion_contactos p {
    font-size: 20px;
}

.informacion_contactos a {
    text-decoration: none;
    font-size: 17px;
}

.detalles_articulo {
    position: relative;
    top: 0px;
    left: 10px;
    width: 300px;
}

.emitido_por {
    position: relative;
    top: 0px;
    left: 0px;
    
}

.nombre_a {
    font-size: 20px;
}

.ctn_fecha {
    position: absolute;
    left: 70%;
    top:0px;
}

.emitido_por {
    position: relative;
    font-size: 20px;

    width: 190px;
}

.informacion_a {
    position: relative;
 
    font-size: 20px;
}

.contenido_a {
    position: relative;
    font-size: 24px;
}
.contacto_a{  
    position: relative;
    
    font-size: 20px;
}



}
</style>


';


$_SESSION['id_pu'] = $mostrar['id'];




}

?>
    </body>

    </html>
    <style>
        .ctn_optiones_publucos {
            position: absolute;
            top: -70px;
            left: 700px;
        }
        
        .ctn_optiones_publucos a {
            color: #2b2b2b;
            text-decoration: none;
        }
        
        @media (max-width:600px) {
            .ctn_optiones_publucos {
                position: absolute;
                top: -40px;
                left: 20%;
            }
            .ctn_optiones_publucos a {
                color: #2b2b2b;
                text-decoration: none;
            }
        }
    </style>