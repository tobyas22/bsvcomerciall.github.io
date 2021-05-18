<link rel="stylesheet" href="/bdg/js/pushbar.css">
<script src="/bdg/js/pushbar.js"></script>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<script>
    formulario = screen.width;

    if (formulario >= 1800) {
        document.write("<div class='herramientas_ctn_blog'><div class='ctn_formularios'><div class='txt_publi_1'>Publica un mensaje en BSV</div><form action='' method='post'><textarea placeholder='Ingresé mensaje' class='ingrese_mensaje' name='mensaje'></textarea><button class='bu_enviar' type='submit'>Enviar</button> <br><div class='marcadores'><p>Mostrar informacion en el mensaje: </p><b>si&emsp13; </b> <input type='radio'checked value='si' name='si_no' ><br><b>no&emsp13;</b><input type='radio' value='no' name='si_no' ><br><p>La información solo muestra tu nombre real, correo electrónico y en que dispositivo se envio al mensaje</p></div>");
    } else {
        document.write("<button class='btn_des_mensajes' data-pushbar-target='des-mensaje'><img class='logo_mensajes' src='./chat_icono.png' ></button><div data-pushbar-direction='left' data-pushbar-id='des-mensaje' class='pushbar from_left des_mensaje'><button class='serrar_v_m' data-pushbar-close>serrar</button><div class='herramientas_ctn_blog_m'><div class='ctn_formularios_m'><div class='txt_publi_1_m'>Publica un mensaje en BSV</div><form action='' method='post'><textarea placeholder='Ingresé mensaje' class='ingrese_mensaje_m' name='mensaje'></textarea><button class='bu_enviar_m' type='submit'>Enviar</button> <br><div class='marcadores_m'><p>Mostrar informacion en el mensaje: </p><b>si&emsp13; </b> <input type='radio' checked value='si' name='si_no'><br><b>no&emsp13;</b><input type='radio' value='no' name='si_no'><br><p>La información solo muestra tu nombre real, correo electrónico y en que dispositivo se envio al mensaje</p></div></div>");

    }
</script>

<script>
    var pushbar = new Pushbar({
        blur: true,
        overlay: true
    });
</script>
<style>
    .herramientas_ctn_blog_m {
        position: relative;
        background-color: rgb(190, 190, 190);
        width: 300px;
        left: 31px;
    }
    
    .ctn_formularios_m {
        position: relative;
        border: solid 2px black;
    }
    
    .txt_publi_1_m {
        font-size: 24px;
        font-family: arial;
    }
    
    .ingrese_mensaje_m {
        width: 290px;
        height: 200px;
    }
    
    .bu_enviar_m {
        margin-left: 100px;
        width: 110px;
        height: 30px;
        margin-top: 10px;
    }
    
    .marcadores_m {
        font-family: arial;
    }
    
    .serrar_v_m {
        position: relative;
        left: 120px;
        margin: 20px 20px;
        width: 80px;
        height: 25px;
        border: solid 1px black;
        background-color: rgb(236, 27, 27);
    }
    
    .btn_des_mensajes {
        display: none;
    }
    
    @media (max-width: 450px) {
        .btn_des_mensajes {
            position: fixed;
            left: 280px;
            background: none;
            border: none;
            top: 85%;
            display: block;
            outline: none;
            border-radius: 100%;
        }
        .logo_mensajes {
            width: 50px;
        }
    }
    
    html.pushbar_locked {
        overflow: hidden;
        -ms-touch-action: none;
        touch-action: none;
    }
    
    .pushbar_locked .pushbar_main_content.pushbar_blur {
        filter: blur(15px);
    }
    
    .pushbar_overlay {
        z-index: -999;
        position: fixed;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        will-change: opacity;
        transition: opacity 0.5s ease;
        opacity: 0;
        background: #3c3442;
    }
    
    html.pushbar_locked .pushbar_overlay {
        opacity: 0.8;
        z-index: 999;
    }
    
    [data-pushbar-id] {
        z-index: 1000;
        position: fixed;
        overflow-y: auto;
        will-change: transform;
        transition: transform 0.5s ease;
        background: #fff;
    }
    
    [data-pushbar-direction="left"][data-pushbar-id],
    [data-pushbar-direction="right"][data-pushbar-id] {
        top: 0;
        width: 360px;
        max-width: 400px;
        height: 100%;
    }
    
    [data-pushbar-direction="top"][data-pushbar-id],
    [data-pushbar-direction="bottom"][data-pushbar-id] {
        left: 0;
        width: 100%;
        min-height: 150px;
    }
    
    [data-pushbar-direction="left"][data-pushbar-id] {
        left: 0;
        transform: translateZ(0) translateX(-100%);
    }
    
    [data-pushbar-direction="right"][data-pushbar-id] {
        right: 0;
        transform: translateZ(0) translateX(100%);
    }
    
    [data-pushbar-direction="top"][data-pushbar-id] {
        top: 0;
        transform: translateZ(0) translateY(-100%);
    }
    
    [data-pushbar-direction="bottom"][data-pushbar-id] {
        bottom: 0;
        transform: translateZ(0) translateY(100%);
    }
    
    [data-pushbar-id].opened {
        display: block;
        transform: translateX(0px) translateY(0px);
    }
</style>