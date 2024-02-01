<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../html/css/style.css">
    <title>Practica Grupal</title>
    <script>
        function toggleCantidad() {
            var lista = document.getElementById("txtLista");
            var cantidadInput = document.getElementById("cantidadInput");
            cantidadInput.style.display = (lista.value == "6" || lista.value == "7") ? "block" : "none";
            
            if (lista.value != "6" && lista.value != "7") {
                var cantidadInput = document.getElementById("cantidadInput");
                var valoresRows = document.querySelectorAll('[name^="txtValores"]');
                
                // Oculta la caja de cantidad y las filas de valores generadas
                cantidadInput.style.display = "none";
                valoresRows.forEach(function (row) {
                    row.closest('tr').style.display = "none";
                });
            }
        }
    </script>
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
        <!-- Puedes agregar contenido para la navegación si es necesario -->
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
        <h2>Funciones para variables Numéricas</h2>
        <form method="get" action="" onchange="toggleCantidad()">
        <?php
            error_reporting(0);
            $lista3 = isset($_GET['txtLista']) ? $_GET['txtLista'] : null;
            $variable = isset($_GET['txtVariable']) ? $_GET['txtVariable'] : null;
            $cantidad = isset($_GET['txtCantidad']) ? $_GET['txtCantidad'] : null;

            switch ($lista3) {
                case 1:
                    $funcion = 'Función exp';
                    $resultado = is_numeric($variable) ? exp($variable) : 'La variable no es un número';
                    break;
                case 2:
                    $funcion = 'Función Floor';
                    $resultado = is_numeric($variable) ? floor($variable) : 'La variable no es un número válido';
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
                        $valoresArray = [];
                        for ($i = 0; $i < $cantidad; $i++) {
                            $valor = isset($_GET['txtValores'][$i]) ? $_GET['txtValores'][$i] : null;
                            $valoresArray[] = $valor;
                        }
                        $resultado = !empty($valoresArray) ? max($valoresArray) : 'No se ingresaron valores para calcular el máximo.';
                    } else {
                        $resultado = 'La cantidad de valores debe ser mayor que 0.';
                    }
                    break;
                case 7:
                    $funcion = 'Función min';
                    if ($cantidad > 0) {
                        $valoresArray = [];
                        for ($i = 0; $i < $cantidad; $i++) {
                            $valor = isset($_GET['txtValores'][$i]) ? $_GET['txtValores'][$i] : null;
                            $valoresArray[] = $valor;
                        }
                        $resultado = !empty($valoresArray) ? min($valoresArray) : 'No se ingresaron valores para calcular el mínimo.';
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
                    $Potencia = 2; // Aquí debes definir el valor del exponente
                    $resultado = pow($variable, $Potencia);
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
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable ?>"></td>
                        <td></td>
                    </tr>
            <tr>
                <td>Funciones </td>
                <td>
                    <select name="txtLista" id="txtLista" onchange="toggleCantidad()">
                                <option value="0" <?php echo $lista3 == 0 ? 'selected' : ''; ?>>Función numérica</option>
                                <option value="1" <?php echo $lista3 == 1 ? 'selected' : ''; ?>>Función exp</option>
                                <option value="2" <?php echo $lista3 == 2 ? 'selected' : ''; ?>>Función Floor</option>
                                <option value="3" <?php echo $lista3 == 3 ? 'selected' : ''; ?>>Función abs</option>
                                <option value="4" <?php echo $lista3 == 4 ? 'selected' : ''; ?>>Función ceil</option>
                                <option value="5" <?php echo $lista3 == 5 ? 'selected' : ''; ?>>Función getrandmax</option>
                                <option value="6" <?php echo $lista3 == 6 ? 'selected' : ''; ?>>Función max</option>
                                <option value="7" <?php echo $lista3 == 7 ? 'selected' : ''; ?>>Función min</option>
                                <option value="8" <?php echo $lista3 == 8 ? 'selected' : ''; ?>>Función mt_rand</option>
                                <option value="9" <?php echo $lista3 == 9 ? 'selected' : ''; ?>>Función pi</option>
                                <option value="10" <?php echo $lista3 == 10 ? 'selected' : ''; ?>>Función pow</option>
                                <option value="11" <?php echo $lista3 == 11 ? 'selected' : ''; ?>>Función round</option>
                                <option value="12" <?php echo $lista3 == 12 ? 'selected' : ''; ?>>Función sqrt</option>
                    </select>
                </td>
                <td></td>
            </tr>
            
            <tr id="cantidadInput" <?php if ($lista3 != 6 && $lista3 != 7) echo 'style="display:none;"'; ?> >
                <td>Cantidad de valores</td>
                <td><input type="text" name="txtCantidad" id="ancho" value="<?php echo $cantidad ?>"></td>
                <td></td>
            </tr>
           
            <?php
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
                        <td><input type="submit" id="button" value="Mostrar" ></td>
                   
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