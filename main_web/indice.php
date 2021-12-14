<html>
    <head>
        <meta charset= utf-8">
        <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $servidor="localhost";
    $nombreusuario="root";
    $password="";
    $db "tienda";

    $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

    if($conexion->connect_error){
        die("Conexion Faliida: ".conexion->connect_error);
    }

    
    }
    $sql = "SELECT * FROM tienda";
    $resultado= $conexion->query($sql);

    if($resultado-> num_rows >0){
        echo $resultado->num_rows;
    }
    ?>
