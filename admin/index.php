<?php

$headTitle = "CMS Blog";
$bodyTitle = "Administración";
$bodyFooter = "UDL 2014";

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $headTitle ?></title>
    <style type="text/css">
        /* usando paleta:
               http://www.colourlovers.com/palette/3550780/Absent:_thejenm */
        body {
            background-color: #942043;
            padding: 5px;
            margin: 4px;
        }

        body header {
            color: #A97625;
            background-color: #CDD202;
            padding: 5px;
            margin: 4px;
        }

        article {
            background-color: #EDD75D;
            padding: 5px;
            margin: 4px;
        }

        article section {
            color: #942043;
            background-color: #CDD202;
            padding: 5px;
            margin: 4px;
        }

        article section header {
            color: #942043;
            text-transform: uppercase;
            background-color: #CDD202;
        }

        footer {
            color: #942043;
            background-color: #EDD75D;
            padding: 5px;
            margin: 4px;
        }
    </style>
</head>
<body>
    <header>
        <h1><?php echo $bodyTitle ?></h1>
        <nav>
            <ul>
                <li><a href="../">Blog</a></li>
                <li><a href="articulo-lista.php">Listado articulos</a></li>
                <li><a href="articulo-agregar.php">Agregar articulo</a></li>
                <li><a href="etiquetas.php">Administrar Etiquetas (Tags)</a></li>
                <li><a href="secciones.php">Administrar Secciones</a></li>
            </ul>
        </nav>
    </header>

    <article>
        <section>
            <header>Estas en seccion de administracion del blog.</header>
            <p>Aquí puedes modificar diferentes aspectos del blog, así como agregar,
               editar y borrar articulos</p>
        </section>
    </article>

    <footer>
        <p><?php echo $bodyFooter ?></p>
    </footer>
</body>
</html>