<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>actualizar usuario</title>
</head>
<body>
    <a href="clienteProductos.php">administrar</a>
    <section class="form-register">
    <h1>actualizar usuario</h1>
        <form action="actualizarP.php" method="post">
    <input class="controls"type="text" name ="id" placeholder="id" required>
    <input class="controls"type="text" name ="usuario" placeholder="Nombre de producto" required>
        <input class="controls"type="text" name ="pwd" placeholder="pu" required>
        <input class="controls"type="text" name ="privilegio" placeholder="cantidad" required>
        <input class="botons"type="submit" name="enviar" value="Enviar"></td>
        <input class="botons"type="reset" name="borrar" value="Borrar"></td>
        
        </form>
</section>
</body>
</html>