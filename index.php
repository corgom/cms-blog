<?php

$headTitle = "CMS Blog";
$bodyTitle = "Mi blog";
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
                <li><a href="admin/">Admin</a></li>
            </ul>
        </nav>
    </header>
    

    <article>
        <section>
            <header>Lorem ipsum</header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque lacus nisi, eu volutpat odio vehicula quis. Sed id magna feugiat, viverra sem in, porta diam. Etiam ipsum lacus, pellentesque sed efficitur in, tristique id lacus. Integer volutpat risus urna, non iaculis mauris malesuada non. Ut aliquet orci enim, eget tempor neque eleifend vitae. Aliquam sed arcu nec leo vehicula suscipit vitae volutpat metus. Nunc ullamcorper feugiat dolor, a convallis sapien pharetra ac. Donec fermentum, libero non dignissim ultricies, nisl risus maximus eros, sed sollicitudin tortor justo nec quam. Nunc sodales feugiat mollis. Nullam vitae metus tortor. Cras quis tincidunt risus. Aenean finibus ac massa in iaculis. Nulla ultrices sed felis et pellentesque.</p>

            <p>Integer non pulvinar ante. Fusce scelerisque lacus at dui molestie, et iaculis purus euismod. Fusce augue nisl, elementum a tellus at, interdum hendrerit tortor. Donec laoreet eu urna in blandit. Nunc porttitor nec nisl non lacinia. Suspendisse tincidunt laoreet massa eget molestie. Praesent pulvinar ac leo at faucibus. Vivamus tristique ultrices est, in rutrum libero. Nunc dignissim sapien at arcu consectetur, scelerisque porta metus sagittis. Nunc sit amet posuere turpis, maximus scelerisque felis. Donec vitae tempor dui. Vivamus et mi id urna vestibulum tincidunt ut ac felis.</p>
        </section>

        <section>
            <header>Lorem ipsum</header>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc scelerisque lacus nisi, eu volutpat odio vehicula quis. Sed id magna feugiat, viverra sem in, porta diam. Etiam ipsum lacus, pellentesque sed efficitur in, tristique id lacus. Integer volutpat risus urna, non iaculis mauris malesuada non. Ut aliquet orci enim, eget tempor neque eleifend vitae. Aliquam sed arcu nec leo vehicula suscipit vitae volutpat metus. Nunc ullamcorper feugiat dolor, a convallis sapien pharetra ac. Donec fermentum, libero non dignissim ultricies, nisl risus maximus eros, sed sollicitudin tortor justo nec quam. Nunc sodales feugiat mollis. Nullam vitae metus tortor. Cras quis tincidunt risus. Aenean finibus ac massa in iaculis. Nulla ultrices sed felis et pellentesque.</p>

            <p>Integer non pulvinar ante. Fusce scelerisque lacus at dui molestie, et iaculis purus euismod. Fusce augue nisl, elementum a tellus at, interdum hendrerit tortor. Donec laoreet eu urna in blandit. Nunc porttitor nec nisl non lacinia. Suspendisse tincidunt laoreet massa eget molestie. Praesent pulvinar ac leo at faucibus. Vivamus tristique ultrices est, in rutrum libero. Nunc dignissim sapien at arcu consectetur, scelerisque porta metus sagittis. Nunc sit amet posuere turpis, maximus scelerisque felis. Donec vitae tempor dui. Vivamus et mi id urna vestibulum tincidunt ut ac felis.</p>
        </section>
    </article>

    <footer>
        <p><?php echo $bodyFooter ?></p>
    </footer>

</body>
</html>