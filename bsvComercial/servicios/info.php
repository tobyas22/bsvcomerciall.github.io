<?php
session_start();
$conexion = mysqli_connect("localhost","root","","bsv-administracion");




if ($_GET == NULL) {
    echo '<script>alert("No hay nada disponible actualmente");
    location="../servicios.php"
    </script>';
}
if ($_REQUEST) {
    # code...

$referencia = $_GET['referencia'];



$sql2 = "SELECT * FROM serviciosbsv";

$query = mysqli_query($conexion, $sql2);

if (mysqli_num_rows($query) > 0) {
    $sql = "SELECT * FROM serviciosbsv WHERE id='$referencia'";

    $resultado = mysqli_query($conexion , $sql);

    if (mysqli_num_rows($resultado) > 0) {
while ($mostrar = mysqli_fetch_array($resultado)) {
    
    

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <link rel="stylesheet" href="/bdg/js/pushbar.css">
    <script src="/bdg/js/pushbar.js"></script>
    <link rel="stylesheet" href="/bsvComercial/css/bootstrap.css">
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/bootstrap.js"></script>
    <script src="/bsvComercial/js/jquery-3.2.1.slim.js"></script>
    <script src="/bsvComercial/js/popper.js"></script>
    <script src="/bsvComercial/js/bootstrap.bundle.js"></script>
    <meta name="athor" content="Tobyas Sosa">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BSV comercial | info</title>
</head>

<body>

    <div class="header-ctn-arriva">
        <div class="txt-primero text-center text-white ">Informacion de los Servicios de BsvComercial</div>
    </div>
    <div class="container">
        <div class="ctn-info">
            <div align="center" class="titulo-nombre"><b>Nombre: </b><?php echo $mostrar['nombre'] ?></div>
            <div align="center" class="contenido"><b>Contenido: </b> <?php echo $mostrar['contenido'] ?></div>
            <div align="center" class="condiciones border"><b>parametros: </b> <?php echo $mostrar['parametros'] ?></div>
            <div align="center" class="detalles"><b>Detalles: </b> <?php echo $mostrar['Detalles'] ?></div>
            <div align="center" class="comentario"><b>Comentario: </b> <?php echo $mostrar['comentario'] ?></div>
            <div align="center" class="ctn-disponivilidad">
                <div class="btn border bg-info"> <?php echo $mostrar['estado'] ?></div>
            </div>
            <div align="center" class="comentario"><b>Este articulo se publico el: </b><?php echo $mostrar['fecha'] ?></div>

            <br>
        </div>
    </div>
</body>

</html>
<?php
}
    }else{
        echo '<script>alert("No hay nada disponible actualmente");
        location="../servicios.php"
        </script>';
     
    }

} else {
 
 
 
    echo '<script>alert("No hay nada disponible actualmente");
    location="../servicios.php"
    </script>';
 


}
}?>

<script src="./js/script.js">
</script>

<style>
    .txt-primero {
        font-size: 50px;
    }
    
    @media (max-width:999px) {
        .txt-primero {
            font-size: 40px;
        }
    }
    
    @media (max-width:796px) {
        .txt-primero {
            font-size: 25px;
        }
        .header-ctn-arriva {
            position: fixed, relative;
            background-color: rgb(105, 98, 98);
            height: 70px;
            display: block;
        }
    }
    
    @media (max-width:495px) {
        .txt-primero {
            font-size: 20px;
        }
        .header-ctn-arriva {
            position: fixed, relative;
            background-color: rgb(105, 98, 98);
            height: 90px;
            display: block;
        }
    }
    
    .header-ctn-arriva {
        position: fixed, relative;
        background-color: rgb(105, 98, 98);
        height: 70px;
        display: block;
    }
    
    .ctn-info {
        margin-top: 100px;
        position: relative;
        background-color: rgb(197, 197, 197);
    }
    
    .titulo-nombre {
        font-size: 34px;
        position: relative;
        margin-top: 30px;
    }
    
    .contenido {
        font-size: 20px;
        position: relative;
        margin-top: 30px;
    }
    
    .condiciones {
        font-size: 20px;
        margin-top: 30px;
    }
    
    .detalles {
        font-size: 20px;
        position: relative;
        margin-top: 30px;
    }
    
    .comentario {
        font-size: 20px;
        position: relative;
        margin-top: 30px;
    }
    
    .comentario {
        position: relative;
        margin-top: 30px;
    }
</style>