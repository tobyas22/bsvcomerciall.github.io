<?php

$conexion = mysqli_connect("localhost", "root", "", "bsv-administracion");

$sql = "SELECT * FROM noticiasbsv";
$result = mysqli_query($conexion, $sql);

while($mostrar = mysqli_fetch_array($result)){

   
 
   
  
   ?>

    <body>

        <div class="ctn_todos">
            <img width="150px" style="top:154px;  border: solid black 3px; position: relative; left:2px;" src="<?php    echo  $mostrar['link_imagen'];    ?>" alt="">
            <div style=" position: relative;
                width: 600px;
                min-height: 100px;
                color:<?php    echo  $mostrar['colorcolor_texto'];    ?>;
                border: solid black 2px;
                background-color: <?php    echo  $mostrar['color_fondo'];    ?>;
                font-family: <?php    echo  $mostrar['fuente_slt'];    ?>; ;
                /*aqui tambien*/
                border-radius:  <?php    echo  $mostrar['radio_b'];    ?>px;
                left: 157px;
                top: -2px;">
                <div class="noticias_cuerpo">
                    <?php    echo  $mostrar['contenido_noticia'];    ?>
                    <div style="        background-color: rgb(112, 112, 112);
                position: relative;
                width: 130px;
                min-height: 100px;
                top: 0px;
                border: solid rgb(44, 28, 28) 3px;
                left: 455px;
                font-size: 17px;
                border-top-right-radius: 15px;
                /*aqui tambien*/
                border-bottom-right-radius:<?php    echo  $mostrar['radio_b'];    ?>px;">
                        <?php    echo  $mostrar['titulo_noticia'];    ?>


                    </div>
                </div>





            </div>
        </div>

        <style>
            body {
                background-color: rgb(139, 139, 139);
            }
            
            .ctn_todos {
                position: relative;
            }
            
            .noticias_cuerpo {
                padding-top: 20px;
                position: relative;
                left: 10px;
                max-width: 800px;
                top: 0px;
                z-index: 5;
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
        </style>


        <?php  }?>
    </body>