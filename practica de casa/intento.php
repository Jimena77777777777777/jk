<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>F.N</title>
    <script>
        function mostrarCajaTexto() {
            var funcionSeleccionada = document.getElementById("funcion").value;
            var cajaTexto = document.getElementById("valorAdicional");
            var cajaVariable = document.getElementById("variable");

            // Mostrar la caja de texto solo si la función seleccionada es 'min' o 'max'
            cajaTexto.style.display = (funcionSeleccionada === 'min' || funcionSeleccionada === 'max') ? 'block' : 'none';

            // Deshabilitar la caja de texto para la variable si la función seleccionada es 'min' o 'max'
            cajaVariable.disabled = (funcionSeleccionada === 'min' || funcionSeleccionada === 'max');
        }
    </script>
</head>
<body>
<header>
    <h3>FUNCIONES NUMERICAS</h3>
</header> 
<?php
function ejecutarFuncion($variable, $funcion, $valoresAdicionales = []) {
    if (!is_numeric($variable)) {
        echo "<p>La variable ingresada no es numérica.</p>";
        return null;
    }

    switch ($funcion) {
        case 'exp':
            $result = exp($variable);
            echo "La función exp devuelve el valor de e elevado a la potencia de $variable.";
            return $result;
    
        case 'floor':
            $result = floor($variable);
            echo "La función floor redondea hacia abajo el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'abs':
            $result = abs($variable);
            echo "La función abs devuelve el valor absoluto de $variable.";
            return $result;
    
        case 'ceil':
            $result = ceil($variable);
            echo "La función ceil redondea hacia arriba el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'getrandmax':
            $result = getrandmax();
            echo "La función getrandmax devuelve el valor máximo que puede generar la función rand() en el entorno de ejecución.";
            return $result;
    
        case 'max':
            $result = max($variable, ...$valoresAdicionales);
            echo "La función max devuelve el valor más grande entre $variable y " . implode(", ", $valoresAdicionales) . ".";
            return $result;
    
        case 'min':
            $result = min($variable, ...$valoresAdicionales);
            echo "La función min devuelve el valor más pequeño entre $variable y " . implode(", ", $valoresAdicionales) . ".";
            return $result;
    
        case 'mt_rand':
            $result = mt_rand();
            echo "La función mt_rand genera un número entero aleatorio usando el generador de números aleatorios Mersenne Twister.";
            return $result;
    
        case 'pi':
            $result = pi();
            echo "La función pi devuelve el valor de la constante pi (π).";
            return $result;
    
        case 'pow':
            $result = pow($variable, 2);
            echo "La función pow calcula $variable elevado a la potencia de 2.";
            return $result;
    
        case 'round':
            $result = round($variable);
            echo "La función round redondea el número decimal $variable al entero más cercano.";
            return $result;
    
        case 'sqrt':
            $result = sqrt($variable);
            echo "La función sqrt calcula la raíz cuadrada de $variable.";
            return $result;
    
        default:
            echo "Función no implementada";
            return "Función no implementada";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $variable = ($_POST["funcion"] !== 'min' && $_POST["funcion"] !== 'max') ? $_POST["variable"] : 0;
    $funcion = $_POST["funcion"];

    // Obtener los valores adicionales si están presentes
    $valoresAdicionales = [];

    if (isset($_POST["valoresAdicionales"])) {
        $valoresAdicionales = array_map('floatval', explode(',', $_POST["valoresAdicionales"]));
    }

    $resultado = ejecutarFuncion($variable, $funcion, $valoresAdicionales);
    echo "<p>Resultado de $funcion($variable, " . implode(", ", $valoresAdicionales) . "): $resultado</p>";
}
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="variable">Ingrese una variable:</label>
    <input type="text" name="variable" id="variable" <?php echo ($_POST["funcion"] === 'min' || $_POST["funcion"] === 'max') ? 'disabled' : ''; ?> required>

    <label for="funcion">Seleccione una función:</label>
    <select name="funcion" id="funcion" onchange="mostrarCajaTexto()" required>
        <option value="exp">exp</option>
        <option value="floor">floor</option>
        <option value="abs">abs</option>
        <option value="ceil">ceil</option>
        <option value="getrandmax">getrandmax</option>
        <option value="max">max</option>
        <option value="min">min</option>
        <option value="mt_rand">mt_rand</option>
        <option value="pi">pi</option>
        <option value="pow">pow</option>
        <option value="round">round</option>
        <option value="sqrt">sqrt</option>
    </select>

    <!-- Caja de texto para valores adicionales -->
    <div id="valorAdicional" style="display:none;">
        <label for="valoresAdicionales">Ingrese valores adicionales (separados por comas):</label>
        <input type="text" name="valoresAdicionales">
    </div>

    <input type="submit" value="Ejecutar">
</form>

</body>
</html>