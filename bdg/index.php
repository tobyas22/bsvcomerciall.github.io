<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./js/pushbar.css">
</head>

<body>
    <center>
        <h1>hola mundo</h1>
        <button class="btn_des_mensajes" data-pushbar-target="des-mensaje">hola</button>

        <div data-pushbar-direction="left" data-pushbar-id="des-mensaje" class="pushbar from_left des_mensaje">



        </div>
    </center>


    <script src="./js/pushbar.js"></script>
    <script>
        var pushbar = new Pushbar({
            blur: true,
            overlay: true
        });
    </script>
</body>

</html>