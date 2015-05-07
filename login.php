<?php
session_start();
include("inc/configuracion.php");
include("inc/validar.php");
$name = "";
$msgerror = "";

if (isset($_POST["nombre"]) and isset($_POST["password"])){
    
    $name = $_POST["nombre"];
    $pass = $_POST["password"];

    $id_user = obtener_id_usuario($name, $pass);

    if ($id_user > 0)
    {
        $_SESSION["usuario"] = $id_user;
        header("Location: admin.php");
    }
    else{
        $msgerror = "<p>Usuario y/o contraseña invalidos</p>";       
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
    

    
    
<?php
echo $msgerror;
?>


<form method = "post"> 
    <label> usuario:</label>
    <input  type= "text" 
            name= "nombre" 
            value =  "<?php  echo $name;  ?>">      
    <br />
                                                     
    <label> password:</label>
    <input type= "password" name= "password">
    <br />

    <button type= "submit">enviar</button>

</form>
</body>

</html>
