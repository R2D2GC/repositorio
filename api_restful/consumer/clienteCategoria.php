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
        <h1>Resgistro de categorias</h1>
        <?php
        //crear la vista para mostrar todos los registros de la tabla 
        //categoria
        //consumir el APIl_Restful
        $endpoint = "http://127.0.0.1/appwebOS/API_RESTFUL/PARCIAL2/api_restful/controllers/categoria.php?op=selectall";
        $datos = json_decode(file_get_contents($endpoint), true);
        ?>
        <a class="botones" href='nuevoCategoria.php'>nuevo</a>
        <a class="botones" href='index.php'>volver</a>
        <div id="main-container">
            <table class="tabla" border="2">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nombre</th>
                        <th>observaciones</th>
                        <th>Status</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        for ($i = 0; $i < count($datos); $i++) {
                        ?>
                            <td><?php echo $datos[$i]["cat_id"] ?></td>
                            <td><?php echo $datos[$i]["cat_nom"] ?></td>
                            <td><?php echo $datos[$i]["cat_obs"] ?></td>
                            <td><?php echo $datos[$i]["est"] ?></td>
                            <td>
                                <br><a class='botones' href='actualizarCategoria.php?cat_id=<?php echo $datos[$i]['cat_id'] ?>'>Editar</a>
                                <br>
                                <br><a class='botones1' href="eliminarCategoria.php?cat_id=<?php echo $datos[$i]['cat_id'] ?>">Borrar</a>
                            </td>
                    </tr>
                </tbody>
        </div>
    <?php
                        }
    ?>
</body>

</html>