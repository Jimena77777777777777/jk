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
            <li>Dany Jeremy</li>
        </ul>
    </section>
    <br><br>
    <section>
        <h2>Funciones para variables</h2>
        <form action="">
            <?php
                    error_reporting(0);
                    $lista3 = isset($_GET['txtLista3']) ? $_GET['txtLista3'] : null;
                    $variable = isset($_GET['txtVariable']) ? $_GET['txtVariable'] : null;
            
                    $sel1 = $sel2 = $sel3 = $sel4 = "";
            
                    switch ($lista3) {
                        case 1:
                            $funcion = 'Función date';
                            if (isset($variable)) {
                                $fechaActual = date("Y-m-d H:i:s");
                                echo "Fecha y hora actual: $fechaActual";
                            } else {
                                $resultado = 'La variable no está definida';
                            }
                            break;
            
                        case 2:
                            $funcion = 'Función time';
                            if (is_numeric($variable)) {
                                $marcaDeTiempo = time();
                                echo "Marca de tiempo actual: $marcaDeTiempo";
                            } else {
                                $resultado = 'La variable no es un número';
                            }
                            break;
            
                        case 3:
                            $funcion = 'Función checkdate';
                            $esFechaValida = checkdate(2, 29, 2024);
            
                            if ($esFechaValida) {
                                echo "La fecha es válida.";
                            } else {
                                echo "La fecha no es válida.";
                            }
                            break;
            
                        case 4:
                            $funcion = 'Función getdate';
                            $informacionFecha = getdate();
                            print_r($informacionFecha);
                            break;
            
                        default:
                            echo "El valor de la variable 'txtLista3' no es válido";
                            break;
                    }




            ?>


<?




?>

            <fieldset>
            <legend>Formulario</legend>
                <table align="center">
                    <tr>
                        <td>Variable</td>
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable?>"></td>
                        <td></td>
                    </tr>
            
                <tr>
                    <td>Monto prestado</td>
                    <td>
                    <select name="txtLista">
                    <option value="1" <?php echo $sel1;?>>Función date</option>
                        <option value="2" <?php echo $sel2;?>>Función time</option>	
                        <option value="3" <?php echo $sel3;?>>Función checkdate</option>
                        <option value="4" <?php echo $sel4;?>>Función getdate</option>
                               
                </select>

                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" id="button" value="Mostrar"></td>
                    <td></td>
                </tr>
            
            </table>
        </fieldset>
        <fieldset id="blanco">
                <legend><h3>Resultado</h3></legend>
            <table align = "center">
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
                        echo "<td>";
                        
                        echo "</td>";
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