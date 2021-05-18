<?php
session_start();
session_destroy();
header("index.php");
echo' <script>
alert("has serrado session");
// aqui se ubica la pagina donde se le va  a llevar al usuario si todo sale vien

window.location = "/pruevas/index.php";
</script>';

?>