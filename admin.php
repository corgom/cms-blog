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
    
    <h1>Administración</h2>
    <h2>Subtitulo del blog</h2>
    <p> id_user: <?php echo $_SESSION["usuario"]; ?> </p>

<?php
include "inc/menu.php"
?>

<?php
include "inc/menu-admin.php"
?>

</body>

</html>
