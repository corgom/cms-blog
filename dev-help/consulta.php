
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Consulta</title>
</head>

<body>
<?php

$host = "localhost";
echo "<p>Preparando conexion a base de datos en host: $host ...</p>";
$db = new mysqli($host, 'root', '', 'cms');

echo "<p>Intentando conectarse a base de datos ...</p>";
if($db->connect_errno > 0){
    die('No se puede realizar conexión a base de datos [' . $db->connect_error . ']');
}

$query = "SELECT nombre FROM usuario";

if($result = $db->query($query)){
	echo "La selección devolvió ". $result->num_rows ." registros.\n";

	echo '<table border="1">';
	while($row = $result->fetch_assoc()) {
	    echo '<tr>';
	    echo '<td>'.$row["nombre"].'</td>';
	    echo '</tr>';
	}  
	echo '</table>';

	$result->close();
}






?>
</body>

</html>