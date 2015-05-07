
<?php

// si existe regresa el id del usuario si no regresa el ID del usuario regresa 0
function obtener_id_usuario($usuario, 
                            $password){
    
    if ( $usuario == "" or $password == "" ){    
        return false;
    }
    else{
        $db = new mysqli("localhost", "root", "", "cmsblog");
        if ($db->connect_errno>0){
            die("Error de conexion a bases de datos.");
        }

        $sql = "SELECT id_usuario FROM usuario WHERE usuario = '$usuario' AND contrasena = '$password'";
        //echo $sql;
        //exit();

        if($result = $db->query($sql)){
            if ($result->num_rows > 0){ //si existe usuario
                $renglon = $result->fetch_assoc();
                return $renglon["id_usuario"];
            }
            else{
                return 0;
            }
        }
        else
        {
               die($db->error);
        }

    }
}
       
?>