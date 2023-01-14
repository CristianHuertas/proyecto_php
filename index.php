<?php
    require 'inc/session_start.php';
    ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <?php
    include_once 'inc/head.php';
    ?>

</head>

<body>
    <?php
    if (!isset($_GET['vista']) || $_GET['vista'] ==""){
        $_GET['vista'] = "login";
    }

    if (is_file("./vistas/.php".$_GET['vista'].".php")) {
        # code...
    }


    include_once 'inc/navbar.php';
    include_once 'inc/script.php';
    ?>
</body>
</html>