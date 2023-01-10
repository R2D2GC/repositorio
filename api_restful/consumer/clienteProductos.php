<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>nuevo</title>
</head>

<body>
    <br>
    <center>
        <h1>Resgistro de productos</h1>
        <?php
        //crear la vista para mostrar todos los registros de la tabla 
        //categoria
        //consumir el APIl_Restful
        $endpoint = "http://127.0.0.1/appwebOS/API_RESTFUL/PARCIAL2/api_restful/controllers/productos.php?op=selectall";
        $datos = json_decode(file_get_contents($endpoint), true);
        ?>
        <a class="botones" href='nuevoProducto.php'>nuevo</a>
        <a class="botones" href='index.php'>volver</a>
        <div id="main-container">
            <table border="2">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nombre</th>
                        <th>cantidad</th>
                        <th>pu</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        for ($i = 0; $i < count($datos); $i++) {
                        ?>
                            <td><?php echo $datos[$i]["id"] ?></td>
                            <td><?php echo $datos[$i]["nombre"] ?></td>
                            <td><?php echo $datos[$i]["pu"] ?></td>
                            <td><?php echo $datos[$i]["cantidad"] ?></td>
                            <td>
                                <br><a class='botones' href='actualizarProducto.php?id=<?php echo $datos[$i]['id'] ?>'>actualizar</a>
                                <br>
                                <br><a class='botones1' href="eliminarProducto.php?id=<?php echo $datos[$i]['id'] ?>">eliminar</a>
                            </td>
                    </tr>
                </tbody>
        </div>
    <?php
                        }
    ?>
</body>

</html>