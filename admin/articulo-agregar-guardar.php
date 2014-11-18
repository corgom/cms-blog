<?php

$headTitle = "CMS Blog";
$bodyTitle = "Agregar articulo";
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
        <h1><?php echo $headTitle ?></h1>
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
            <header>Ejemplos funciones</header>
            <?php
                imprimeTablaCelda("HOLA");
                echo generaTablaCelda("hola");
            ?>
        </section>
        <section>
            <header>Valores recuperados</header>
            <p><?php echo "valor de celda: " . $_GET["celda_valor"] ?></p>
            <p><?php echo $_GET["celda_valor"] ?></p>
            <p><?php echo $_GET["tabla_renglones"] ?></p>
            <!-- INICIA GENERACION DE TABLAS USANDO HTML+PHP-->
            <!-- TERMINA GENERACION DE TABLAS USANDO HTML+PHP-->
        </section>
    </article>

    <footer>
        <p><?php echo $bodyFooter ?></p>
    </footer>

</body>
</html>

<?php

/* funciones php */
function imprimeTablaCelda($texto){
    echo "<td>" . $texto . "</td>";
}


function generaTablaCelda($texto){
    return "<td>" . $texto . "</td>";
}

?>