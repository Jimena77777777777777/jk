<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encontrar el número mínimo</title>
</head>
<body>
    <h2>Encontrar el número mínimo</h2>
    
    <form method="get" action="">
        <label for="textNumero1">Número 1:</label>
        <input type="text" name="textNumero1" id="textNumero1" required>
        <br>

        <label for="textNumero2">Número 2:</label>
        <input type="text" name="textNumero2" id="textNumero2" required>
        <br>

        <label for="textNumero3">Número 3:</label>
        <input type="text" name="textNumero3" id="textNumero3" required>
        <br>

        <button type="submit">Encontrar Mínimo</button>
    </form>

    <?php
    error_reporting(0);
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Obtener los números del formulario
        $numero1 = $_GET["textNumero1"];
        $numero2 = $_GET["textNumero2"];
        $numero3 = $_GET["textNumero3"];

        // Crear un array con los números
        $array = array($numero1, $numero2, $numero3);

        // Encontrar el número mínimo
        $resultado = min($array);

        // Imprimir el resultado
        echo "<p>El número mínimo es: $resultado</p>";
    }
    ?>
</body>
</html>
