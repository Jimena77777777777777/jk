<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Practica Grupal</title>
</head>
<body>
    <header>
        <h1>Practica Grupal</h1>
        <div class="wrapper">
            <div class="select-btn">
                <span>Selecciona Caso</span>
                <i class="uil uil-angle-down"></i>
            </div>
            <div class="content">
                <div class="search">
                    <i class="uil uil-search"></i>
                    <input type="text" spellcheck="false" placeholder="Buscar">
                </div>
                <ul class="options"></ul>
            </div>
        </div>
    </header>
    <nav>
        
    </nav>
    <section>
        <h2>Integrantes</h2>
        <ul>
            <li>Hector Ferro Dávalos</li>
            <li>Alejandra Jimena</li>
            <li>Dany Yeremy</li>
        </ul>
    </section>
    <br><br>
    <section>
        <h2>Funciones para variables Numericas</h2>
        <form method="get" action="">
            <?php
            error_reporting(0);
            $lista3 = isset($_GET['txtLista']) ? $_GET['txtLista'] : null;
            $variable = isset($_GET['txtVariable']) ? $_GET['txtVariable'] : null;
            $Exponente = isset($_GET['txtExponente']) ? $_GET['txtExponente'] : null;
            $valores = isset($_GET['txtValores']) ? $_GET['txtValores'] : null;
            $cantidad = isset($_GET['txtCantidad']) ? $_GET['txtCantidad'] : null;

            if ($variable == null) {
                $variable = null;
            }

            switch ($lista3) {
                case 1:
                    $funcion = 'Función exp';
                    if (is_numeric($variable)) {
                        $resultado = exp($variable);
                    } else {
                        $resultado = 'La variable no es un número';
                    }
                    break;

                case 2:
                    $funcion = 'Función Floor';
                    if (is_numeric($variable)) {
                        $resultado = floor($variable);
                    } else {
                        $resultado = 'La variable no es un número válido';
                    }
                    break;

                case 3:
                    $funcion = 'Función abs';
                    $resultado = abs($variable);
                    break;

                case 4:
                    $funcion = 'Función ceil';
                    $resultado = ceil($variable);
                    break;

                case 5:
                    $funcion = 'Función getrandmax';
                    $resultado = getrandmax();
                    break;

                case 6:
                    $funcion = 'Función max';
                    if ($cantidad > 0) {
                        $valoresArray = array();                     
                    for ($i = 0; $i < $cantidad; $i++) {     
                        $valor = isset($_GET['txtValores'][$i]) ? $_GET['txtValores'][$i] : null;
                        $valoresArray[] = $valor;
                        }
                    if (!empty($valoresArray)) {
                        $resultado = max($valoresArray);
                    } else {
                        $resultado = 'No se ingresaron valores para calcular el mínimo.';
                        }
                    } else {
                        $resultado = 'La cantidad de valores debe ser mayor que 0.';
                    }
                    break;
                case 7:
                    $funcion = 'Función min';
                    if ($cantidad > 0) {
                        $valoresArray = array();
                    for ($i = 0; $i < $cantidad; $i++) {  
                        $valor = isset($_GET['txtValores'][$i]) ? $_GET['txtValores'][$i] : null;
                        $valoresArray[] = $valor;
                        }
                    if (!empty($valoresArray)) {
                        $resultado = min($valoresArray);
                        } else {
                        $resultado = 'No se ingresaron valores para calcular el mínimo.';
                        }
                    } else {
                        $resultado = 'La cantidad de valores debe ser mayor que 0.';
                    }
                    break;

                    case 8:
                        $funcion = 'Función mt_rand';
                        $resultado = mt_rand(0, 100);
                        break;
                 case 9:
                        $funcion = 'Función pi';
                        $resultado = pi();
                        break;
                 case 10:
                        $funcion = 'Función pow';
                        $Potencia= '';
                        $resultado = pow($variable,$Potencia);
                    break;
                 case 11:
                         $funcion = 'Función round';
                         $resultado = round($variable);
                        break;
                 case 12:
                         $funcion = 'Función sqrt';
                         $resultado = sqrt($variable);
                         break;
    
                    default:
                    echo "El valor de la variable 'lista' no es válido";
                        break;
            }
            ?>
    
            <fieldset>
                <legend>Formulario</legend>
                <table align="center">
                    <!-- Agrega los campos del formulario según tus necesidades -->
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable ?>"></td>
                        <td></td>
                    </tr>

                    <tr>
                        <td>Funciones </td>
                        <td>
                            <select name="txtLista">
                                <!-- Agrega las opciones del menú desplegable según tus necesidades -->
                                <option value="0" <?php echo $lista3 == 0 ? 'selected' : ''; ?>>Funciones Numericas</option>
                                <option value="1" <?php echo $lista3 == 1 ? 'selected' : ''; ?>>Función exp</option>
                                <option value="2" <?php echo $lista3 == 2 ? 'selected' : ''; ?>>Función Floor</option>
                                <option value="3" <?php echo $sel3 ==4;?>>Función abs</option>
                                <option value="4" <?php echo $sel4;?>>Función ceil</option>
                                <option value="5" <?php echo $sel5;?>>Función getrandmax</option>
                                <option value="6" <?php echo $sel6;?>>Función max</option>
                                <option value="7" <?php echo $sel7 == 7;?>>Función  min</option>
                                <option value="8" <?php echo $sel8;?>>Función mt_rand</option>
                                <option value="9" <?php echo $sel9 == 9;?>>Función pi</option>
                                <option value="10" <?php echo $sel10;?>>Función pow</option>
                                <option value="11" <?php echo $sel11;?>>Función round</option>
                                <option value="12" <?php echo $sel12;?>>Función sqrt</option>
                                <!-- Agrega las demás opciones... -->
                            </select>
                        </td>
                        <td></td>
                    </tr>

                    <!-- Añade más campos según sea necesario -->
                 
                  <!-- Agrega la fila de cantidad de valores solo para los casos 6 y 7 -->
                  <?php if ($lista3 == 6): ?>
    <tr>
        <td>Cantidad de valores (max)</td>
        <td><input type="text" name="txtCantidadMax" id="ancho" value="<?php echo $cantidad ?>"></td>
        <td></td>
    </tr>
<?php endif; ?>

<!-- Agrega la fila de cantidad de valores solo para el caso 7 (min) -->
<?php if ($lista3 == 7): ?>
    <tr>
        <td>Cantidad de valores (min)</td>
        <td><input type="text" name="txtCantidad" id="ancho" value="<?php echo $cantidad ?>"></td>
        <td></td>
    </tr>
<?php endif; ?>

<?php
// Agrega un bucle para generar campos de valores según la cantidad ingresada
if ($cantidad > 0) {
    for ($i = 0; $i < $cantidad; $i++) {
        ?>
        <tr>
            <td>Valor <?php echo $i + 1; ?></td>
            <td><input type="text" name="txtValores[]" id="ancho" value="<?php echo isset($valores[$i]) ? $valores[$i] : ''; ?>"></td>
            <td></td>
        </tr>
        <?php
    }
}
?>


                    <tr>
                        <td></td>
                        <td><input type="submit" id="button" value="Mostrar"></td>
                        <td></td>
                    </tr>
                </table>
            </fieldset>

            <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
                <table align="center">
                    <tr>
                        <td>Función</td>
                        <td>Resultado</td>
                        <td></td>
                    </tr>

                    <?php
                    echo "<tr>";
                    echo "<td>";
                    echo $funcion;
                    echo "</td>";
                    echo "<td>";
                    echo $resultado;
                    echo "</td>";
                    echo "<td></td>";
                    echo "</tr>";
                    ?>
                </table>
            </fieldset>
        </form>
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>