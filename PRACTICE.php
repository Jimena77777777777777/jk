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

        
    </form>

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
        <h2>Funciones para variables</h2>
        <form action="">
            <?php
            error_reporting(0);
            $lista3 = $_GET['txtLista'];
            $variable = $_GET['txtVariable'];
            $Potencia = $_GET['txtPotencia'];
        
            if ($variable==null) {
                $variable = null;
            }

            switch ($lista3) {
            case 1:
                    $funcion = 'Función exp';
                    if (isset($variable)) {
                        $resultado = exp($variable);
                    } else {
                        $resultado = 'La variable no esta definida';
                    }
                    break;

             case 2:
                     $funcion = 'Función Floor';
                    if (is_numeric($variable)) {
                        $resultado = floor($variable);
                     } else {
                         $resultado = 'La variable no es un número';
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
         /*    case 6:
                if ($_SERVER["REQUEST_METHOD"] == "GET") {
                    // Obtener los números del formulario
                    $numero1 = $_GET["textNumero1"];
                    $numero2 = $_GET["textNumero2"];
                    $numero3 = $_GET["textNumero3"];
            
                    // Crear un array con los números
                    $array = array($numero1, $numero2, $numero3);
            
                    // Encontrar el número mínimo
                    $resultado = max($array);
            
                    // Imprimir el resultado
                    echo "<p>El número mínimo es: $resultado</p>";
                }
                    break;

            case 7:
                    $funcion = 'Función min';
                   
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
                    /*
                    $numero1 = $_GET["textNumero1"]; 
                    $numero2 = $_GET["textNumero2"];
                    $numero3 = $_GET["textNumero3"];
                    $array= array($numero1,$numero2,$numero3);
                    $resultado = min($array); 
                    */
                    
                    
                     
             case 6:
                    $funcion = 'Función mt_rand';
                    $resultado = mt_rand(0, 100);
                    break;
             case 7:
                    $funcion = 'Función pi';
                    $resultado = pi();
                    break;
             case 8:
                    $funcion = 'Función pow';
                    $Potencia= '';
                    $resultado = pow($variable,$Potencia);
                break;
             case 9:
                     $funcion = 'Función round';
                     $resultado = round($variable);
                    break;
             case 10:
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
                        <td><input type="text" name="txtVariable" id="ancho" value="<?php echo $variable?>"></td>
                        <td></td>



                    </tr>
            
                <tr>


                <?php
            error_reporting(0);
            $lista3 = $_GET['txtLista'];
            $variable = $_GET['txtVariable'];
            $Potencia = $_GET['txtPotencia'];
        
            if ($variable==null) {
                $variable = null;
            }

            switch ($lista33) {
                case 1:
                    if ($_SERVER["REQUEST_METHOD"] == "GET") {
                        // Obtener los números del formulario
                        $numero1 = $_GET["textNumero1"];
                        $numero2 = $_GET["textNumero2"];
                        $numero3 = $_GET["textNumero3"];
                
                        // Crear un array con los números
                        $array = array($numero1, $numero2, $numero3);
                
                        // Encontrar el número mínimo
                        $resultado = max($array);
                
                        // Imprimir el resultado
                        echo "<p>El número mínimo es: $resultado</p>";
                    }
                        break;
    
                case 2:
                        $funcion = 'Función min';
                       
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
                        /*
                        $numero1 = $_GET["textNumero1"]; 
                        $numero2 = $_GET["textNumero2"];
                        $numero3 = $_GET["textNumero3"];
                        $array= array($numero1,$numero2,$numero3);
                        $resultado = min($array); 
                        */
                        break;
                        
            }
            
            
            ?>
                    <td>Funciones</td>
                    <td>
                    <select name="txtLista">
                        <option value="0" <?php echo $sel0;?>>Funciónes Numericas</option>
                        <option value="1" <?php echo $sel1;?>>Función exp</option>
                        <option value="2" <?php echo $sel2;?>>Función floor</option>	
                        <option value="3" <?php echo $sel3;?>>Función abs</option>
                        <option value="4" <?php echo $sel4;?>>Función ceil</option>
                        <option value="5" <?php echo $sel5;?>>Función getrandmax</option>
                        <option value="6" <?php echo $sel6;?>>Función mt_rand</option>
                        <option value="7" <?php echo $sel7;?>>Función pi</option>
                        <option value="8" <?php echo $sel8;?>>Función pow</option>
                        <option value="9" <?php echo $sel9;?>>Función round</option>
                        <option value="10" <?php echo $sel10;?>>Función sqrt</option>
                               
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

        <fieldset id="blanco">
                <legend><h3>Caso especial</h3></legend>
            <table align = "center">
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
       
                <tr>


                <td>Funciones</td>
                    <td>
                    <select name="txtLista33">
                    <option value="O" <?php echo $selB;?>>FUNCION</option>
                    <option value="a" <?php echo $selA;?>>Función max</option>
                    <option value="b" <?php echo $selB;?>>Función  min</option>

                    <td></td>
                    <td><input type="submit" id="button" value="Mostrar"></td>
                    <td></td>






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
        
    </section>
    <br>
    <footer>
        <h6>HectorFD Copyright © 2024, todos los derechos reservados </h6>
    </footer>
    <script src="../html/js/script.js"></script>
</body>
</html>