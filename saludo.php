<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php
$nombre =  $_GET['nombre'];
echo"hola $nombre";
?>
    <form action="saludar.php" method="get">
    Nombre: <input type="text" name="nombre">
    <input type="submit" value="enviar">
    </form>
</body>
</html>
