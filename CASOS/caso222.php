<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tarea uwu</title>
    <link rel="stylesheet" href="estilo.css"> 
</head>
<body>
    <header>
   
        <h3>PAGO DE EMPLEADOS</h3>
    </header>
    <section>
        <form action="">
            <table border="0" cellspacing = "0" align="center" cellspadding ="0">
                <tr>
                    <td>Empleado:  </td>
                    <td><input type="text" name="txtEmpleado"></td>
                </tr>
                <tr>
                    <td>Horas trabajadas:  </td>
                    <td><input type="text" name="txtHoras"></td>
                </tr>
                <tr>
                    <td>Tarifa por Hora:  </td>
                    <td><input type="text" name="txtTarifa"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit"> <input type="reset"></td>
                </tr>
                <?php
                error_reporting(0);//no te mande errores antes de la ejecución
                $empleado = $_GET['txtEmpleado'];
                $horas = $_GET['txtHoras'];
                $tarifa = $_GET['txtTarifa'];

                /*  sueldo bruto  */
                $sueldo = $horas * $tarifa;
                define ("RMV",1025);

                /* essalud */
                
                $essaludes= $sueldo * 0.9;
                $essaludfin= $sueldo - $essaludes;


                             
               /* descuento AFP */
               $AFP=$sueldo*0.13;

               /* sueldo neto */
               $descneto= $sueldo-$essaludfin-$AFP;

                ?>
                <tr>
                    <td>Empleado: </td>
                    <td>
                    <?php
                        echo $empleado;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Horas trabajadas: </td>
                    <td>
                        <?php
                      echo $horas;
                      ?>
                    </td>
                </tr>
                <tr>
                    <td>Tarifa por hora: </td>
                    <td>
                    <?php
                      echo $tarifa;
                      ?>
                    </td>
                </tr>
                
                <tr>
                    <td>Sueldo bruto: </td>
                    <td>
                    <?php
                        echo "S/.".$sueldo;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Desct Essalud: </td>
                    <td>
                    <?php
                        echo $essaludfin;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Descuento AFP: </td>
                    <td>
                    <?php
                        echo $AFP;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Sueldo Neto: </td>
                    <td>
                        <?php
                        echo $descneto;
                        ?>
                    </td>
                </tr>
                

            </table>
        </form>
    </section>

    
    <footer>
        <h6>selin flores</h6>
    </footer>
</body>
</html>