<style>
    body {
        background-color: rgb(147, 183, 190);
    }
    
    .bsv-logo-arriva {
        width: 300px;
        height: 200px;
    }
    
    .parte_que_no_se_mueve {
        position: fixed;
        background-color: rgb(255, 255, 255);
        width: 400px;
        top: 0px;
        left: 0px;
        height: 100%;
    }
    
    .linea_divicion_paginas {
        position: absolute;
        border: solid 2px;
        height: 100%;
        top: 0px;
        left: 99%;
    }
    
    .noticias {
        position: absolute;
        left: 400px;
        top: 0px;
    }
    
    .btn-replegar-menu {
        position: absolute;
        visibility: none;
        left: 23323;
        top: 400px
    }
    
    table {
        border: solid 2px black;
    }
    
    .herramientas_ctn {
        position: relative;
        left: 50px;
        outline: none;
    }
    
    .texto_prinsipal {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 40px;
        text-decoration: solid;
    }
    
    .herramientas_desplegable {
        font-size: 30px;
        position: absolute;
        outline: none;
        border: none;
        text-decoration: none;
    }
    
    @media (max-width:450px) {
        body {
            background-color: rgb(180, 214, 221);
        }
        .hide {
            position: absolute;
            display: none;
        }
        .bsv-logo-arriva {
            width: 150px;
            height: 100px;
        }
        .parte_que_no_se_mueve {
            position: fixed;
            z-index: 310;
            background-color: rgb(255, 255, 255);
            width: 150px;
            height: 100%;
            transform: translateX(-100%);
        }
        .desplegar {
            transform: translateX(0%);
        }
        .replegar {
            transform: translateX(-100%);
        }
        .linea_divicion_paginas {
            position: absolute;
            border: solid 2px;
            height: 100%;
            top: 0px;
            left: 99%;
        }
        .noticias {
            position: relative;
            left: 0px;
            top: 0px;
        }
        .herramientas_desplegable {
            font-size: 17px;
            left: -50px;
            top: 100px;
            position: absolute;
            outline: none;
            border: none;
            text-decoration: none;
        }
        .herramientas_ctn {
            position: relative;
            top: 100px;
            left: 50px;
            outline: none;
        }
        .texto_prinsipal {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
            text-decoration: solid;
            position: absolute;
            left: -50px;
            top: 20px;
        }
        .btn-desplegar-menu {
            transition: 110ms;
            position: fixed;
            left: 1px;
            top: 20px;
            font-size: 13px;
            visibility: 10px;
            z-index: 225;
        }
        .btn-replegar-menu {
            transition: 110ms;
            position: fixed;
            visibility: none;
            left: 0px;
            top: 400px
        }
        .link-inicio {
            position: relative;
            top: 100px;
        }
        .e-c-ctn {
            position: absolute;
            top: 100px;
            font-size: 19px;
        }
        .e-covid {
            position: relative;
            top: 100px;
            left: -20px;
        }
    }
</style>

<!DOCTYPE html>
<html lang="es">

<head>

    <script src="/bsvComercial/js/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>


    <meta name="autor" content="Tobyas Sosa">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV | Noticias</title>
</head>
<script>
    $(document).ready(function() {
        var desplegar = $(".parte_que_no_se_mueve");
        $('#btn-desplegar').click(function() {
            desplegar.addClass('desplegar ');
            $("#btn-replegar").addClass("btn btn-warning")

        });
        $("#btn-replegar").click(function() {
            desplegar.removeClass('desplegar');
        })
    })
</script>

<body>
    <header id="p-n-mueve" class="parte_que_no_se_mueve ">
        <a class="link-inicio" href="/bsvComercial/inicio.php"><img src="/bsvComercial/asets/img/logo-bsv.gif" class="bsv-logo-arriva" alt="bsv comercial"></a>

        <div class="linea_divicion_paginas"></div>

        <div class="herramientas_ctn">
            <div class="texto_prinsipal">Herramientas BSV</div>
            <details open class="herramientas_desplegable">
                <summary>Herramientas</summary>
                <a href="/bsvComercial/herramientas/">Publicar Articulos</a>

            </details>


            <input type="button" id="btn-replegar" class="btn-replegar-menu" value="&times;">
        </div>

    </header>

    <button id="btn-desplegar" class="btn-desplegar-menu btn btn-close">&Longrightarrow;</button>

    <!--parte que se mueve-->



    <div class="noticias">

        <h1 class="e-c-ctn">Estadisticas de covid</h1>
        <br>
        <div class="container e-covid ">
            <div class="row ">
                <div class="col">
                    <table class="table border-0 font-size-xs">f
                        <tr>

                            <td class=" border bg-primary">Infectados</td>
                            <td class=" border bg-info">Recuperados</td>
                            <td class=" border bg-primary">Infectados En Tolal</td>
                            <td class=" border bg-info">Fallecidos</td>
                        </tr>
                        <tr>
                            <?php

$conexion_c = mysqli_connect("p:localhost","root","","bsv-administracion");
$ping = mysqli_ping($conexion_c);
$sql_c = "SELECT * FROM e_covid";

$query_c = mysqli_query($conexion_c, $sql_c);
while ($mostrar_c = mysqli_fetch_array($query_c)) {
     
     echo'<td class=" border bg-primary">'.$mostrar_c['Infectados'].'</td>
     <td class=" border bg-info">'.$mostrar_c['Recuperados'].'</td>
     <td class=" border bg-primary">'.$mostrar_c['Infectados_t'].'</td>
     <td class=" border bg-info">'.$mostrar_c['fallecidos'].'</td>';
}

/*
$sql2 = "INSERT INTO `e_covid`(`Infectados`, `Recuperados`, `Infectados _t`, `fallecidos`) VALUES ('2434','3432','342','4534') ";
$query2 = mysqli_query($conexion_c, $sql2);
*/
?>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>

        <?php

$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");

$sql = "SELECT * FROM noticiasbsv";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){

   
 
   
  
   ?>

            <body>

                <div class="ctn_todos">
                    <img class="img_icono" src="<?php    echo  $mostrar['link_imagen'];    ?>" alt="">
                    <div class="contenido_noticia" style=" 
              
                    color: <?php echo $mostrar['colorcolor_texto']?>;
                    
                    background-color: <?php echo  $mostrar['color_fondo'];?>;
                    font-family: <?php echo  $mostrar['fuente_slt'];?>; ;
                  /*aqui tambien*/
                    border-radius:  <?php echo  $mostrar['radio_b'];?>px;
                  
                
                ">
                        <div class="noticias_cuerpo">
                            <?php echo $mostrar['contenido_noticia'];?>
                            <div class="titulo_1_noti" style="        
                /*aqui tambien*/
                border-bottom-right-radius:<?php echo  $mostrar['radio_b'];?>px;">
                                <?php echo  $mostrar['titulo_noticia'];    ?>

                            </div>
                        </div>





                    </div>
                </div>


                <style>
                    body {
                        background-color: rgb(136, 136, 136);
                    }
                    
                    .img_icono {
                        width: 150px;
                        top: 154px;
                        border: solid black 3px;
                        position: relative;
                        left: 2px;
                    }
                    
                    .ctn_todos {
                        position: relative;
                        margin-top: 50px;
                    }
                    
                    .noticias_cuerpo {
                        padding-top: 20px;
                        position: relative;
                        left: 10px;
                        max-width: 800px;
                        top: 0px;
                        z-index: 5;
                    }
                    
                    .contenido_noticia {
                        position: relative;
                        width: 600px;
                        min-height: 100px;
                        border: solid black 2px;
                        left: 157px;
                        top: -2px;
                    }
                    
                    .titulo_noticia {
                        background-color: rgb(112, 112, 112);
                        position: relative;
                        width: 130px;
                        min-height: 100px;
                        top: 0px;
                        border: solid rgb(44, 28, 28) 3px;
                        left: 455px;
                        font-size: 17px;
                        border-top-right-radius: 15px;
                        /*aqui tambien*/
                        border-bottom-right-radius: 50px;
                    }
                    
                    .ctn_noticias_body {
                        position: relative;
                        width: 600px;
                        min-height: 100px;
                        border: solid black 2px;
                        background-color: #9c9c9c;
                        font-family: arial;
                        /*aqui tambien*/
                        border-radius: 50px;
                        left: 157px;
                        top: -2px;
                    }
                    
                    .titulo_1_noti {
                        background-color: rgb(252, 230, 230);
                        position: relative;
                        width: 130px;
                        min-height: 100px;
                        top: 0px;
                        border: solid rgb(44, 28, 28) 3px;
                        left: 455px;
                        font-size: 17px;
                        border-top-right-radius: 15px;
                    }
                    
                    @media (max-width:450px) {
                        .contenido_noticia {
                            position: relative;
                            width: 280px;
                            min-height: 50px;
                            border: solid black 2px;
                            left: -7px;
                            top: -2px;
                        }
                        .img_icono {
                            width: 80px;
                            top: 90px;
                            border: none;
                            position: relative;
                            left: 275px;
                        }
                        .titulo_1_noti {
                            background-color: rgb(112, 130, 130);
                            position: relative;
                            width: 130px;
                            min-height: 50px;
                            top: 0px;
                            border: solid rgb(44, 28, 28) 1px;
                            left: 130px;
                            font-size: 12px;
                            border-top-right-radius: 15px;
                        }
                    }
                </style>


                <?php  } ?>
            </body>

    </div>
</body>

</html>
<style>
    body {
        background-color: rgb(167, 224, 220);
    }
</style>