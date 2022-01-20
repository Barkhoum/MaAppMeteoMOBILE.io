<?php

$page = 'accueil';
?>
<!DOCTYPE html>
<!--
 * @author Didier Bonneau
 * @copyright (c) Afpa, DWWM
 * @version 1.0 du 01/04/2019
 * Fichier d'affichage des produits Papeterie de l'application TP_Papeterie
-->
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title>
        210_00_TP_Papeterie DWWM
    </title>
    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.css" rel="stylesheet">
    <link href="css/papeterie.css" type="text/css" rel="stylesheet" />
    <style>
        input[type=number] {
            width: 45px;
        }
    </style>
    <script src="dist/js/jquery-3.4.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>
</head>

<body>
    <div class='wrap'>
        <?php
        require 'pages\_entete.php';
        require 'pages\_nav.php';
        ?>
        <div>
            <title>
                210_00_TP_Papeterie DWWM
            </title>
        </div>
    </div>
    <?php
    require 'pages\_footer.php';
    ?>

</body>

</html>