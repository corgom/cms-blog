<?php
///////// <<INICIA bloque no editable //////////////
session_start();
if(!isset($_SESSION["user"])){
	header("Location: login.php");
}
///////// >>TERMINA bloque no editable /////////////


/* ------ A partir de aqui va tu codigo PHP ------ */





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



</body>

</html>
