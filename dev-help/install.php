<?php
include("../inc/configuracion.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Creando Tablas para CMS</title>
</head>

<body>
<?php

// definicion de comandos/sentencias para CREAR base de datos "cms", tablas y llenado con datos:
$createDatabase = "
	DROP DATABASE IF EXISTS cmsblog;

	CREATE DATABASE cmsblog COLLATE latin1_spanish_ci;";

$createTables = "
USE cmsblog;

CREATE TABLE usuario(
id_usuario int NOT NULL PRIMARY KEY AUTO_INCREMENT,
usuario varchar(100) NOT NULL,
contrasena varchar(100) NOT NULL,
nombre varchar(100) NOT NULL,
activo char(1) NULL DEFAULT '1'
);

CREATE TABLE articulo(
id_articulo int NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_usuario int NOT NULL,
fecha_creacion datetime NOT NULL,
titulo varchar(200) NOT NULL,
texto varchar(2000) NOT NULL
);


CREATE TABLE tag(
	id_tag int NOT NULL PRIMARY KEY AUTO_INCREMENT,
	tag varchar(50) NOT NULL
	);

CREATE TABLE articulo_tag(
	id_tag int NOT NULL,
	id_articulo int NOT NULL
	);


ALTER TABLE articulo
ADD FOREIGN KEY (id_usuario)
REFERENCES usuario(usuario);

ALTER TABLE articulo_tag
ADD FOREIGN KEY (id_tag)
REFERENCES tag(id_tag);

ALTER TABLE articulo_tag
ADD FOREIGN KEY (id_articulo)
REFERENCES articulo(id_articulo);

";

$alterTables = "
USE cmsblog;

CREATE INDEX id_index1 ON articulo (id_usuario);

ALTER TABLE articulo
ADD CONSTRAINT fk_UsuArticulo
FOREIGN KEY (id_usuario)
	REFERENCES usuario(id_usuario);

CREATE INDEX id_index2 ON articulo_tag (id_articulo);
CREATE INDEX id_index3 ON articulo_tag (id_tag);

/*ALTER TABLE articulo_tag
ADD CONSTRAINT fk_ArtTag
FOREIGN KEY (id_tag)
	REFERENCES tag(id_tag)
FOREIGN KEY (id_articulo)
	REFERENCES articulo(id_articulo);*/

ALTER TABLE articulo_tag
ADD CONSTRAINT fk_ArtTag1
FOREIGN KEY (id_tag)
	REFERENCES tag(id_tag);

ALTER TABLE articulo_tag
ADD CONSTRAINT fk_ArtTag2
FOREIGN KEY (id_articulo)
	REFERENCES articulo(id_articulo);

";

$insertData = "
/* insercion datos en tabla USUARIO */
INSERT INTO usuario(usuario, contrasena, nombre) VALUES('cor@gmail.com', '123', 'cornelio gomez');

";

echo "<p>Preparando conexion a base de datos en host: $dbHost ...</p>";
$db = new mysqli($dbHost, $dbUsuario, $dbPassword);

echo "<p>Intentando conectarse a base de datos ...</p>";
if($db->connect_errno > 0){
    die('No se puede realizar conexión a base de datos [' . $db->connect_error . ']');
}

echo "<p>Conexión exitosa</p>";

echo "<p>Ejecutando cración de base de datos ...</p>";
if(!$result = $db->multi_query($createDatabase)){
    die('Hubo un error: [' . $db->error . ']');
}
do { $db->use_result(); } while( $db->next_result() );

echo "<p>Ejecutando cración de tablas ...</p>";
if(!$result = $db->multi_query($createTables)){
    die('Hubo un error: [' . $db->error . ']');
}
do { $db->use_result(); } while( $db->next_result() );

echo "<p>Ejecutando alteración de tablas ...</p>";
if(!$result = $db->multi_query($alterTables)){
    die('Hubo un error: [' . $db->error . ']');
}
do { $db->use_result(); } while( $db->next_result() );


echo "<p>Insertando info inicial en tablas ...</p>";
if(!$result = $db->multi_query($insertData)){
    die('Hubo un error: [' . $db->error . ']');
}



?>




</body>

</html>