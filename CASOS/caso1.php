<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso desarrollado 01</title>
    
</head>
<body>
    <header>
        <h3>CASA DE CAMBIOS</h3>
    </header>

    <section>
        <form action="caso1.php" method="get">
            <table border="0" cellspacing="0" cellspading="0" >;
                <tr>
                    <td>Monto en soles : </td>
                    <td>
                        <input type="text" name="textsoles">
                    </td>
                </tr>
                <tr>
                    <td> Monto en dolares: </td>
                    <td>
                        <input type="text" name="textdolar" >
                    </td>
                </tr>
                <tr>
                    <td>Monto en euros:</td>
                    <td>
                        <input type="text" name= "texteuro">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Procesar">
                    </td>
                    <td>
                        <input type="reset" value="Limpiar">
                    </td>
                </tr>

                <?php
                    error_reporting(0);
                    $soles=$_GET['txtsoles'];
                    $dolares=$_GET['txtdolar'];
                    $euros=$_GET['txteuro'];
                ?>
                <tr>
                    <td>Total soles: </td>
                    <td>
                        <?php
                            printf("$.2f", $soles);
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>Toatl dolares: </td>
                    <td>
                    <?php
                        define("DOLAR", 3.71);
                        $dolar =$soles * DOLAR;
                        printf("%.2F,$dolar");

                    ?>
                    </td>
                </tr>
                <tr>
                    <td>Total euros: </td>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                </tr>

            </table>
        </form>
    </section>

    <footer>
        <h6> Aleeu</h6>
    </footer>
</body>
</html>