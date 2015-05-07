<?php 
session_start();

$usuariovalido = "test";
$passwordvalido = "test";

$msgerror = "<p> Usuario y/o contraseña invalido </p>";
$msgvacio = "<p> Usuario y/o contrasena vacios </p>";

$name = "";
$error = false; 
$vacio = false;


if (isset($_GET["nombre"]) and (isset($_GET["password"])))
{
    $name = $_GET["nombre"];
    $pass = $_GET["password"];

    if($name==""or $pass=="")
    {
        $vacio=true;
    }
    else
    {
        if ($name == $usuariovalido and $pass ==$passwordvalido)
    {
        $_SESSION["user"]=$name;
        
    header("Location: admin.php");    

    }
    else
    {
        $error = true;

    }
}

   
}
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
    
    <h1>Acceso</h2>
    <h2><?php
    ?></h2>

    
    <?php
include "inc/menu.php"
?>

<?php
    if ( $error ) 
    {
    echo "$msgerror";
    }

?>    

<?php
    if ( $vacio ) 
    {
    echo "$msgvacio";
    }

?> 

<form> 
<label> usuario:</label>
    <input type= "text" name= "nombre" value = 
    "<?php          
    echo $name;
    ?>">

    <label> password:</label>
    <input type= "password" name= "password">
    <button type= "submit"> enviar </button>

</form>
</body>

</html>
