<?php
session_start();
extract($_SESSION);
?>
<html>
<head>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
			
		<script></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<!------ Editor y bootstrap---------->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link href="/parqueadero-1/css/stylesheet.css" rel="stylesheet" type="text/css">
<script src='/parqueadero-1/js/script.js'></script>	
</head>
<body>
<div class="menu">
<h2>Sistema de parqueadero!</h2>
<?php
if(isset($_SESSION['id'])){
    ?>
    <div style="right: 10; position: absolute; top: 25px;">
    <?php
        print "Bienvenido $nombre $apellido | <a href='/parqueadero-1/usuario/index.php'>Inicio</a><a href='/parqueadero-1/cerrarSesion.php'>Cerrar Sesion</a>";
    ?>
    </div>
    <?php
}else{
    ?>
    <div style="right: 0; position: absolute; top: 25px;">
    <button onclick="window.location.href='iniciarSesion.php'">Iniciar Sesion</button>
    <button onclick="window.location.href='crearUsuario.php'">Registrar cuenta</button>
    </div>
    <?php
}

?>

</div>