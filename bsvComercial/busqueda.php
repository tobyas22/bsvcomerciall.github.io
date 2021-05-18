<style>

</style>
<style>
    .detalles_resultado h5 {
        font-family: 20px;
    }
</style>
<style>
    .estado_resultado {
        position: relative;
        top: 10px;
        left: -20px;
    }
    
    .precio_resultado {
        position: relative;
        top: -10px;
        left: -10px
    }
    
    .detalles_resultado_bd {
        font-size: 18px;
    }
    
    @media(max-width:450px) {
        .estado_resultado {
            position: relative;
            top: -13px;
            left: -10px;
            box-shadow: none;
        }
        .precio_resultado {
            position: relative;
            top: -26px;
            left: -110px;
            box-shadow: none;
        }
        .detalles_resultado_bd {
            font-size: 12px;
        }
    }
</style>

<?php


if ($_GET) {
    
$conexion =  mysqli_connect("localhost", "root", "", "bsv-administracion");


$nombre = $_GET['busqueda']; 


$string = $nombre;
$nombre = htmlspecialchars( 
  $string,
  $flags = ENT_COMPAT | ENT_HTML401,
  $encoding = 'UTF-8',
  $double_encode = true
  
);

$sql = "SELECT * FROM productosbsv WHERE nombre like  '%".$nombre."%'OR estado like '%".$nombre."%'
 OR precio like '%".$nombre."%' OR descripción like '%".$nombre."%'
";
$query = mysqli_query($conexion, $sql);
if (mysqli_num_rows($query) > 0 ) {
echo '<center><h1  class="si">se han encontrado resultados</h1> <br>


</center>
<form   method="GET">
<input class="ctn_buscador_de_productos" checked autocomplete="additional-name" value="'.$nombre.'" placeholder="Buscar productos" name="busqueda" type="text">
<div class="iocono_de_busqueda1"><button type="submit">Buscar</button></div>

</form>




';
echo '<br><br><p class="display-4">Resultados de <q>'.$nombre.'</q></p>';

while($data = mysqli_fetch_array($query)){
    echo '
    <div name="producto" class="ctn_contenedor_de_productos" >
    <div class="resultado_de_procucto  alert-light border arrow">
    <div class="" style="position: relative;">
    <div class="detalles_resultado"><p class="detalles_resultado_bd">' .$data['descripción'] .     ' </p></div>
    <div class="precio_resultado"><button  class="btn bg-primary justify-content-center precio_resultado_bd border">' .$data['precio'] .     ' </button></div>
    <div class="estado_resultado"><button class="btn bg-primary justify-content-end  estado_resultado_bd border">' .$data['estado'] .     ' </button></div>
    <div class="nombre_resultado"><button style="left:0px; box-shadow: none;" class="nombre_resultado_bd btn-danger btn-block badge-danger w-90 bg-info mt-auto">' .$data['nombre'] .     ' </button></div>
    </div></div></div>';
}
} else {
    echo '<center><h1  class="no">No han encontrado resultados por favor verifique las palabras introducidas</h1></center>';

    echo '<p class="txt_resuls">Resultados de <q>'.$nombre.'</q></p><form   method="GET">
    <input class="ctn_buscador_de_productos" autocomplete="additional-name" value="'.$nombre.'" placeholder="Buscar productos" name="busqueda" type="text">
    <div class="iocono_de_busqueda1"><button class="btn btn-info" type="submit">Buscar</button></div>
    
    </form>
    
    
    ';
    
}




/*
if ($conexion) {
    echo'funciono';
} else {
    echo'no funciono';
}

*/

}
?>

    <head>


        <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
        <script src="/bsvComercial/js/bootstrap.js"></script>
        <script src="/bsvComercial/js/bootstrap.js"></script>
        <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
        <script src="/bsvComercial/js/popper.js"></script>
        <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
        <meta name="autor" content="Tobyas Sosa">
        <link rel="stylesheet" href="/bsvComercial/css/busqueda.css">
        <title>Buscar con BSV
            <?php echo ' ',$nombre ?> </title>
        <meta name="description" content="descubre productos con el buscador de bsvComercial y explora sus terrenos">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    <div class="ctn-indormacion-abajo">
        <div class="ctn-seguridad">
            <a class="Terminos-de-uso" href="./accesos/terminos-de-uso/">Terminos de uso</a>
            <a href="./accesos/politica-de-privacidad/" class="politica-de-privacidad">Politica de privacidad</a>
            <a href="./accesos/propositos/" class="propositos">Propositos</a>
            <a href="./accesos/informacion/" class="informacion">Informacion</a>
        </div>
        <div class="referencia">
            <a href="./accesos/donde_estamos/" class="donde-estamos">¿Donde estamos?</a>
            <a href="./accesos/noticias/" class="noticias">noticias</a>
            <a href="./accesos/indice/" class="indice-bsv">indice</a>
            <a href="./accesos/promociones/" class="promociones">Promociones</a>
            <style>
                .promociones {
                    position: relative;
                    color: rgb(255, 255, 255);
                    text-decoration: none;
                    font-family: arial;
                    top: 200px;
                    left: 365px;
                    z-index:1;
                }
                
                @media (max-width:450px) {
                    .promociones {
                        position: relative;
                        color: #fff;
                        text-decoration: none;
                        font-family: arial;
                        top: 137px;
                        left: -33px;
                    }
                }
                
                body {
                    background-color: rgb(178, 224, 217);
                }
            </style>

        </div>
        <img class="logo2-bsv" src="./asets/img/logo2.png" alt="">
        <div class=""align="center"> <div  class="" style="position:relative;top:125px; z-index:0; color:#fff;"><h2><b> © </b>BSVcomercial</h2> Todos los derechos reservados</div></div>
    </div>

    <div class="fondo">

    </div>