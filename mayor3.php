<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de tres</title>
</head>
<body>
    <?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
     $num3 = $_POST['num3'];
      $mayor = $num1;
       if ($num2 > $mayor) {
            $mayor = $num2;
           }
             if ($num3 > $mayor) {
                $mayor = $num3;
               }
echo "El número mayor es: " . $mayor;


}
?>    
   
    <h2>Ingrese tres numeros y le diremos cual es el mayor:</h2>
           <form action="mayor.php" method="post">
               <label for="num1">Numero 1:</label>
               <input type="text" name="num1"><br>
               <label for="num2">Numero 2:</label>
               <input type="text" name="num2"><br>
               <label for="num3">Numero 3:</label>
               <input type="text" name="num3"><br>
               <input type="submit" value="Calcular">
            </form>

    
</body>
</html>
