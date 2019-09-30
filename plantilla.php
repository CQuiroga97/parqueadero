<?php
session_start();

?>
<html>
<head>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="menu">
<h2>Sistema de parqueadero!</h2>
<?php
if(isset($_SESSION['id'])){

}else{
    ?>
    <div style="right: 0; position: absolute; top: 25px;">
    <button>Iniciar Sesion</button><button onclick="window.location.href='crearUsuario.php'">Registrar cuenta</button>
    </div>
    <?php
}

?>

</div>