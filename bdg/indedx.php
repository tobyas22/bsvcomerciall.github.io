<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculadora</title>
</head>

<body>

    <center>
        <form method="GET">

            <input required placeholder="primer valor" type="number" name="a" id=""><br>

            <select name="c" id="">
                <option value="+">Suma</option>
                <option value="-">Resta</option>
                <option value="/">División</option>
                <option value="*">Multiplicación</option>
              
             
            </select>

            <br><input required placeholder="segundo valor" type="number" name="b" id="">
            <br><br>
            <button type="submit">calcular</button>
        </form>
    </center>


</body>

</html>
<?php
if ($_GET) {
   
$a = $_GET['a'];
$c = $_GET['c'];
$b = $_GET['b'];

echo "  <script>
        primero = $a
        segundo =$b

        suma = primero $c segundo

        alert(suma)
    </script>";


 
} 
?>



    