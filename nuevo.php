<?php
include("inc/permiso.php");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CMS - Blog</title>
    <link rel="stylesheet" type="text/css" href="css/obscuro.css"> 
</head>

<body>
    <img alt="header" src="img/back-header.png" width="760" height="120">
    
    <h1>Nuevo</h2>
    <h2>Subtitulo del blog</h2>

<?php
include "inc/menu.php"
?>

<?php
include "inc/menu-admin.php"
?>

<form method="post" action="nuevo-guarda.php">
	<label>Titulo del articulo</label><br>
	<input type="text" name="titulo"></input><br>
	<label>Texto del articulo</label><br>
	<textarea rows="4" cols="50" name="area"></textarea><br>
	<button type = "submit">Guardar</button><br>
</form>

</body>

</html>
