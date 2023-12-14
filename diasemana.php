<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DIA DE LA SEMANA</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST["numero"];
        $diasSemana = array("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo");

        if ($numero >= 1 && $numero <= 7) {
            $dia = $diasSemana[$numero - 1];
            echo "El día de la semana es: $dia";
        } else {
            echo "error";
        }
    }
    ?>


    <h2>Ingrese un número del 1 al 7 </h2>
    <form  action="diasemana.php"  method="post">
        <label for="numero">Número (1-7):</label>
        <input type="text" name="numero"><br>

        <input type="submit" value="Calcular">
    </form>

    
</body>
</html>
